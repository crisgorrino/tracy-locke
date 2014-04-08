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
<title>TL - Careers</title>
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
<article class="container careers-slide-bg">	
		<h1 class="careers-h1"><input type="text" class="search-param2" value="SEARCH">CAREERS</h1><a name="careers"></a>	
</article>
<article class="container dots-bg3 cf">
	<div class="career-filters">
		<div class="career-filter one">
			<a href="" id="filter-by-all">ALL</a>
			<div class="by-all-list">
				<a href="">San Diego</a>
				<a href="">Chestertonville</a>
				<a href="">Little Dixie</a>
			</div>
		</div>
		<div class="career-filter two">
			<a href="" id="filter-by-city">CITY</a>
			<div class="by-city-list">
				<a href="">San Diego</a>
				<a href="">Chestertonville</a>
				<a href="">Little Dixie</a>
			</div>
		</div>
		<div class="career-filter three">
			<a href="" id="filter-by-discipline">DISCIPLINE</a>
			<div class="by-discipline-list">
				<a href="">San Diego</a>
				<a href="">Chestertonville</a>
				<a href="">Little Dixie</a>
			</div>
		</div>
	</div>
	<div class="career-results">
		<p class="career-result cf"><a href=""><span class="left">Copywriter</span> <span class="right">DALLAS, TX</span></a></p>
		<p class="career-result cf"><a href=""><span class="left">Entry Level Project Manager/Account Manager</span> <span class="right">DALLAS, TX</span></a></p>
		<p class="career-result cf"><a href=""><span class="left">COPYWRITER</span> <span class="right">DALLAS, TX</span></a></p>
		<p class="career-result cf"><a href=""><span class="left">COPYWRITER</span> <span class="right">DALLAS, TX</span></a></p>
		<p class="career-result cf"><a href=""><span class="left">COPYWRITER</span> <span class="right">DALLAS, TX</span></a></p>
		
	</div>	
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
<script src="js/jquery.easytabs.min.js" type="text/javascript"></script> 
<script type="text/javascript" src="js/nav.js"></script>
<script type="text/javascript" src="js/matchMedia.js"></script>
<script type="text/javascript">
if (matchMedia('only screen and (min-width: 1024px)').matches) {

document.write('<script src=js/parallax.js' + '><\/script>' );

}
</script> 

<!--CITY DROPDOWN--TOGGLE-->
<script type="text/javascript">
	$(document ).ready(function() {scrollToAnchor('careers');});
	$(document).ready(function(){
		$('.by-city-list').hide();
		$('#filter-by-city').click(function(e){
			e.preventDefault();
			$('.one').removeClass('active');
			$('.three').removeClass('active');
			$('.by-discipline-list').hide();
			$('.by-all-list').hide();
			$('.by-city-list').slideToggle('fast');
			$(this).parent().toggleClass('active');
		});
	});
</script>
<!--Discipline DROPDOWN--TOGGLE-->
<script type="text/javascript">
	$(document).ready(function(){
		$('.by-discipline-list').hide();
		$('#filter-by-discipline').click(function(e){
			e.preventDefault();
			$('.one').removeClass('active');
			$('.two').removeClass('active');
			$('.by-all-list').hide();
			$('.by-city-list').hide();
			$('.by-discipline-list').slideToggle('fast');
			$(this).parent().toggleClass('active');
		});
	});
</script>
<!--Discipline DROPDOWN--TOGGLE-->
<script type="text/javascript">
	$(document).ready(function(){
		$('.by-all-list').hide();
		$('#filter-by-all').click(function(e){
			e.preventDefault();
			$('.two').removeClass('active');
			$('.three').removeClass('active');
			$('.by-city-list').hide();
			$('.by-discipline-list').hide();
			$('.by-all-list').slideToggle('fast');
			$(this).parent().toggleClass('active');
		});
	});
</script>
</body>
</html> 
