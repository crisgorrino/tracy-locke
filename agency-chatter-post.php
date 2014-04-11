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

<!--Search Results-->
<article class="container agency-chatter-bg" data-type="background" data-speed="5">	
</article>
<article class="container dots-bg4 cf"><a name="chatter-post"></a>
	<section class="inner cf">
		<!--post image-->
		<div class="post-left cf">
			<img src="img/post-image-1.jpg" alt="silver tiger" class="inline-top" style="width:100%;">
			<h2 class="post-date">
				<small>FEB</small>
				<span>14</span>
			</h2>
			<!--share-->
			<div class="share-post">
				<span>SHARE</span><a href="" class="icon-facebook"></a><a href="" class="icon-twitter"></a>
			</div>
			<!--share-->
			<!--tags-->
			<div class="tags-container">
				<h3>TAGS</h3>
				<p><a href=""><img src="img/tag-arrow.png" alt="" class="inline"><span>LOREM IPSUM</span></a></p>
				<p><img src="img/tag-arrow.png" alt="" class="inline"><span>DOLOR</span></p>
				<p><img src="img/tag-arrow.png" alt="" class="inline"><span>SITAMET</span></p>
				<p><img src="img/tag-arrow.png" alt="" class="inline"><span>CONSECTETUR</span></p>
			</div>
			<!--tags-->
			<div class="other-articles">
				<h4>LINDSEY WEISGERBER<span>'S OTHER ARTICLES</span></h4>
				<a href="">Lorem ipsum dolor sit amet.</a>
				<a href="">consectetur adipiscing elit. Morbi eget Integer id urna accumsan</a>
				<a href="">Integer id urna accumsan, facilisis risus in</a>
				<a href="">imperdiet gravida arcu sit amet venenatis. Lorem ipsum dolor sit amet.</a>
			</div>
		</div>
		<!--post image-->
		
		<!--post content-->
		<div class="post-right">
			<h1 class="posts-h1">Lorem ipsum dolor sit amet, consect etur adi piscing elit. Morbi eget varius dolor. </h1>
			
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eget varius dolor. Integer id urna accumsan, facilisis risus in, pulvinar ante. Maecenas imperdiet gravida arcu sit amet venenatis. Curabitur suscipit vehicula fringilla. Suspendisse eleifend magna eget iaculis mollis. Nam imperdiet, diam vitae consectetur placerat, tortor urna aliquam turpis, a pretium arcu turpis quis turpis.</p> 

			<p>Quisque ullamcorper, neque eu pretium vulputate, sapien ipsum dapibus mauris, eu tincidunt tortor quam sit amet odio. Proin nibh mi, auctor ac magna eu, hendrerit vehicula augue. Donec sed urna orci. Praesent at euismod justo. Morbi eu dolor... purus malesuada vestibulum nec id velit. Pellentesque elementum imperdiet urna vitae sollicitudin. Phasellus tincidunt magna at arcu eleifend venenatis. Praesent id congue libero.</p> 

			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eget varius dolor. Integer id urna accumsan, facilisis risus in, pulvinar ante. Maecenas imperdiet gravida arcu sit amet venenatis.</p>  

			<p>Curabitur suscipit vehicula fringilla. Suspendisse eleifend magna eget iaculis mollis. Nam imperdiet, diam vitae consectetur placerat, tortor urna aliquam turpis, a pretium arcu turpis quis turpis.</p>  

			<p>Quisque ullamcorper, neque eu pretium vulputate, sapien ipsum dapibus mauris, eu tincidunt tortor quam sit amet odio. Proin nibh mi, auctor ac magna eu, hendrerit vehicula augue. Donec sed urna orci. Praesent at euismod justo. Morbi eu dolor... purus malesuada vestibulum nec id velit. Pellentesque elementum imperdiet urna vitae sollicitudin.</p> 

			<p>Phasellus tincidunt magna at arcu eleifend venenatis. Praesent id congue libero.</p> 
		</div>
		<!--post content-->
		<div class="post-pagination-cont">
			<div class="post-pagination">
				<a href="" class="prev-post">PREVIOUS ARTICLE TITLE</a>
				<a href="" class="next-post">NEXT ARTICLE TITLE GOES HERE</a>
			<!--<img src="img/prev-post.png" alt="" class=""> 
			<img src="img/next-post.png" alt="" class="">-->
			</div>
		</div>
	</section>	
</article>
<!--Search Results-->

<!--include our offices-->
<?php include('views/our-offices.php') ?>
<!--include our offices--

<!--inlcude footer-->
<?php include('views/footer.php') ?>
<!--inlcude footer-->
</section>
<script src="js/jquery-1.8.3.js"></script>
<script src="js/scrollReveal.js"></script>
<script src="js/jquery.easytabs.min.js" type="text/javascript"></script>  
<script type="text/javascript" src="js/nav.js"></script>
<script type="text/javascript" src="js/matchMedia.js"></script>
<script type="text/javascript">
$(document ).ready(function() {scrollToAnchor('chatter-post');});
if (matchMedia('only screen and (min-width: 1024px)').matches) {

document.write('<script src=js/parallax.js' + '><\/script>' );

}
</script> 
</body>
</html> 
