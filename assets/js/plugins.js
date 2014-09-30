// Avoid `console` errors in browsers that lack a console.
if (!(window.console && console.log)) {
    (function() {
        var noop = function() {};
        var methods = ['assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error', 'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log', 'markTimeline', 'profile', 'profileEnd', 'markTimeline', 'table', 'time', 'timeEnd', 'timeStamp', 'trace', 'warn'];
        var length = methods.length;
        var console = window.console = {};
        while (length--) {
            console[methods[length]] = noop;
        }
    }());
}

// Place any jQuery/helper plugins in here.
	$(document).ready(function(){
		
		var deviceAgent = navigator.userAgent.toLowerCase();
    	var agentID = deviceAgent.match(/(iphone|ipod|ipad)/);

		if(!agentID) {
			$("#demo li").append('<div class="hover"></div>');
			
			$("#demo li").hover (
				function() {
					$(this).children('div').stop(true, true).fadeIn('500');
				},
				
				function() {
					$(this).children('div').stop(true, true).fadeOut('500');
				}).click(function() {
					/*if($(this).children('a').attr('class') == 'signin menu-open') {
						$(this).children('a').css({backgroundColor:"#E51648"});
					}*/
				});
		}

	});
	
	$(function () {
	
		if (window.devicePixelRatio == 2) {
	          
	          var images = $("img.hires");
	          
	          // loop through the images and make them hi-res
	          for(var i = 0; i < images.length; i++) {
	            
	            // create new image name
	            var imageType = images[i].src.substr(-4);
	            var imageName = images[i].src.substr(0, images[i].src.length - 4);
	            imageName += "@2x" + imageType;
	          	
	            //rename image
	            images[i].src = imageName;
	          }
	     }
	     
	});


