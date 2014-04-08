<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="css/normalize.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<!--<script src="src" type="text/javascript"></script>-->
<title>TL - Agency Chatter</title>
</head>
<body>
<!--include talent-->
<?php include('views/talent-people.php') ?>
<!--include talent-->
<section class="container-push">
<!--include header-->
<?php include('views/header.php') ?>
<!--include header-->

<!--Agency Chatter header-->
<article class="container agency-chatter-bg" data-type="background" data-speed="5">	
	<h1 class="lions-h1">AGENCY<br> CHATTER</h1><a name="chatter"></a>
</article>
<!--Agency Chatter header-->
<!--Agency Chatter -->
<article class="container dots-bg4 cf">
	<section class="inner cf">
		<div class="chatter-post-large cf">
			<img src="img/silver-tiger.jpg" alt="silver tiger" class="inline-top left">
			<div class="chatter-right">
				<h1 class="chatter-h1">Lorem ipsum dolor sit amet, consect etur adi piscing elit. Morbi eget varius dolor. </h1>
				
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eget varius dolor. Integer id urna accumsan, facilisis risus in, pulvinar ante. Maecenas imperdiet gravida arcu sit amet venenatis. Curabitur suscipit vehicula fringilla. Suspendisse eleifend magna eget iaculis mollis. Nam imperdiet, diam vitae consectetur placerat, tortor urna aliquam turpis, a pretium arcu turpis quis turpis.</p> 
	
				<a href="agency-chatter-post.php" class="blk-border-btn">READ MORE</a>
			</div>	
		</div>
		<section class="chatter-post left">
			<img src="img/flags-post-img.jpg" alt="post-img" class="post-img">
			<h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eget varius dolor. </h3>
			
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eget varius dolor. Integer id urna accumsan, facilisis risus in, pulvinar ante. Maecenas imperdiet gravida arcu sit amet venenatis. Curabitur suscipit vehicula fringilla. Suspendisse eleifend magna eget iaculis mollis. Nam imperdiet, diam vitae consectetur placerat, tortor urna aliquam turpis, a pretium arcu turpis quis turpis.</p>
	
			<p>Quisque ullamcorper, neque eu pretium vulputate, sapien ipsum dapibus mauris, eu tincidunt tortor quam sit amet odio. Proin nibh mi, auctor ac magna eu, hendrerit vehicula augue. Donec sed urna orci. Praesent at euismod justo. Morbi eu dolor... </p>
			
			<a href="agency-chatter-post.php" class="blk-border-btn">READ MORE</a>
		</section>
		
		<section class="chatter-post right">
			<img src="img/lions-post-img.jpg" alt="post-img" class="post-img">
			<h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eget varius dolor. </h3>
			
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eget varius dolor. Integer id urna accumsan, facilisis risus in, pulvinar ante. Maecenas imperdiet gravida arcu sit amet venenatis. Curabitur suscipit vehicula fringilla. Suspendisse eleifend magna eget iaculis mollis. Nam imperdiet, diam vitae consectetur placerat, tortor urna aliquam turpis, a pretium arcu turpis quis turpis.</p>
	
			<p>Quisque ullamcorper, neque eu pretium vulputate, sapien ipsum dapibus mauris, eu tincidunt tortor quam sit amet odio. Proin nibh mi, auctor ac magna eu, hendrerit vehicula augue. Donec sed urna orci. Praesent at euismod justo. Morbi eu dolor... </p>
			
			<a href="agency-chatter-post.php" class="blk-border-btn">READ MORE</a>
		</section>
		
		<div class="post-pagination-cont">
			<div class="post-pagination">
					<a href="" class="pag-num active">01</a>
					<a href="" class="pag-num">02</a>
					<a href="" class="pag-num">03</a>
					<a href="" class="pag-num">04</a>
					<a href="" class="pag-num">05</a>
			</div>
		</div>
		
	</section>
</article>	
<!--Agency Chatter -->

<!--include our offices-->
<?php include('views/our-offices.php') ?>
<!--include our offices--

<!--inlcude footer-->
<?php include('views/footer.php') ?>
<!--inlcude footer-->
</section>
<script src="js/jquery-1.8.3.js"></script>
<script src="js/jquery.easytabs.min.js" type="text/javascript"></script>  
<script type="text/javascript" src="js/nav.js"></script>
<script type="text/javascript" src="js/matchMedia.js"></script>
<script type="text/javascript">
$(document ).ready(function() {scrollToAnchor('chatter');});
if (matchMedia('only screen and (min-width: 1024px)').matches) {

document.write('<script src=js/parallax.js' + '><\/script>' );

}
</script> 
</body>
</html> 
