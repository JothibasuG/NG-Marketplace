requirejs(['jquery','jcarouseljs','jcarouselswipe'], function(jQuery){
jQuery(document).ready(function(){
	
   (function($) {
    $(function() {
        var jcarousel = $('.jcarousel');
        jcarousel
            .on('jcarousel:reload jcarousel:create', function () {
                var carousel = $(this),
                    width = carousel.innerWidth();

                if (width >= 768) {
                    width = width / 4.2;
					
                } else if (width >= 350) {
                    width = width / 1.1;
                }

                carousel.jcarousel('items').css('width', Math.ceil(width) + 'px');
            })
            .jcarousel({
                wrap: 'circular'
            });
//			 .jcarouselSwipe({
//                perSwipe: 1
//            });

        $('.jcarousel-control-prev')
            .jcarouselControl({
                target: '-=2'
            });

        $('.jcarousel-control-next')
            .jcarouselControl({
                target: '+=2'
            });
			
			 $('.jcarousel-pagination')
            .on('jcarouselpagination:active', 'a', function() {
                $(this).addClass('active');
            })
            .on('jcarouselpagination:inactive', 'a', function() {
                $(this).removeClass('active');
            })
            .on('click', function(e) {
                e.preventDefault();
            })
            .jcarouselPagination({
                perPage: 2,
                item: function(page) {
                    return '<a href="#' + page + '">' + page + '</a>';
                }
            });
        
    });
})(jQuery);
  });
  
  

jQuery(document).ready(function(){
   (function($) {
    $(function() {
        var jcarousel = $('.jcarousel2');
        jcarousel
            .on('jcarousel:reload jcarousel:create', function () {
                var carousel = $(this),
                    width = carousel.innerWidth();

                if (width >= 768) {
                    width = width / 3;
                } else if (width >= 280) {
                    width = width / 1.1;
                }

                carousel.jcarousel('items').css('width', Math.ceil(width) + 'px');
            })
            .jcarousel({
                wrap: 'circular'
            });
//			 .jcarouselSwipe({
//                perSwipe: 1
//            });

        $('.jcarousel2-control-prev')
            .jcarouselControl({
                target: '-=1'
            });

        $('.jcarousel2-control-next')
            .jcarouselControl({
                target: '+=1'
            });
			
			
			 $('.jcarousel2-pagination')
            .on('jcarouselpagination:active', 'a', function() {
                $(this).addClass('active');
            })
            .on('jcarouselpagination:inactive', 'a', function() {
                $(this).removeClass('active');
            })
            .on('click', function(e) {
                e.preventDefault();
            })
            .jcarouselPagination({
                perPage: 2,
                item: function(page) {
                    return '<a href="#' + page + '">' + page + '</a>';
                }
            });
        
    });
})(jQuery);
  });
  
  
jQuery(document).ready(function(){
   (function($) {
    $(function() {
        var jcarousel = $('.jcarousel3');
        jcarousel
            .on('jcarousel:reload jcarousel:create', function () {
                var carousel = $(this),
                    width = carousel.innerWidth();

                if (width >= 600) {
                    width = width / 4;
                } else if (width >= 350) {
                    width = width / 1;
                }

                carousel.jcarousel('items').css('width', Math.ceil(width) + 'px');
            })
            .jcarousel({
                wrap: 'circular'
            })
			 .jcarouselSwipe({
                perSwipe: 1
            });

        $('.jcarousel3-control-prev')
            .jcarouselControl({
                target: '-=1'
            });

        $('.jcarousel3-control-next')
            .jcarouselControl({
                target: '+=1'
            });
        
    });
})(jQuery);
  });  
  
  

jQuery(document).ready(function(){
   (function($) {
    $(function() {
        var jcarousel = $('.jcarousel4');
        jcarousel
            .on('jcarousel:reload jcarousel:create', function () {
                var carousel = $(this),
                    width = carousel.innerWidth();

                if (width >= 768) {
                    width = width / 3;
                } else if (width >= 280) {
                    width = width / 1.1;
                }

                carousel.jcarousel('items').css('width', Math.ceil(width) + 'px');
            })
            .jcarousel({
                wrap: 'circular'
            })
			 .jcarouselSwipe({
                perSwipe: 1
            });

        $('.jcarousel4-control-prev')
            .jcarouselControl({
                target: '-=1'
            });

        $('.jcarousel4-control-next')
            .jcarouselControl({
                target: '+=1'
            });
			
			
			 $('.jcarousel4-pagination')
            .on('jcarouselpagination:active', 'a', function() {
                $(this).addClass('active');
            })
            .on('jcarouselpagination:inactive', 'a', function() {
                $(this).removeClass('active');
            })
            .on('click', function(e) {
                e.preventDefault();
            })
            .jcarouselPagination({
                perPage: 2,
                item: function(page) {
                    return '<a href="#' + page + '">' + page + '</a>';
                }
            });
			
	
        
    });
	
	
	
})(jQuery);
  });  
  
  
  
  
jQuery(document).ready(function(){console.log("innn");
   (function($) {
    $(function() {
        var jcarousel = $('.jcarousel5');
        jcarousel
            .on('jcarousel:reload jcarousel:create', function () {
                var carousel = $(this),
                    width = carousel.innerWidth();

                if (width >= 768) {
                    width = width / 6;
                } else if (width >= 280) {
                    width = width / 2;
                }

                carousel.jcarousel('items').css('width', Math.ceil(width) + 'px');
            })
            .jcarousel({
                wrap: 'circular'
            })
			 .jcarouselSwipe({
                perSwipe: 1
            });

        $('.jcarousel5-control-prev')
            .jcarouselControl({
                target: '-=1'
            });

        $('.jcarousel5-control-next')
            .jcarouselControl({
                target: '+=1'
            });
			
			
			 $('.jcarousel5-pagination')
            .on('jcarouselpagination:active', 'a', function() {
                $(this).addClass('active');
            })
            .on('jcarouselpagination:inactive', 'a', function() {
                $(this).removeClass('active');
            })
            .on('click', function(e) {
                e.preventDefault();
            })
            .jcarouselPagination({
                perPage: 1,
                item: function(page) {
                    return '<a href="#' + page + '">' + page + '</a>';
                }
            });
			
	
        
    });
	
	
	
})(jQuery);
  }); 
  
  
   
jQuery(document).ready(function(){
   (function($) {
    $(function() {
        var jcarousel = $('.jcarousel-selling-products');
        jcarousel
            .on('jcarousel:reload jcarousel:create', function () {
                var carousel = $(this),
                    width = carousel.innerWidth();

                if (width >= 900) {
                    width = width / 3;
				
					
                } else if (width >= 280) {
                    width = width / 1;
                }

                carousel.jcarousel('items').css('width', Math.ceil(width) + 'px');
            })
            .jcarousel({
                wrap: 'circular'
            });
//			 .jcarouselSwipe({
//                perSwipe: 1
//            });

        $('.jcarousel-selling-products-control-prev')
            .jcarouselControl({
                target: '-=1'
            });

        $('.jcarousel-selling-products-control-next')
            .jcarouselControl({
                target: '+=1'
            });
			
			
			 $('.jcarousel-selling-products-pagination')
            .on('jcarouselpagination:active', 'a', function() {
                $(this).addClass('active');
            })
            .on('jcarouselpagination:inactive', 'a', function() {
                $(this).removeClass('active');
            })
            .on('click', function(e) {
                e.preventDefault();
            })
            .jcarouselPagination({
                perPage: 1,
                item: function(page) {
                    return '<a href="#' + page + '">' + page + '</a>';
                }
            });
			
	
        
    });
	
	
	
})(jQuery);
  }); 
  }); 
  
