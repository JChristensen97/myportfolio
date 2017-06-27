<!DOCTYPE html>
<html>
<head>
	<title>John Christensen | Contact</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="styles/style.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

	<link rel="icon" type="image/png" href="images/favicon-32x32.png" sizes="32x32" />
	<link rel="icon" type="image/png" href="images/favicon-16x16.png" sizes="16x16" />
</head>
<body>

<a id="skip-to-content" href="#content">skip to main content</a>

<nav class="nav-main">

	<picture>
		<source srcset="images/logomobile.png" media="(max-width: 400px)">
		<source srcset="images/logo.png">
		<img src="images/logo.png" alt="Teal coloured John Christensen logo">
	</picture>
	
	<ul>

		<li><div class="underline"><a href="index.php">Home</a></div></li>

		<li><div class="underline"><a href="about.php">About</a></div></li>

		<li><div class="underline current"><a href="contact.php">Contact</a></div></li>

	</ul>

</nav>

<!-- header animation
 -->
<div class="svgbox">

<svg viewBox="0 0 960 300">
	<symbol id="s-text">
		<text text-anchor="middle" x="50%" y="80%">Contact</text>
	</symbol>

	<g class = "g-ants">
		<use xlink:href="#s-text" class="text-copy"></use>
		<use xlink:href="#s-text" class="text-copy"></use>
		<use xlink:href="#s-text" class="text-copy"></use>
		<use xlink:href="#s-text" class="text-copy"></use>
    <use xlink:href="#s-text" class="text-copy"></use>
		<use xlink:href="#s-text" class="text-copy"></use>
    
	</g>
</svg>
</div>
<!--  end header animation
 -->

<main class="contact-page" id="content">

	<div class="contact-left">

		<div class="contact-info">
			<p>John Christensen</p>
			<p>christensenjohn035@gmail.com</p>
			<p>(778) 960-7322</p>
		</div>
		
		<div class="social">
			<h2>Find me on social media!</h2>

			<ul>
				<li><div class="underline"><a href="https://www.linkedin.com/in/john-christensen-06022613b/">LinkedIn</a></div></li>
				<li><div class="underline"><a href="https://www.facebook.com/john.christensen.353">Facebook</a></div></li>
				<li><div class="underline"><a href="https://www.instagram.com/j.r.christensen/?hl=en">Instagram</a></div></li>
				<li><div class="underline"><a href="https://twitter.com/johnchristens3n">Twitter</a></div></li>
			</ul>

		</div><!--end social-->

	</div><!--end contact-left-->

	<div class="contact-right">
		<div class="form">
			<form method="post" action="form-processing.php">

			    <label for="name">Name</label>
			    <input type="text" id="name" name="name" required="required">

			    <label for="email">Email</label>
			    <input type="email" id="email" name="email" required="required">

			    <label for="message">Message</label>
			    <textarea id="message" name="message" style="height:200px" required="required"></textarea>
			    
			    <input class="submit" type="submit" value="Submit">

		  	</form>
	  	</div><!--end form class-->
	</div><!--end contact-right-->

</main>

<?php include 'footer.php';?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="scripts/script.js"></script>
</body>
</html>