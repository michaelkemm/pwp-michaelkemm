<? // file '/index.php' ?>
<?php
// Required file to initialize the Swiftmailer
require_once("./swiftmailer/lib/swift_required.php");

// Class that contains the information of the email that will be sent (from, to, etc.)
require_once("./classes/EmailParts.php");

// The class that "breaks" the data sent with the HTML form to a more "usable" format.
require_once("./classes/ContactForm.php");

// =====================
// Main configuration
// =====================
define("EMAIL_SUBJECT", "Contact form");        // Subject of the contact mail
define("EMAIL_TO", "dev@michaelkemm.com");        // Where the contact mail should be sent

// SMTP configuration
define("SMTP_SERVER", 'localhost');                // Your SMTP server host
define("SMTP_PORT", 1025);                        // Your SMTP server port

define("UPLOAD_DIR", 'public_html/composer.php');            // Default php upload dir

// main method. It's the first method called
function main($contactForm) {

	// Checks if something was sent to the contact form, if not, do nothing
	if (!$contactForm->isDataSent()) {
		return;
	}

	// validates the contact form and initialize the errors
	$contactForm->validate();

	$errors = array();

	// if the contact form is not valid...
	if (!$contactForm->isValid()) {
		// gets the error in the array $errors
		$errors = $contactForm->getErrors();

	} else {
		// if the contact form is valid...
		try {
			// send the email created with the contact form
			$result = sendEmail($contactForm);

			// after the email is sent, redirect and "die".
			// We redirect to prevent refreshing the page which would resend the form
			header("Location: ./success.php");
			die();
		} catch (Exception $e) {
			// an error occured while sending the email.
			// Log the error and add an error message to display to the user.
			error_log('An error happened while sending email contact form: ' . $e->getMessage());
			$errors['oops'] = 'Ooops! an error occured while sending your email! Please try again later!';
		}

	}

	return $errors;
}

// Sends the email based on the information contained in the contact form
function sendEmail($contactForm) {
	// Email part will create the email information needed to send an email based on
	// what was inserted inside the contact form
	$emailParts = new EmailParts($contactForm);

	// This is the part where we initialize Swiftmailer with
	// all the info initialized by the EmailParts class
	$emailMessage = Swift_Message::newInstance()
		->setSubject($emailParts->getSubject())
		->setFrom($emailParts->getFrom())
		->setTo($emailParts->getTo())
		->setBody($emailParts->getBodyMessage());

	// If an attachment was included, add it to the email
	if ($contactForm->hasAttachment()) {
		$attachmentPath = $contactForm->getAttachmentPath();
		$emailMessage->attach(Swift_Attachment::fromPath($attachmentPath));
	}

	// Another Swiftmailer configuration. You can change SMTP mode to Mail, Sendmail, etc.
	// see http://swiftmailer.org/docs/sending.html for more details
	$transport = Swift_SmtpTransport::newInstance(SMTP_SERVER, SMTP_PORT);
	$mailer = Swift_Mailer::newInstance($transport);
	$result = $mailer->send($emailMessage);
	return $result;
}

// instantiate the ContactForm with the information of the form and the possible uploaded file
$contactForm = new ContactForm($_POST, $_FILES);

// we are calling the "main" method. It will return a list of errors.
$errors = main($contactForm);

// we call the "contactForm" view to display the HTML contact form
require_once("./classes/contactForm.php");