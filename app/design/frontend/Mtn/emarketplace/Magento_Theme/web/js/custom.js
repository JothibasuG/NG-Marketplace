requirejs(['jquery'], function(jQuery){
    (function($) {
    "use strict";
    $(window).on('load', function(event) {
        $('#preloader').delay(500).fadeOut(500);
    });
    $(window).on('scroll', function(event) {
        var scroll = $(window).scrollTop();
        if (scroll < 20) {
            $(".main-header").removeClass("sticky");
        } else {
            $(".main-header").addClass("sticky");
        }
    });
	
	    $(window).on('scroll', function(event) {
        var scroll = $(window).scrollTop();
        if (scroll < 500) {
            $(".corporate-tab-wrapper").removeClass("abc");
        } else {
            $(".corporate-tab-wrapper").addClass("abc");
        }
    });
	
	
    var scrollLink = $('.page-scroll');
    $(window).scroll(function() {
        var scrollbarLocation = $(this).scrollTop();
        scrollLink.each(function() {
            var sectionOffset = $(this.hash).offset().top - 73;
            if (sectionOffset <= scrollbarLocation) {
                $(this).parent().addClass('active');
                $(this).parent().siblings().removeClass('active');
            }
        });
    });
   
   






function countryDropdown(seletor){
	var Selected = $(seletor);
	var Drop = $(seletor+'-drop');
	var DropItem = Drop.find('li');

	Selected.click(function(){
		Selected.toggleClass('open');
		Drop.toggle();
	});

	Drop.find('li').click(function(){
		Selected.removeClass('open');
		Drop.hide();
		
		var item = $(this);
		Selected.html(item.html());
	});

	DropItem.each(function(){
		var code = $(this).attr('data-code');

		if(code != undefined){
			var countryCode = code.toLowerCase();
			$(this).find('i').addClass('flagstrap-'+countryCode);
		}
	});
}

countryDropdown('#country');

 


 


	 if (jQuery(window).width() < 900) {	
	 
					   
						$(".footer-link-block h3").click(function(){															  
									  $(this).next("ul").slideToggle();
									  $(".footer-link-block").addClass('active');
									  $(this).parents("div").siblings().find("h3").next("ul").slideUp();
									  $(this).parents("div").siblings().removeClass('active');
									 
																			  
									  })
									  
							
			   
						   }
						   
						 


	
}(jQuery));
}); 






