<!DOCTYPE html>
<html>
<head>
	<title>John Christensen | About</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="styles/style.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

	<link rel="icon" type="image/png" href="images/favicon-32x32.png" sizes="32x32" />
	<link rel="icon" type="image/png" href="images/favicon-16x16.png" sizes="16x16" />
</head>
<body>

<a id="skip-to-content" href="#hi">skip to main content</a>

<nav class="nav-main">

	<picture>
		<source srcset="images/logomobile.png" media="(max-width: 400px)">
		<source srcset="images/logo.png">
		<img src="images/logo.png" alt="Teal coloured John Christensen logo">
	</picture>
	
	<ul>

		<li><div class="underline"><a href="index.php">Home</a></div></li>

		<li><div class="underline current"><a href="about.php">About</a></div></li>

		<li><div class="underline"><a href="contact.php">Contact</a></div></li>

	</ul>

</nav>

<!-- header animation
 -->
<div class="svgbox">

<svg viewBox="0 0 960 300">
	<symbol id="s-text">
		<text text-anchor="middle" x="50%" y="80%">About</text>
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

<main id="content">

	<div class="row">

		<div class="left-side">

			<div class="intro-paragraph">
				<p>Nice to meet you! I am a front end web developer and designer based in Vancouver BC. I have a strong desire to create clean, and functional websites that align with current web trends. </p>
			</div>

			<div class="background-paragraph">
				<p>I graduated from BCIT's Technical Web Designer program in June 2017. This program was six months long, and extremely intensive. Prior to attending BCIT, I took a web development class at Douglas College. Besides formal school education, I have done much self taught learning through books and online courses such as Code Acedemy. I'm always looking to expand my skills. Learning about the stuff I love is not a chore-it's a passion.</p>
				<p>Want to chat about anything web related? Dont hesitate to <a href="contact.html">contact me!</a> I'm always up for a coffee.</p>
			</div>

			<picture>
				<source srcset="images/class-picture-cropped3.png" media="(max-width: 500px)">
				<source srcset="images/class-picture-cropped2.png" media="(max-width: 800px)">
				<source srcset="images/class-picture-tablet.png" media="(max-width: 1000px)">
				<source srcset="images/class-picture-cropped.png" media="(max-width: 1500px)">
				<source srcset="images/class-picture.png">
				<img class="class-picture" alt="BCIT TWD class photo at BCIT downtown campus" src="images/class-picture.png">
			</picture>
			

		</div><!--end left side-->

		<div class="right-side">

			<h1>Skills</h1>

			<div class="images-wrapper">
				<img src="images/htmlicon.png" alt="HTML icon">
				<img src="images/css3icon.png" alt="CSS3 icon">
				<img src="images/javascripticon.png" alt="JavaScript icon">
				<img src="images/phpicon.png" alt="PHP icon">
				<img src="images/wordpressicon.png" alt="WordPress icon">
				<img src="images/sassicon.png" alt="SASS icon">
				<img src="images/giticon.png" alt="Git icon">
				<img src="images/responsiveicon.png" alt="Responsive icon">
				<img src="images/uxicon.png" alt="UX icon">
				<img src="images/uiicon.png" alt="UI icon">
				<img src="images/illustratoricon.png" alt="Adobe Illustrator icon">
				<img src="images/photoshopicon.png" alt="Adobe Photoshop icon">
			</div>

		</div><!--end right side-->

	</div><!--end row-->

</main>

<?php include 'footer.php';?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="scripts/script.js"></script>
</body>
</html>