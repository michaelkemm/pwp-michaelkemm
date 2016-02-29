# pwp-michaelkemm
This is my personal web page

### Milestone 1 Feedback

&#10004; Correctly set up the git/GitHub/PhpStorm toolchain.

&#10004; Create the directory structure for the project as outlined.

&#10004; Define a purpose, audience, and goal for your project.

&#10004; Create one Persona for your proposed project.

&#10008; Create one Use Case for your proposed project, based on the Persona.

A little more detail is needed in the Persona, and your Use Case is missing. Based on what you have here, it looks like you will be creating a website for yourself to attract freelance clients. It would help you to create at least a minimal use case to guide your development, and a more well defined Persona based upon the types of clients you are looking to work with. Go ahead and get started on Milestone 2a. Your HTML code looks great. Right now, your Milestone 1 passes at [Tier I](https://bootcamp-coders.cnm.edu/projects/personal/rubric/). If you add a Use Case, and a more well-defined Persona, I will pass this Milestone at [Tier II](https://bootcamp-coders.cnm.edu/projects/personal/rubric/)

### Milestone 2&alpha; Feedback

&#10004; Create a sitemap outlining the pages you plan to include in your PWP.

&#10004; Document a brief plan or strategy for your content that will support the overall purpose and goal of the site.

&#10004; Map out a simple interaction flow that details the steps a user must take to successfully use your site to acheive the goal.

&#10004; Create a mobile and desktop/laptop wireframe for each page layout.

Nice job on the wireframes. This is a decent plan on which to begin building your site in HTML/Bootstrap/CSS. Your sitemap, content strategy, and interaction flow are all simple and to the point - so this works. Don't forget that a simple contact form is required, so add one to your contact area. We'll be using PHP and Swiftmailer to power that.

Think about possibly adding some technical details to your work samples. For instance: technology/programming languages, role on the project, date, etc. Pop-up modal windows or gallery functionality can easily be included, or you can just add a bit of text to the page. Your choice, this is not mandatory.

Your Milestone 2&alpha; passes at [Tier II](https://bootcamp-coders.cnm.edu/projects/personal/rubric/). You're clear to start development on your PWP.

#### Edits &amp; Suggestions
- You're missing the &lt;title&gt; and &lt;meta charset="utf"/&gt; tags
- Don't forget to add alt text to your images

### Milestone 2&beta; Feedback
Awesome awesome job. You're almost ready to deploy to ASO. Just some final polish on design and HTML/CSS, dir structure, and form mailer and you'll be re4ady to go. See feedback below. Your Milestone 2b passes at [Tier IV](https://bootcamp-coders.cnm.edu/projects/personal/rubric/)

#### Edits &amp; Suggestions
1. div#home: consider setting a min-height in you CSS for mobile first, then inside of a @media query, set a min-height for desktop. See snippet:
```
CSS:
--------

#home {
  min-height: 400px;
}

@media only screen and (min-width: 992px) {
  #home {
    min-height: 600px;
  }
}
```
2. put your &lt;ul&gt;s inside a div.panel-body. Do not apply .panel-body to the &lt;ul&gt;. BS doesn't like it.
3. remove .pad-section {width: 100vw;}
4. footer: Maybe add some padding. Remove the &lt;hr&gt;.
5. Add a contact form to your contact section.
6. Final polish on design: text colors, padding, etc.
7. Add padding to each section so navbar-fixed plays nice.
8. fix up directory structure: create an index.php file in /public_html - this will be your landing page.
9. Look over https://bootcamp-coders.cnm.edu/class-materials/php/email/[https://bootcamp-coders.cnm.edu/class-materials/php/email/]. Add the composer.json file and mailer.php

