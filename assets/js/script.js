(function($) {
    
    "use strict";
    //***** IMPORTANT *****//
    //- CHANGE FB NAME, FB CONTAINER ID AND FB BUTTON ID
	var fb_title 		 = 'AustraliaWOW!';
	var fb_page 		 = 'australiawow1';
	var fb_button 		 = 'fb-btn';
	var fb_container 	 = 'fb-message-us';
    //*** END IMPORTANT ***//
    var container_width  = $('#'+fb_container).width();
	var container_height = $('#'+fb_container).height();
	
    $('#'+fb_container).html('<div class="fb-page" data-href="https://www.facebook.com/'+fb_page+'/" data-tabs="messages" data-small-header="true" data-height="'+container_height+'" data-width="'+container_width+'" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/'+fb_page+'/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/'+fb_page+'/">'+fb_title+'</a></blockquote></div>');
    
    $('#'+fb_button).fancybox({
		padding : 0,
        beforeLoad: function() { 
        },
        afterShow: function() {
	        var cnt    = 5;
			var height = $('.fancybox-wrap').width();
			var fancyInt;
			clearInterval(fancyInt);
			fancyInt = setInterval(function(){
				$.fancybox.update();
				$.fancybox.reposition();
				var newHeight = $('.fancybox-wrap').width();
				if (height == newHeight) {
					cnt--;
					if (cnt <= 0) {
						clearInterval(fancyInt);
					}
				}
			}, 1000);
			
	        FB.XFBML.parse(document.getElementById('#'+fb_container),function(){
				$.fancybox.update();
		        $.fancybox.reposition();
	        });
        },
        helpers: {
        	title: {
	            type: 'inside',
	            position: 'top'
	        },
            overlay: {
                locked: false
            }
        }
    });
    
    
})(jQuery);