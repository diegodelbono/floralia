jQuery(document).ready(function () {

    // Accordion
    var panels = jQuery('.accordion__content').hide();

    jQuery('.accordion-item:first-child .accordion__item:first-child .accordion__header').addClass('accordion__header--active');
    jQuery('.accordion-item:first-child .accordion__item:first-child .accordion__content').slideDown();

    
    jQuery('.accordion__header').click(function () {
        if (jQuery(this).hasClass('accordion__header--active')) {
            jQuery(this).removeClass('accordion__header--active');
            panels.slideUp();
        } else {
            panels.slideUp();
            jQuery('.accordion__header').removeClass('accordion__header--active');
            jQuery(this).addClass('accordion__header--active');
            jQuery(this).next('.accordion__content').slideDown();
        }
    });

    // Navigation
    jQuery('.js-open-nav').click(function () {
        if (jQuery(this).hasClass('active')) {
            console.log("chau");
            jQuery('body').removeClass('body--fixed');
            jQuery('.js-nav').fadeOut();
        } else {
            console.log("hola");
            jQuery('body').addClass('body--fixed');
            jQuery('.js-nav').fadeIn();
        }
        jQuery(this).toggleClass('active');
    });

    // Gallery
    jQuery('.owl-carousel').owlCarousel({
        nav: true,
        items: 1
    });

});
