$(document).ready(function() {
    // Banner Slider
    $('#banner-slider').owlCarousel({
        items: 1,
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        animateOut: 'fadeOut',
    });
    // Ring Slider
    $('#content-slider').owlCarousel({
        items: 4,
        loop: true,
        margin: 16,
        nav: true,
        navText: [
            "<i class='fa fa-angle-left   owl__nav-icon'>",
            "<i class='fa fa-angle-right  owl__nav-icon'>"
        ],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            768: {
                items: 2
            },
            1024: {
                items: 4
            },
            1239: {
                items: 4
            }
        }
    });

    // Suggest Slider 
    $('#suggest-slider').owlCarousel({
        items: 4,
        loop: true,
        margin: 16,
        nav: true,
        navText: [
            "<i class='fa fa-angle-left   owl__nav-icon'>",
            "<i class='fa fa-angle-right  owl__nav-icon'>"
        ],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            768: {
                items: 3
            },
            1024: {
                items: 4
            },
            1239: {
                items: 4
            }
        }
    });
    // Bracelets Slider
    $('#explore-slider').owlCarousel({
        items: 4,
        loop: true,
        margin: 16,
        nav: true,
        navText: [
            "<i class='fa fa-angle-left   owl__nav-icon'>",
            "<i class='fa fa-angle-right  owl__nav-icon'>"
        ],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            768: {
                items: 2
            },
            1024: {
                items: 4
            },
            1239: {
                items: 4
            }
        }
    });
    // Charm Slider
    $('#bestSelling-slider').owlCarousel({
        items: 4,
        loop: true,
        margin: 16,
        nav: true,
        navText: [
            "<i class='fa fa-angle-left   owl__nav-icon'>",
            "<i class='fa fa-angle-right  owl__nav-icon'>"
        ],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            768: {
                items: 2
            },
            1024: {
                items: 4
            },
            1239: {
                items: 4
            }
        }
    });
    // Earrings Slider
    $('#newCollection-slider').owlCarousel({
        items: 4,
        loop: true,
        margin: 12,
        nav: true,
        navText: [
            "<i class='fa fa-angle-left   owl__nav-icon'>",
            "<i class='fa fa-angle-right  owl__nav-icon'>"
        ],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            768: {
                items: 2
            },
            1024: {
                items: 4
            },
            1239: {
                items: 4
            }
        }
    });
    // Bangles Slider
    $('#newCollection1-slider').owlCarousel({
        items: 4,
        loop: true,
        margin: 12,
        nav: true,
        navText: [
            "<i class='fa fa-angle-left   owl__nav-icon'>",
            "<i class='fa fa-angle-right  owl__nav-icon'>"
        ],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            768: {
                items: 2
            },
            1024: {
                items: 4
            },
            1239: {
                items: 4
            }
        }
    });
    // Necklaces Slider
    $('#Wedding-slider').owlCarousel({
            items: 4,
            loop: true,
            margin: 0,
            nav: true,
            navText: [
                "<i class='fa fa-angle-left   owl__nav-icon'>",
                "<i class='fa fa-angle-right  owl__nav-icon'>"
            ],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                768: {
                    items: 2
                },
                1024: {
                    items: 4
                },
                1239: {
                    items: 4
                }
            }
        })
        // Tutorial Slider  
    $('#tutorial-slider').owlCarousel({
        items: 3,
        loop: true,
        margin: 16,
        nav: true,
        navText: [
            "<i class='fa fa-angle-left   owl__nav-icon'>",
            "<i class='fa fa-angle-right  owl__nav-icon'>"
        ],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            768: {
                items: 2
            },
            1024: {
                items: 3
            },
        }
    });
    // 
});

// Move on Top
$(window).scroll(function() {
    if ($(this).scrollTop() >= 300) {
        $('.move-on-top-btn').fadeIn();
    } else {
        $('.move-on-top-btn').fadeOut();
    }
});

$('.move-on-top-btn').click(function() {
    $('html, body').animate({ scrollTop: 0 }, 1500);
});