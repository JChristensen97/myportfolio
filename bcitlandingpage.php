<!DOCTYPE html>
<html>
<head>
	<title>BCIT Landing Page Project | John Christensen</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="styles/style.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

	<link rel="icon" type="image/png" href="images/favicon-32x32.png" sizes="32x32" />
	<link rel="icon" type="image/png" href="images/favicon-16x16.png" sizes="16x16" />
</head>
<body>

<?php include 'header.php';?>

<main class="individual bcit-background" id="content">
	
<div class="project-wrapper">

	<div class="project-header">

		<div class="name-and-categories">

			<h1>BCIT Landing Page</h1>

			<ul>
				<li><img src="images/responsiveicon.png" alt="Responsive icon"></li>
				
				<li><img src="images/htmlicon.png" alt="HTML icon"></li>
				
				<li><img src="images/css3icon.png" alt="CSS3 icon"></li>
				
				<li><img src="images/javascripticon.png" alt="JavaScript icon"></li>
				
				<li><img src="images/illustratoricon.png" alt="Adobe Illustrator icon"></li>
			</ul>

		</div><!-- end name-and-categories -->

		<div class="description-and-live">

			<h2>Description</h2>

			<p>This website was used as a landing page for some of my BCIT projects. This landing page underwent a massive change about half way through our semester, once we learned responsive web design. Inspiration for this website came from Google's Material Design, including colour scheme, shadows, and simplicity. This website is very easy to navigate, and made it easier for teachers to find and mark my projects.</p>

			<a href="http://jchristensen.htpwebdesign.ca/">
				<div class="submit">
					View Live
				</div>
			</a>

		</div><!-- end description-and-live -->

	</div><!-- end project-header -->

	<div class="project-main">

		<div class="project-picture">

			<img src="images/landingpagedesktop.png" alt="Apple desktop BCIT landing page screen">
			<img src="images/landingpagetablet.png" alt="Apple ipad BCIT landing page screen">
			<img src="images/landingpagephone.png" alt="Apple iphone BCIT landing page screen">

		</div><!-- end project-picture -->

		<h2>Colours</h2>

		<div class="color-palette">

			<img src="images/bcitcolour1.png" alt="BCIT landing page colour palette">
			<img src="images/bcitcolour2.png" alt="BCIT landing page colour palette">
			<img src="images/bcitcolour3.png" alt="BCIT landing page colour palette">

		</div><!-- end color-palette -->

		<div class="things-to-improve">

			<h2>Things to improve</h2>

			<p>If I were to redo this website, I would probably add a little more colour variation. I would also set the project box with to percentage based instead of pixels, in order to have more than one project in a single row for a longer period of time. Social media icons in the footer would get a redesign as well, as they are not very asthetically pleasing.</p>

		</div><!-- end things-to-improve -->

	</div><!-- end project-main -->

</div><!--end project-wrapper-->

</main>

<?php include 'footer.php';?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="scripts/script.js"></script>
</body>
</html>