jQuery(document).ready(function () {    
    
    jQuery(".nav-toggle").click(function(){
        jQuery(".mainnav").slideToggle();
    });
    
    
    /************* Smooth Scroll ****************/
    jQuery('ul.mainnav a').smoothScroll();
    /************ Menu Active *****************/
    jQuery(window).scroll(function () {
        var uTD = jQuery(window).scrollTop();
        var servicePosi = jQuery("#services").position();
        var serviceHei = jQuery("#services").height();
        var workPosi = jQuery("#works").position();
        var workHei = jQuery("#works").height();
        var aboutPosi = jQuery("#about").position();
        var aboutHei = jQuery("#about").height();
        var blogPosi = jQuery("#blog").position();
        var blogHei = jQuery("#blog").height();
        var teamPosi = jQuery("#team").position();
        var teamHei = jQuery("#team").height();
        var pricingPosi = jQuery("#pricing").position();
        var pricingHei = jQuery("#pricing").height();
        var contactPosi = jQuery("#contact").position();
        var contactHei = jQuery("#contact").height();

        if (uTD + 100 > servicePosi.top && uTD < servicePosi.top + serviceHei) {
            jQuery(".main-menu ul li:nth-child(2) a").addClass("active-menu");
        } else {
            jQuery(".main-menu ul li:nth-child(2) a").removeClass("active-menu");
        }
        if (uTD + 100 > workPosi.top && uTD < workPosi.top + workHei) {
            jQuery(".main-menu ul li:nth-child(3) a").addClass("active-menu");
        } else {
            jQuery(".main-menu ul li:nth-child(3) a").removeClass("active-menu");
        }
        
        if (uTD + 100 > aboutPosi.top && uTD < aboutPosi.top + aboutHei) {
            jQuery(".main-menu ul li:nth-child(4) a").addClass("active-menu");
        } else {
            jQuery(".main-menu ul li:nth-child(4) a").removeClass("active-menu");
        }
        if (uTD + 100 > blogPosi.top && uTD < blogPosi.top + blogHei) {
            jQuery(".main-menu ul li:nth-child(5) a").addClass("active-menu");
        } else {
            jQuery(".main-menu ul li:nth-child(5) a").removeClass("active-menu");
        }
        
        if (uTD + 100 > teamPosi.top && uTD < teamPosi.top + teamHei) {
            jQuery(".main-menu ul li:nth-child(6) a").addClass("active-menu");
        } else {
            jQuery(".main-menu ul li:nth-child(6) a").removeClass("active-menu");
        }
        
        if (uTD + 100 > pricingPosi.top && uTD < pricingPosi.top + pricingHei) {
            jQuery(".main-menu ul li:nth-child(7) a").addClass("active-menu");
        } else {
            jQuery(".main-menu ul li:nth-child(7) a").removeClass("active-menu");
        }
        
        if (uTD + 100 > contactPosi.top && uTD < contactPosi.top + contactHei) {
            jQuery(".main-menu ul li:nth-child(8) a").addClass("active-menu");
        } else {
            jQuery(".main-menu ul li:nth-child(8) a").removeClass("active-menu");
        }
        
        var headerArea = jQuery("#header-area").height();
        var slider = jQuery(".slider").height();
        var services = jQuery("#services").height();

        if (uTD < headerArea + slider) {
            jQuery(".main-menu ul li:nth-child(1) a").addClass("active-menu");
        } else {
            jQuery(".main-menu ul li:nth-child(1) a").removeClass("active-menu");
        }
    });

    /*********** Filter **************/
    var containerEl = document.querySelector('.all-item');
    var mixer = mixitup(containerEl);

    /************ owlCarousel *************/
	
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        items: 4,
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 1000,
        autoplayHoverPause: true,
		responsiveClass:true,
		responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:2,
            nav:false
        },
        768:{
            items:4,
            nav:true,
            loop:false
        }
    }
    });
	
    /************ CountTo ************/
    jQuery(".facts").appear(function () {
        jQuery(".timer").countTo();
    });
	
	
	 jQuery(window).scroll(function () {

            if (jQuery(this).scrollTop() > 200) {
                jQuery('.scrollup').fadeIn();
            } else {
                jQuery('.scrollup').fadeOut();
            }
        });

        jQuery('.scrollup').on('click', function () {
            jQuery("html, body").animate({
                scrollTop: 0
            }, 600);
            return false;
        });





jQuery('.work-menu ul li').on('click', function (){
        jQuery('.work-menu ul li').removeClass("active");
        jQuery(this).addClass("active");
    });







});