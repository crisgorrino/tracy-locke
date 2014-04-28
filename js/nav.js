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
    });
                
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

$('#tab-container-locations').easytabs();



 // ToDo: - Handle animation of elements when a city link is clicked
 /* var locationDivs;
  var locationListItems;
  var previousAddressBlockTween;
  var previousCityLinkTween;

  $(document).ready( function() 
  {
    locationDivs = ["#dallas", "#wilton", "#soho", "#sf", "#bentonville", "#field", "#dubai", "#london", "#mumba", "#paris"];
    locationListItems = $("#tab-container-locations .tab").toArray();

    // Scrollmagic Setup
    scrollController = new ScrollMagic();

    // Add city list-items
    $.each( locationListItems, function( index, element ) 
    {
      var cityLink = $( element );
      var addressBlock = $(locationDivs[index]);
      
      var cityLinkTween = TweenMax.to( cityLink, .5, { left: "140px", paused: true });
      var addressBlockTween = TweenMax.to( addressBlock, .3, { left: "10px", paused: true });

      var scene = new ScrollScene({triggerElement: cityLink, duration: 30, offset: -150})
          .addTo(scrollController)
          .on("enter", function(event) {
          	clearPreviousTweens();
            cityLinkTween.play();
            addressBlockTween.play();
            setPreviousTweens();
          })
          .on("leave", function(event) {
            cityLinkTween.reverse();
            addressBlockTween.reverse();
          });

       // City link list clicks
       cityLink.click(function() {
       	clearPreviousTweens();
       	addressBlockTween.play();
       	cityLinkTween.play();
       	setPreviousTweens();
       })

       function clearPreviousTweens()
       {
       	if( previousAddressBlockTween && previousCityLinkTween )
       	{
       		previousAddressBlockTween.reverse();
       		previousCityLinkTween.reverse();
       	}
       }

       function setPreviousTweens()
       {
       	previousAddressBlockTween = addressBlockTween;
       	previousCityLinkTween = cityLinkTween;
       }
         

    });

  });*/


/**mobile nav toggle**/
$('.mobile-nav-toogle-btn').click(function(e){
	e.preventDefault();
	$('.mobile-nav-container').slideToggle('slow');
})


//fade in for our offices
window.scrollReveal = new scrollReveal();

	