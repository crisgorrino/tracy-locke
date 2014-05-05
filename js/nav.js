/*--NAV SCROLL to functions----*/
    
/*---contact scroll to function--*/
function scrollToAnchor(aid){
    var aTag = $("a[name='"+ aid +"']");
    $('html,body').animate({scrollTop: aTag.offset().top},400);
}

$(".contact-link").click(function(e) {
	e.preventDefault();
   scrollToAnchor('contact');
});

/*--main nav scroll transition--*/
var aux=true;
var aux2=true; 
var valTop= parseInt($('#header').offset().top);
$(document).on("scroll",function(){

		if($(document).scrollTop() >=valTop){
			aux2=true;
			if( aux==true ){
				aux=false;				
				//$( "header.large" ).fadeTo( 300 , 0, function() {
					$('header.small').fadeTo( 1,100);
					$("header.small .logo img").animate({width:'55%', padding:'0% 15%'},300);
					$("header.large .logo img").animate({width:'60%', padding:'8% 5%'}, 0);
					$('header.small .header-search input[type="search"]').animate({opacity:'1'}, 300);
					$('header.large .header-search input[type="search"]').animate({opacity:'0'}, 300);
					$('header.large .inner').animate({opacity:'0'},100);
				//});		
			}			

		}
		else if($(document).scrollTop() < valTop){
		    aux=true;
		    if( aux2==true){
		    aux2=false;
		    	$( "header.small" ).fadeTo( 0, 0, function() {
				});	
				$("header.small .logo img").animate({width:'90%', padding:'0'}, 200);
				$("header.large .logo img").animate({width:'90%', padding:'10% 0%'}, 200);
				$('header.small .header-search input[type="search"]').animate({opacity:'0'}, 200);
				$('header.large .header-search input[type="search"]').animate({opacity:'1'}, 200);
				$('header.large .inner').animate({opacity:'1'},100);
			}
		}
	
});	

/*---side bar slider menu for talent--*/

        function people_slide(){
	      if( $("#sidebar-wrapper" ).hasClass( "active" )){
              $('#sidebar-wrapper2.active').css('right','0px').animate();
              $('#sidebar-wrapper.active').css('right','250px').animate();
              $("#sidebar-wrapper2").removeClass("active").animate();
              $('#sidebar-wrapper.active').css('right','0px').animate();
              $("#sidebar-wrapper").removeClass("active").animate();
              $(document.body).not('.sidebar-wrapper').css('overflow', 'auto');
              $('.container-push').removeClass('active');    
              $('.container-push').removeClass('detail');      
             }
          
       else{
           $("#sidebar-wrapper").addClass("active").animate();
           $('#sidebar-wrapper.active').css('right','250px').animate();
           /*setTimeout(function(){*/
               $(document.body).not('.sidebar-wrapper').css('overflow', 'hidden');/*},1000);*/
            $('.container-push').addClass('active');   
           }

     }
     
  $("#menu-close").click(function(e) {
     	e.preventDefault();
     	people_slide();
 	    $('.one').removeClass('current');
        $('.two').removeClass('current');
        $('.three').removeClass('current');
        $('.people-city').hide();
		$('.people-disc').hide();
		$('.people-brand').hide();
		//$('.container-push').removeClass('active');
        });
     

     $('.people-menu').click(function(e){
     	e.preventDefault();
	     people_slide();
	     $('.one').removeClass('current');
	     $('.two').removeClass('current');
	     $('.three').removeClass('current');
	     $('.people-city').hide();
	     $('.people-disc').hide();
	     $('.people-brand').hide();
	     //$('.container-push').removeClass('active');
     });
    

   $(".staff-toggle").click(function(e) {
        e.preventDefault();
        $('#sidebar-wrapper.active').css('right','715px');
        $("#sidebar-wrapper2").addClass("active");
        $('#sidebar-wrapper2.active').css('right','500px');
        $('.one').removeClass('current');
        $('.two').removeClass('current');
        $('.three').removeClass('current');
        $('.people-city').hide();
		$('.people-disc').hide();
		$('.people-brand').hide();
		$('.container-push').addClass('detail');
		$('.staff-toggle').removeClass('active').not(this);
		$(this).addClass('active');
    });
          
//Talent img hover
/*$('.talent a').mouseenter(function(){
	var img_src =$(this).children().data('src');
	$(this).children().animate({opacity:.5},150,
		function() {
      $(this).attr('src',img_src).animate({opacity:1},150);
    });
});

$('.talent a').mouseout(function(){
	var img_src =$(this).children().data('first-src');
	$(this).children().animate({opacity:.5},150,
		function() {
      $(this).attr('src',img_src).animate({opacity:1},150);
    });
	})
 */
          
                
/*--custom scroll bar--*/
	  $(document).ready(function () {
	      if (!$.browser.webkit) {
	          //$('.scroll-container').jScrollPane();
	      }
	  });
	
/*--talent drop downs--*/
//city	
	$(document).ready(function(){
		$('#people-city').click(function(e){
			e.preventDefault();
			$('.two').removeClass('current');
			$('.three').removeClass('current');
			$('.people-disc').hide();
			$('.people-brand').hide();
			$('.people-city').slideToggle('fast');
			$(this).parent().addClass('current');
		});
	});

//disc
$(document).ready(function(){
		$('.people-disc').hide();
		$('#people-disc').click(function(e){
			e.preventDefault();
			$('.one').removeClass('current');
			$('.three').removeClass('current');
			$('.people-city').hide();
			$('.people-brand').hide();
			$('.people-disc').slideToggle('fast');
			$(this).parent().addClass('current');
		});
	});

//brand
$(document).ready(function(){
		$('.people-brand').hide();
		$('#people-brand').click(function(e){
			e.preventDefault();
			$('.one').removeClass('current');
			$('.two').removeClass('current');
			$('.people-city').hide();
			$('.people-disc').hide();
			$('.people-brand').slideToggle('fast');
			$(this).parent().addClass('current');
		});
	});

$('#tool-tabs').easytabs();
$('#tab-container-locations').easytabs();



/**mobile nav toggle**/
$('.mobile-nav-toogle-btn').click(function(e){
	e.preventDefault();
	$('.mobile-nav-container').slideToggle('slow');
})


//fade in for our offices
window.scrollReveal = new scrollReveal();


//OFFICES BG CHANGE FUNCTIONS
$('.dallas').click(function(e){
	e.preventDefault();
	$('.offices').css('background-image','url(img/offices/dallas.jpg)');
});

/*$('.willton').click(function(e){
	e.preventDefault();
	$('.offices').css('background-image','url(img/offices/willton.jpg)');
});*/

$('.soho').click(function(e){
	e.preventDefault();
	$('.offices').css('background-image','url(img/offices/nyc.jpg)');
});

$('.sf').click(function(e){
	e.preventDefault();
	$('.offices').css('background-image','url(img/offices/sanfran.jpg)');
});

/*$('.bentonville').click(function(e){
	e.preventDefault();
	$('.offices').css('background-image','url(img/offices/bentonville.jpg)');
});*/

$('.field').click(function(e){
	e.preventDefault();
	$('.offices').css('background-image','url(img/offices/field.jpg)');
});

$('.dubai').click(function(e){
	e.preventDefault();
	$('.offices').css('background-image','url(img/offices/dubai.jpg)');
});

$('.london').click(function(e){
	e.preventDefault();
	$('.offices').css('background-image','url(img/offices/london.jpg)');
});

$('.mumbai').click(function(e){
	e.preventDefault();
	$('.offices').css('background-image','url(img/offices/mumbai.jpg)');
});

$('.paris').click(function(e){
	e.preventDefault();
	$('.offices').css('background-image','url(img/offices/paris.jpg)');
});


	