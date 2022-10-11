$(document).ready(function() {

    $(".aft-paf").each(function(index, element) {
        var str = $(element).html();
        str = str.trim();

        if (typeof str === 'string' && str.length === 0) {
            $(element).parent('li').hide();
        } else {
            console.log("non vide", "-> " + $(element).html() + " <-");
        }
        //console.log( $(element).html() );
    });

    const showAnim = gsap.from('nav', {
        yPercent: -100,
        paused: true,
        duration: 0.3
    }).progress(1);

    ScrollTrigger.create({
        start: "top top",
        end: "bottom bottom",
        onUpdate: (self) => {
            self.direction === -1 ? showAnim.play() : showAnim.reverse()
        }
    });



    gsap.to(".mask", {
        yPercent: -100,
        ease: "none",
        duration: 1,
        scrollTrigger: {
            trigger: "body",
            scrub: 2,
        },
    });
    gsap.to(".mask_2", {
        ease: "none",
        duration: 1,
        yPercent: -100,
        scrollTrigger: {
            trigger: "body",
            scrub: 2,

        },
    });
    gsap.to(".mask_3", {
        ease: "none",
        duration: 1,
        xPercent: -50,
        rotation: 360 * 2,
        scrollTrigger: {
            trigger: "body",
            scrub: 2,

        },
    });

    $('.slide-fade').slick({
        dots: true,
        arrows: true,
        infinite: true,
        speed: 500,
        fade: true,
        autoplay: true,
        autoplaySpeed: 5000,
        cssEase: 'linear'
    });


    $('.scroll-top a[title]').click(function(event) {

        let cible = $(this).attr('href');
        let slice = cible.split('#');
        let blocTop = $('#' + slice[1]).offset().top;
        $('html,body').animate({
            scrollTop: blocTop
        }, 2000);

    });


    gsap.to(".slide-item", {
        backgroundPosition: `50% -150px`,
        ease: "none",
        scrollTrigger: {
            trigger: ".slide-item",
            scrub: 2,
        },
    });



    if ($(window).width() < 992) {

        var menu = new TimelineMax({ paused: true });

        menu.from('.nav-link', {
            x: -250,
            autoAlpha: 1,
            opacity: 0,
            duration: 1,
            ease: 'power2.inOut',
            stagger: { amount: 1, from: 'start', axis: null, grid: 'auto' }
        }, 'scene-=1')

        let bool = true

        $('.navbar-toggler').click(function() {
            menu.restart();

        });
    }
})

$(Window).on('scroll', function() {

    let top = $(window).scrollTop()
    if (top > 0) {
        $('nav').addClass('sticky-nav')
    } else {
        $('nav').removeClass('sticky-nav')
    }
    if (top > $('.navbar.navbar-expand-lg').height()) {
        $('.scroll-top').addClass('show_it')
    } else {
        $('.scroll-top').removeClass('show_it')
    }

})

$(window).on('load', function() {

    function termine() {
        $('.preloader').fadeOut(1000); // set duration in brackets
        $('.agenda_bloc > .row > p').remove()
    }
    termine()

    function preload() {
        tl = gsap.timeline();

        tl.to('.preloader', {
            yPercent: -100,
            duration: 1,
        })
        var sl = new TimelineLite();
        sl.from('.slide-item h1', {
            y: 100,
            duration: 1,
            opacity: 0
        })
        sl.from('.slide-item p', {
            y: 100,
            duration: 1,
            opacity: 0
        })
        sl.from('.slide-item a', {
            y: 50,
            opacity: 0
        })

    }
    preload()

})