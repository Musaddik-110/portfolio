$(function () {
    $('.banner_slide').owlCarousel({
        loop:true,
        margin:0,
        nav:true,
        navText:['<i class="fas fa-angle-left"></i>','<i class="fas fa-angle-right"></i>'],
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        dots:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    })


});

 