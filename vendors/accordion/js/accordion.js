(function( $ ){
    $.fn.faccordion = function(options) {

        var defaults = {
          afterOpen : null,
          afterClose : null,
          openSpeed : 500,
          closeSpeed : 500,
          activeClass : "open"
        };

        var settings = $.extend( {}, defaults, options );

        return this.each (function() {
            $(this).find(".accordion-title-text").on("click", function(){

            	if($(this).parents(".accordion-item").hasClass(settings.activeClass)) {
					$(this).parents(".accordion-title").next(".accordion-content").slideUp({
						duration: settings.closeSpeed, 
						callback: settings.afterClose,
						easing: "easeOutBack"
					});
					$(this).parents(".accordion-item").removeClass(settings.activeClass);
					return;
	        	}

				$(this).parents(".accordion-title").next(".accordion-content").slideDown({
					duration: settings.openSpeed, 
					callback: settings.afterOpen,
					easing: "easeOutBack"
				});
				$(this).parents(".accordion-item").addClass(settings.activeClass);	        		
			
			});
        });
    }; 
})( jQuery );





