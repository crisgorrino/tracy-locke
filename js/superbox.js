
;(function($) {
		
	$.fn.SuperBox = function(options) {
		
		var superbox  = $('<div class="superbox-show cf"></div>');
		var superboxContent  = $('<div class="superbox-current-content"></div>');
		
		superbox.append(superboxContent);
		
		return this.each(function() {
			
			$('.superbox-list').click(function() {
		
				var currentContent = $(this).find('.superbox-content');
				var contentData = currentContent.html();
				superboxContent.html(contentData);
				
				//toggle active class
				$(this).toggleClass('active');
				
				//remove active class but not on element clicked
				$('.superbox-list').not(this).removeClass('active');
				
				//add active class but not on element clicked
				$('.superbox-list').not(this).addClass('gray-scale');
				
				//remove gray scale class to elem clicked
				$(this).removeClass('gray-scale');				
				
				if($('.superbox-current-content').css('opacity') == 0) {
					$('.superbox-current-content').animate({opacity: 1});
					}
				
				if ($(this).next().hasClass('superbox-show')) {
					superbox.slideToggle();
					//remove gray scale class on all elements
					$('.superbox-list').not(this).removeClass('gray-scale');
					
				} else {
					superbox.insertAfter(this).slideDown().css('display', 'block');					
				}				
				
				$('html, body').animate({
					scrollTop:superbox.offset().top - currentContent.width()
					}, 'large');			
			});
			
		});
	};
})(jQuery);