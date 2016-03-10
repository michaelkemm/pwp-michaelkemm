<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
	<head>
		<meta charset="utf-8"/>
		<title>Michael Kemm</title>
		<?php require_once(__DIR__ . "/lib/head-tags.html"); ?>
		<link rel="stylesheet" href="lib/bootstrap-social.css"/>
		<link rel="stylesheet" href="lib/styles.css"/>
		<link href='https://fonts.googleapis.com/css?family=Josefin+Slab|Gilda+Display' rel='stylesheet' type='text/css'>
	</head>
	<!-- enables sticky footer -->
	<body class="sfooter">
		<div class="sfooter-content">
			<header id="home" class="img-resposive">
				<nav id="navbar" class="navbar navbar-inverse navbar-fixed-top">
					<div class="container">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-nav"
									  aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand text-left" href="#home">Michael Kemm</a>
						</div>
						<!-- nav links for toggling -->
						<div class="collapse navbar-collapse" id="top-nav">
							<ol class="nav navbar-nav navbar-right">
								<li><a href="#about">About</a></li>
								<li><a href="#projects">Projects</a></li>
								<li><a href="#information">Skill Set</a></li>
								<li><a href="#contact">Contact</a></li>
							</ol>
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container -->
				</nav>
			</header>
			<main>
				<!-- section 2 - about -->
				<section id="about" class="pad-section">
					<div class="container">
						<h2 class="text-center">About</h2>
						<hr/>
						<div class="row">
							<p class="about">I like creating cool stuff, especially within the web paradigm. I also like
								pancakes, video games, and camping among other things. I could go on about myself, but it's much
								more fun to get to know people through conversation. If there's anything else you're curious
								about in regard to me,
								or in general, I'd love to have a chat with you. Just click that
								nifty contact link up at the top of the screen.
							</p>
						</div>
					</div>
				</section>
				<!-- section 3 - projects -->
				<section id="projects" class="pad-section">
					<div class="container">
						<h2 class="text-center">Projects</h2>
						<h3 class="text-center">Coming soon!</h3>
						<hr/>
						<div class="row text-center">
							<div class="col-sm-4 col-xs-12">
								<i class="fa fa-cog fa-spin fa-5x"></i>
								<h3>jpegery.com</h3>
								<p>Under construction</p>
							</div>
							<div class="col-sm-4 col-xs-12">
								<i class="fa fa-cog fa-spin fa-5x"> </i>
								<h3>abhonest1.com</h3>
								<p>Under construction</p>
							</div>
							<div class="col-sm-4 col-xs-12">
								<i class="fa fa-cog fa-spin fa-5x"> </i>
								<h3>Three cogs look better than two...</h3>
								<p></p>
							</div>
						</div>
					</div>
				</section>
				<!-- section 4 - skills -->
				<div id="information" class="pad-section img">
					<div class="container">
						<div class="row">
							<div class="col-sm-6">
								<div class="panel">
									<div id="panel-heading" class="panel-heading">
										<h2 class="panel-title">Core competencies</h2>
									</div>
									<div class="panel-body">
										<ul>
											<li>Website and Application Development</li>
											<li>Diverse Languages, Frameworks, and Technologies</li>
											<li>Internal and External Communications</li>
											<li>Team Collaboration</li>
											<li>Testing and Quality Assurance</li>
											<li>Troubleshooting and Issue Resolution</li>
											<li>Technical Documentation and Reports</li>
											<li>Independent Learning/Self-Study</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="panel">
									<div id="panel-heading" class="panel-heading">
										<h2 class="panel-title">Technical Skill Set</h2>
									</div>
									<div class="panel-body">
										<ul>
											<li>Programming Languages (JavaScript, jQuery, AngularJS, PHP, OOP, MySQL, HTML5, CSS3,
												Bootstrap)
											</li>
											<li>Interface Design and Development (UI, UX, Terminal, PhpStorm)</li>
											<li>Open Source Editing and Extensions (Brackets, Firebug)</li>
											<li>Web Servers (xAMP stack)</li>
											<li>Web Services (REST)</li>
											<li>Test Environments (TDD)</li>
											<li>GitHub collaboration and version control tools</li>
											<li>Web-based tools and applications</li>
											<li>Windows and Mac Operating Systems</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- section 5 - contact -->
				<section id="contact" class="pad-section">
					<div class="container">
						<div class="row text-center">
							<div class="col-sm-12">
								<h3>Contact</h3>
								<hr/>
								<form id="contact-form" class="form-horizontal" method="post" action="php-lib/phpMailer.php">
									<div class="form-group">
										<label class="control-label col-xs-2" for="name">Name</label>
										<div class="col-xs-10">
											<input type="text" class="form-control" name="name" id="name" required>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-xs-2" for="email">Email</label>
										<div class="col-xs-10">
											<input type="email" class="form-control" name="email" id="email"
													 required>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-xs-2" for="Subject">Subject</label>
										<div class="col-xs-10">
											<input type="text" class="form-control" name="subject" id="subject"
													 placeholder="So I know what we're talking about" required>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-xs-2">Message</label>
										<div class="col-xs-10">
											<textarea id="message" class="form-control" rows="3" name="message"
														 placeholder="Let's get this conversation started!"
														 required></textarea>
										</div>
									</div>
									<div class="form-group">
										<div>
											<button type="submit" class="btn btn-primary center-block"><i
													class="fa fa-paper-plane"></i> Submit
											</button>
										</div>
									</div>
								</form>
								<div id="output-area"></div>
								<hr/>
							</div>
						</div>
						<div class="row text-center">
							<a href="https://www.linkedin.com/in/michaelkemm" target="_blank"
								class="btn btn-social-icon btn-linkedin">
								<span class="fa fa-linkedin"></span>
							</a>
							<a href="https://twitter.com/michaelkemm" target="_blank" class="btn btn-social-icon btn-twitter">
								<span class="fa fa-twitter"></span>
							</a>
							<a href="https://github.com/michaelkemm" target="_blank" class="btn btn-social-icon btn-github">
								<span class="fa fa-github"></span>
							</a>
						</div>
					</div>
				</section>
				<!-- footer -->
				<footer>
					<div class="container">
						<p class="text-center">Copyright &copy; Michael Kemm 2016</p>
					</div>
				</footer>
			</main>
		</div>
		<script type="text/javascript" src="lib/script.js"></script>
	</body>