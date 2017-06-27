<!DOCTYPE html>
<html>
<head>
	<title>Vice Project | John Christensen</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="styles/style.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

	<link rel="icon" type="image/png" href="images/favicon-32x32.png" sizes="32x32" />
	<link rel="icon" type="image/png" href="images/favicon-16x16.png" sizes="16x16" />
</head>
<body>

<?php include 'header.php';?>

<main class="individual vice-background" id="content">
	
<div class="project-wrapper">

	<div class="project-header">

		<div class="name-and-categories">

			<h1>Vice</h1>

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

			<p>VICE was my first responsive website made in BCIT's Technical Web Designer program. I used media queries and flex box to create a fluid design. Inspiration was taken from 80's neon colour palettes and 80's artwork. A few modern design trends were implemented, such as CSS3 gradients, bold colours, and subtle box shadows.</p>

			<a href="http://jchristensen.htpwebdesign.ca/responsiveproject/">
				<div class="submit">
					View Live
				</div>
			</a>

		</div><!-- end description-and-live -->

	</div><!-- end project-header -->

	<div class="project-main">

		<div class="project-picture">

			<img src="images/desktopvice.png" alt="Apple desktop view of Vice website">
			<img src="images/viceipad.png" alt="Apple ipad view of Vice website">
			<img src="images/viceiphone.png" alt="Apple iphone view of Vice website">

		</div><!-- end project-picture -->

		<h2>Colours</h2>

		<div class="color-palette">

			<img src="images/vicecolour1.png" alt="Vice colour palette">
			<img src="images/vicecolour2.png" alt="Vice colour palette">
			<img src="images/vicecolour3.png" alt="Vice colour palette">
			<img src="images/vicecolour4.png" alt="Vice colour palette">
			<img src="images/vicecolour5.png" alt="Vice colour palette">
			<img src="images/vicecolour6.png" alt="Vice colour palette">

		</div><!-- end color-palette -->


		<div class="things-to-improve">

			<h2>Things to improve</h2>

			<p>When the browser screen is reduced smaller than 350px, the nav bar items overflow the page. I would fix this simply by reducing the padding between the "a" tags. Also, on mobile, the footer content feels a little bit squished. I would fix this by increasing the top and bottom padding between lines.</p>

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