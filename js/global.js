;(function ($) {

$(document).ready(function() {
    /* -----------------------------------------
   JavaScript on media query breakpoints
----------------------------------------- */
document.body.addEventListener('breakpoint', function(e){
    switch(e.detail.lastBreakpoint){
        case 'xs':
            //Add scripts for small screens here:

        break;
        case 'sm':
            // Add scripts for medium screens here:

        break;
        case 'md':
            // Add scripts for large screens here:

        break;
        case 'lg':
            // Add scripts for large screens here:

        break;
    }
});

try{
    var responsiveJs = new CustomEvent('breakpoint', {
        detail : {
            utilityElem: window.getComputedStyle(document.body, ':before'),
            lastBreakpoint:""
        },
        bubbles : false,
        cancelable : false
    });
} catch(er){
    var responsiveJs = document.createEvent('CustomEvent');
    responsiveJs.initCustomEvent('breakpoint', false, false, {
        utilityElem: window.getComputedStyle(document.body, ':before'),
        lastBreakpoint:""
    });
}
responsiveJs.selfDispatching = function(){
    var eventData = this.detail,
    currentBreakpoint = eventData.utilityElem.getPropertyValue('content').replace(/['"]+/g, '');
    if(eventData.lastBreakpoint !== currentBreakpoint){
        eventData.lastBreakpoint = currentBreakpoint;
        document.body.dispatchEvent(this);
    }
};

window.addEventListener('load', function(){
    responsiveJs.selfDispatching();
});
window.addEventListener('resize', function(){
    responsiveJs.selfDispatching();
});
window.addEventListener('orientationchange', function(){
    responsiveJs.selfDispatching();
});





    //Remove placeholder on click
    $("input,textarea").each(function() {
	    $(this).data('holder',$(this).attr('placeholder'));
        $(this).focusin(function(){
            $(this).attr('placeholder','');
	    });
        $(this).focusout(function(){
            $(this).attr('placeholder',$(this).data('holder'));
        });
    });

//     $('#fullpage').fullpage({
//             //Navigation   program
//
//             anchors:['home', 'event', 'speakers', 'tickets', 'sponsors', 'partners', 'contacts', 'location'],
//             menu: '.fl-menu',
// //             navigation: true,
// //             navigationPosition: 'right',
//             navigationTooltips: ['Home', 'Event', 'Ticket', 'Speakers', 'Sponsors', 'Partners', 'Contact us', 'Location'],
//             slidesNavigation: true,
//
//             css3: true,
//             scrollingSpeed: 700,
//             scrollOverflow: false,
//
//             //Accessibility
//             keyboardScrolling: true,
//             animateAnchor: true,
//             recordHistory: true,
//             easing: 'easeInOutCubic',
//             easingcss3: 'ease',
//             //Design
//             controlArrows: true,
//             verticalCentered: true,
//             responsiveWidth: 880,
//             responsiveHeight: 950,
//             responsiveSlides: false,
//             parallax: false,
//             parallaxOptions: {type: 'reveal', percentage: 62, property: 'translate'},
//             //Custom selectors
//             sectionSelector: '.section',
//             slideSelector: '.slide',
//
//             lazyLoading: true,
//
//             //events
//             afterLoad: function(anchorLink, index){
// 	             if(index == 1) {
//
// 	            }
// 	            if(index == 2) {
//
// 	            }
// 	            if(index == 3) {
//
// 	            }
// 	            if(index == 4) {
//
// 	            }
// 	            if(index == 5) {
//
// 	            }
// 	            if(index == 6) {
//
// 	            }
// 	            if(index == 7) {
//
// 	            }
//             },
//             afterResponsive: function(isResponsive){}
//         });

//
        if($(window).width() > 769) {
            setTimeout(function(){
                var home_bg_hetght = $('.home').height();
                $('.home-section').height(home_bg_hetght);
                $('.home-blue-bg').height(home_bg_hetght);
            }, 500);
        }

        var lastId,
            topMenu = $(".fl-menu"),
            topMenuHeight = topMenu.outerHeight()+200,
            // All list items
            menuItems = topMenu.find("a"),
            // Anchors corresponding to menu items
            scrollItems = menuItems.map(function(){
                var item = $($(this).attr("href"));
                if (item.length) { return item; }
            });


        // Bind click handler to menu items
        // so we can get a fancy scroll animation
        menuItems.click(function(e){
            var href = $(this).attr("href"),
                offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+1;
            $('html, body').stop().animate({
                scrollTop: offsetTop
            }, 300);
             e.preventDefault();
        });
        // Bind to scroll
        $(window).scroll(function(){
            // Get container scroll position
            var fromTop = $(this).scrollTop()+topMenuHeight;

            // Get id of current scroll item
            var cur = scrollItems.map(function(){
                if ($(this).offset().top < fromTop)
                    return this;
            });
            // Get the id of the current element
            cur = cur[cur.length-1];
            var id = cur && cur.length ? cur[0].id : "";

            if (lastId !== id) {
                lastId = id;
                // Set/remove active class
                menuItems
                    .parent().removeClass("active")
                    .end().filter("[href='#"+id+"']").parent().addClass("active");
            }
        });

        $('body').removeClass('admin-bar');
		setTimeout(function(){
	      var cont_bg_hetght = $('.co-d-h').height();
	      $('.co-d-h').height(cont_bg_hetght);
	    }, 500);

		var num = 10;
 setTimeout(function(){
	     $(window).bind('scroll', function () {

	         if ($(window).scrollTop() > num) {
	             $('.header-section-mobile').addClass('fixed-media');
	             $('.header-section-mobile .devops-menu').addClass('menu-black');
	             $('.header-section-mobile .padding-not').addClass('yes-actives');
	             $('.header-section-mobile .padding-not').removeClass('not-actives');
	             $('.media-s-m').addClass('col-8');
	             $('.media-s-m').removeClass('col-12');
	             $('.header-section-mobile .media-logo').addClass('yes-actives');
	             $('.header-section-mobile .media-logo').removeClass('not-actives');
	             $('.header-section-mobile .button-menu').addClass('yes-actives');
	             $('.header-section-mobile .button-menu').removeClass('not-actives');
	         } else {
	             $('.header-section-mobile').removeClass('fixed-media');
	             $('.header-section-mobile .devops-menu').removeClass('menu-black');
	             $('.header-section-mobile .padding-not').addClass('not-actives');
	             $('.header-section-mobile .padding-not').removeClass('yes-actives');
	             $('.media-s-m').removeClass('col-8');
	             $('.media-s-m').addClass('col-12');
	             $('.header-section-mobile .media-logo').addClass('not-actives');
	             $('.header-section-mobile .media-logo').removeClass('yes-actives');
	             $('.header-section-mobile .button-menu').addClass('not-actives');
	             $('.header-section-mobile .button-menu').removeClass('yes-actives');
	         }

	     });
}, 500);
	     $( ".button-menu" ).click(function() {
            $(this).toggleClass('media-icon-active');
            if ($(this).hasClass('media-icon-active')) {
                $(".media-icon-active img").attr("src","/wp-content/themes/devops-days-kazan/images/menu-icon-active.png");
            }
            else {
                $(".button-menu img").attr("src","/wp-content/themes/devops-days-kazan/images/menu-icon.png");
            }
            $('.hed-media-m-m').toggleClass('hiden-mobile-menu');
    });

    $.fn.lastrepcontent = function (){
        var $lastrep = $(this),
            maxH    = $lastrep.eq(0).height();

        $lastrep.each(function(){

            maxH = ( $(this).height() > maxH ) ? $(this).height() : maxH;

        });

        $lastrep.height(maxH);
    }
    $('.three-ag').lastrepcontent();

});

$(window).load(function() {
	$('#before-load').find('i').fadeOut().end().delay(400).fadeOut('fast');
  $('html, body').animate({scrollTop: '0px'}, 300);
});

}(jQuery));
