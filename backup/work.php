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
<title>TL - WORK</title>
</head>
<body>

<!--include talent-->
<?php include('views/talent-people.php') ?>
<!--include talent-->

<!--include header-->
<?php include('views/header.php') ?>
<!--include header-->

<!--buy design-->
<article class="container work-bg" data-type="background" data-speed="5">	
		<h1 class="buy-design-h1"><span>BUY DESIGN DRIVES ALL OF</span>OUR<br> WORK</h1><a name="work"></a>
		<ul class="work-filter-container">
			<li><a href="">ALL</a></li>
			<li><a href="">BRANDING</a></li>
			<li><a href="">SOCIAL</a></li>
			<li><a href="">TV</a></li>
			<li><a href="">RADIO</a></li>
			<li class="brand"><a href="" id="work-by-brand">BRAND</a>
				<div class="by-brand-list">
					<a href="">pepsi</a>
					<a href="">samsung</a>
					<a href="">sbarro</a>
				</div>
			</li>	
		</ul>
</article>

<article class="container dots-bg2 work-highlights cf">
		<a href="" class='work-port-img'>
			<img src="img/work-1.jpg" alt="" class="">
			<div class="work-hover center">
				<img src="img/logo.png" alt="Tracy Locke">
			</div>
		</a>
		<a href="" class='work-port-img'>
			<img src="img/work-2.jpg" alt="" class="">
			<div class="work-hover center">
				<img src="img/logo.png" alt="Tracy Locke">
			</div>
		</a>
		<a href="" class='work-port-img'>
			<img src="img/work-3.jpg" alt="" class="">
			<div class="work-hover center">
				<img src="img/logo.png" alt="Tracy Locke">
			</div>
		</a>
		<a href="" class='work-port-img'>
			<img src="img/work-4.jpg" alt="" class="">
			<div class="work-hover center">
				<img src="img/logo.png" alt="Tracy Locke">
			</div>
		</a>
		<a href="" class='work-port-img'>
			<img src="img/work-5.jpg" alt="" class="">
			<div class="work-hover center">
				<img src="img/logo.png" alt="Tracy Locke">
			</div>
		</a>
		<a href="" class='work-port-img'>
			<img src="img/work-6.jpg" alt="" class="">
			<div class="work-hover center">
				<img src="img/logo.png" alt="Tracy Locke">
			</div>
		</a>
		<a href="" class='work-port-img'>
			<img src="img/work-7.jpg" alt="" class="">
			<div class="work-hover center">
				<img src="img/logo.png" alt="Tracy Locke">
			</div>
		</a>
		<a href="" class='work-port-img'>
			<img src="img/work-8.jpg" alt="" class="">
			<div class="work-hover center">
				<img src="img/logo.png" alt="Tracy Locke">
			</div>
		</a>
</article>

<!--include our offices-->
<?php include('views/our-offices.php') ?>
<!--include our offices--

<!--inlcude footer-->
<?php include('views/footer.php') ?>
<!--inlcude footer-->

<script src="js/jquery-1.8.3.js"></script>
<script src="js/jquery.easytabs.min.js" type="text/javascript"></script> 
<script type="text/javascript" src="js/nav.js"></script>
<script type="text/javascript" src="js/matchMedia.js"></script>
<script type="text/javascript">
if (matchMedia('only screen and (min-width: 1024px)').matches) {

document.write('<script src=js/parallax.js' + '><\/script>' );

}
</script>  
<!--BRAND DROPDOWN--TOGGLE-->
<script type="text/javascript">
	$(document ).ready(function() {scrollToAnchor('work');});
	$(document).ready(function(){
		$('.by-brand-list').hide();
		$('#work-by-brand').click(function(e){
			e.preventDefault();
			$('.by-brand-list').slideToggle('fast');
			$(this).parent().toggleClass('active');
		});
	});

</script>
</body>
</html> 
