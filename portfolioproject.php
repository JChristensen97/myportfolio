<!DOCTYPE html>
<html>
<head>
	<title>Portfolio Project | John Christensen</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="styles/style.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

	<link rel="icon" type="image/png" href="images/favicon-32x32.png" sizes="32x32" />
	<link rel="icon" type="image/png" href="images/favicon-16x16.png" sizes="16x16" />
</head>
<body>

<?php include 'header.php';?>

<main class="individual portfolio-background" id="content">
	
<div class="project-wrapper">

	<div class="project-header">

		<div class="name-and-categories">

			<h1>Portfolio</h1>

			<ul>
				<li><img src="images/responsiveicon.png" alt="Responsive icon"></li>
				
				<li><img src="images/htmlicon.png" alt="HTML icon"></li>
				
				<li><img src="images/css3icon.png" alt="CSS3 icon"></li>
				
				<li><img src="images/sassicon.png" alt="SASS icon"></li>
				
				<li><img src="images/phpicon.png" alt="PHP icon"></li>

				<li><img src="images/illustratoricon.png" alt="Adobe Illustrator icon"></li>
			</ul>

		</div><!-- end name-and-categories -->

		<div class="description-and-live">

			<h2>Description</h2>

			<p>The portfolio you are viewing right now is meant to display my favourite web development and design projects. I really enjoyed making this website, although it did take me a frustrating amount of time to come up with a solid design. I wanted to make use of SASS in this project after getting a better understanding from reading <a href="https://abookapart.com/products/sass-for-web-designers">"SASS for Web Designers"</a> from the A Book Apart series. I feel like I was able to keep this website clean, yet exciting, with the use of bold colours, and few animations.  </p>

		</div><!-- end description-and-live -->

	</div><!-- end project-header -->

	<div class="project-main">

		<div class="project-picture">

			<img src="images/portfoliodesktop1.png" alt="Apple desktop Portfolio website screen">
			<img src="images/portfoliotablet1.png" alt="Apple ipad portfolio website screen">
			<img src="images/portfoliophone1.png" alt="Apple iphone portfolio website screen">
			<img id="tablet2" src="images/portfoliotablet2.png" alt="Apple ipad portfolio website screen">
			<img src="images/portfoliotablet3.png" alt="Apple ipad portfolio website screen">

		</div><!-- end project-picture -->

		<h2>Colours</h2>

		<div class="color-palette">

			<img src="images/portfoliocolourpalette1.png" alt="Food Explorer colour palette">
			<img src="images/portfoliocolourpalette2.png" alt="Food Explorer colour palette">
			<img src="images/portfoliocolourpalette3.png" alt="Food Explorer colour palette">
			<img src="images/portfoliocolourpalette4.png" alt="Food Explorer colour palette">

		</div><!-- end color-palette -->

		<div class="style-wireframes">

			<h2>Final Style Tiles & Wireframes</h2>

			<p>Styling for this website consists of bold, contrasting colours. The website layout is very easy to navigate, with only three pages. I stayed away from making a single page scrolling website, as I wanted optimal SEO for every page.</p>

			<div class="style-wireframes-images">

				<img class="image" src="images/portfolio-styletile.png" alt="final version of portfolio project style tile.">

				<img class="image" src="images/portfolio-wireframe-home-final.png" alt="final version of portfolio project wireframe home page.">

			</div><!-- end style-wireframes-images -->

		</div><!-- end style-wireframes -->

		<div class="previous-versions">

			<h2>Previous Iterations</h2>

			<p>Original style tile consisted of neutral, minimal colours. In my head, this looked nice, but after seeing it on screen, I knew more colour was needed. Next, I experimented with a colour palette that looked very nice on a website I viewed, but the colours did not suit my layout.</p>

			<div class="style-wireframes-images">

				<img src="images/portfolio-styletile-v2.png" alt="portfolio project styletile version two.">

				<img src="images/portfolio-styletile-v3.png" alt="portfolio project styletile version three.">

			</div><!-- end style-wireframes-images -->

			<p>Picking a user friendly wireframe that suited my style took some time. I originally thought about keeping one project per row on the home page, as I thought I would be showcasing fewer project pieces. When I finally decided which projects I wanted to showcase, I knew that having one project per line would result in too much scrolling for the user.</p>
			<p>Displayed below are the first version of home page wireframe as well as the second version, which is very similar to the final version. </p>

			<div class="style-wireframes-images">

			<img src="images/portfolio-wireframe-home.png" alt="version one of portfolio wireframe home page.">

			<img src="images/portfolio-wireframe-homev2.png" alt="version two of portfolio wireframe home page.">


			</div><!-- end style-wireframes-images -->

		</div><!-- end previous-versions -->

		<div class="things-to-improve">

			<h2>Things to improve</h2>

			<p>I've been wanting to change the animated headers to something that looks a little more professional. I also need to optimize all the images with "picture" tags to improve site speed.</p>

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