/*! Adapted from Christopher Yee's original Pushy menu script
* Pushy - v1.1.0 - 2017-1-30
* Pushy is a responsive off-canvas navigation menu using CSS transforms & transitions.
* https://github.com/christophery/pushy/
* by Christopher Yee */

(function ($) {
	var pushy = $('.pushy'), //menu css class
		body = $('body'),
		pushyReady = 'pushy--ready', //css class for menu position
		pushyOpen = 'pushy--open', //css class when menu is open
		pushyOpenPlaced = 'pushy--open-placed', //css class when menu is in place
		menuBtn = $('.pushy--activate-menu, .pushy--toggle'), //css classes to toggle the menu
		menuWidth = pushy.width() + 'px'; //jQuery fallback menu width

	function togglePushy(){
		//add class to body based on menu position
		if( pushy.hasClass(pushyReady) ){
			body.toggleClass(pushyOpen);
		}else{
			body.toggleClass(pushyOpenPlaced);
		}		
	}

	//checks if 3d transforms are supported removing the modernizr dependency
	var cssTransforms3d = (function csstransforms3d(){
		var el = document.createElement('p'),
		supported = false,
		transforms = {
			'webkitTransform':'-webkit-transform',
			'OTransform':'-o-transform',
			'msTransform':'-ms-transform',
			'MozTransform':'-moz-transform',
			'transform':'transform'
		};

		if(document.body !== null) {
			// Add it to the body to get the computed style
			document.body.insertBefore(el, null);

			for(var t in transforms){
				if( el.style[t] !== undefined ){
					el.style[t] = 'translate3d(1px,1px,1px)';
					supported = window.getComputedStyle(el).getPropertyValue(transforms[t]);
				}
			}

			document.body.removeChild(el);

			return (supported !== undefined && supported.length > 0 && supported !== "none");
		}else{
			return false;
		}
	})();

	if(cssTransforms3d){
		//toggle menu
		menuBtn.on('click', function(){
			togglePushy();
		});
	}else{
		//add css class to body
		body.addClass('no-csstransforms3d');
		//hide menu by default
		if (pushy.hasClass(pushyReady) ){
			pushy.css({left: "-" + menuWidth});
		}else{
			pushy.css({right: "-" + menuWidth});
		}

		//toggle menu
		menuBtn.on('click', function(){
			if (opened) {
				closePushyFallback();
				opened = false;
			} else {
				openPushyFallback();
				opened = true;
			}
		});

	}
}(jQuery));