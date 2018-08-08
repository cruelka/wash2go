/*
(function( $ ){
    let header = $('.so-header');
    let offset = $('.so-header__offset');
    
    let scrolledClass = 'so-header_scrolled';

    let logo = $('.so-header__logo');
    let bag = $('.so-header__bag');
    let burger = $('.so-header__burger');


    function checkPagePosition(){
        let scrollPosition = $(window).scrollTop();
        let offsetHeight = offset.outerHeight();
        let headerHeight = header.outerHeight();
        let trueOffset = offsetHeight-headerHeight;
  
        if(scrollPosition>trueOffset){
            mutateHeader(true);
        } else {
            mutateHeader(false);
        }
    }

    function mutateHeader(i){
        if(i===true){
            header.addClass(scrolledClass);
            logo.attr('src','images/logo.svg');
            bag.attr('src','images/icons/bag.svg');
            burger.addClass('so-header__burger_scrolled');
        } else {
            header.removeClass(scrolledClass);
            logo.attr('src','images/logo_white.svg');
            bag.attr('src','images/icons/bag_white.svg');
            burger.removeClass('so-header__burger_scrolled');
        }
    }

    $(window).scroll(function(){
        checkPagePosition();
    });

    $(window).resize(function(){
        checkPagePosition();
    });

    $(document).ready(function(){
        setTimeout(function(){checkPagePosition()},0.1);
    });


    //Header Burger

    /*

    let burger = $('.header__burger');

    burger.click(function(){
        $(this).toggleClass('header__burger_open');
    });

    */

//})( jQuery );
