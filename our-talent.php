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
<section class="container-push">
<!--include header-->
<?php include('views/header.php') ?>
<!--include header-->

<!--buy design-->
<article class="container work-bg" data-type="background" data-speed="5">	
		<h1 class="buy-design-h1"><span>&nbsp;</span>OUR<br> TALENT</h1><a name="work"></a>
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

<article class="container dots-bg2 work-highlights cf superbox">
		<div  class='work-port-img superbox-list' >
			<img src="img/manuel-h-bw.jpg" alt="">
			<div class="talent-hover center ">
				<h3 class="white">MANUEL HERRERA</h3>
			</div>
			<div style="display:none;" class="superbox-content">
				<div class="work-example left talented-people">
			    	<h2 class="talent-slide-name">MANUEL HERRERA</h2> 
			    	<p class="talent-writeup">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus dapibus, lectus sit amet sollicitudin volutpat, massa ante sagittis nulla, vitae tincidunt ligula magna sit amet neque. In condimentum est in velit semper, non rutrum nunc ultrices. Praesent eu ligula pulvinar, tincidunt felis a, sodales leo.</p> 
			    	
			    	<h3 class="slide-featured-work">FEATURED WORK</h3>   
			    	<img src="img/featured-work-herrera-1.jpg" alt="pizza">
			    	<img src="img/featured-work-herrera-2.jpg" alt="pizza">  
				</div>
				<div class="work-example right talented-people">
					<h3 class="slide-featured-work">CHATTER</h3>
				    	<!--talent twtr feed-->
				    		<div class="talent-twtr-feed">
					    		<img src="img/twtr-bird.png" alt="twtr-bird" class="twtr-img">
					    		<div class="talent-twtr-feed-inner cf">
						    		<span class="twtr-name">@MANNYME80</span>
						    		<span class="twtr-date">17 SEP</span>
						    		<p>Clean. https://www.g-star.com/en_us/raw/index.jsp …</p>
						    		<div class="twtr-menu">
							    		<a href=""><img src="img/twtr-menu-1.png" alt=""></a>
							    		<a href=""><img src="img/twtr-menu-2.png" alt=""></a>
							    		<a href=""><img src="img/twtr-menu-3.png" alt=""></a>
							    		<a href="#"><img src="img/twtr-menu-4.png" alt=""></a>
						    		</div>
						    	</div>
					    	</div>
					    <!--talent twtr feed-->
					    	<!--talent twtr feed-->
				    		<div class="talent-twtr-feed">
					    		<img src="img/twtr-bird.png" alt="twtr-bird" class="twtr-img">
					    		<div class="talent-twtr-feed-inner cf">
						    		<span class="twtr-name">@MANNYME80</span>
						    		<span class="twtr-date">17 SEP</span>
						    		<p>Everything Everywhere All The Time DVD on @behance: http://www.behance.net/gallery/Everything-Everywhere-All-The-Time-DVD/10595017 …</p>
						    		<div class="twtr-menu">
							    		<a href=""><img src="img/twtr-menu-1.png" alt=""></a>
							    		<a href=""><img src="img/twtr-menu-2.png" alt=""></a>
							    		<a href=""><img src="img/twtr-menu-3.png" alt=""></a>
							    		<a href="#"><img src="img/twtr-menu-4.png" alt=""></a>
						    		</div>
						    	</div>
					    	</div>
					    <!--talent twtr feed-->
				</div>
			</div>
		</div><!--
	--></div>
		
</article>

<!--include our offices-->
<?php include('views/our-offices.php') ?>
<!--include our offices--

<!--inlcude footer-->
<?php include('views/footer.php') ?>
<!--inlcude footer-->
</section>
<script src="js/jquery-1.8.3.js"></script>
<script src="js/superbox.js"></script>
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
<script  type="text/javascript">
		$(function() {
		
			// Call SuperBox
			$('.superbox').SuperBox();
		
		});
		</script>
</body>
</html> 
