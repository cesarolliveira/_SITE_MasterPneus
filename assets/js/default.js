$(document).ready(function () {
    // SCROLL SUAVE
    $('#navigation a[href^="#"]').on('click', function (e) {
        e.preventDefault();
        var id = $(this).attr('href');
        var targetOffset = $(id).offset().top;

        $('html, body').animate({
            scrollTop: targetOffset - 68
        }, 700);
    });

    $('#marcas-pneus .owl-carousel').owlCarousel({
        loop: true,
        autoplay: true,
        margin: 10,
        autoplayTimeout: 2000,
        responsive: {
            576: {
                items: 1
            },
            768: {
                items: 3
            },
            992: {
                items: 4
            },
            1200: {
                items: 5
            },
            1400: {
                items: 6
            }
        }
    });

    $('#carousel-depoimentos').owlCarousel({
        loop: true,
        nav: false,
        margin: 10,
        autoplay: true,
        animateOut: 'fadeOut',
        responsive: {
            0: {
                items: 1
            },
            576: {
                items: 1
            },
            768: {
                items: 1
            },
            992: {
                items: 1
            },
            1200: {
                items: 1
            },
            1400: {
                items: 1
            }
        }
    });
});

// ##### CLASSE Default ##### //
var Default = function () {
    return {
        baseLink: function () {
            var link = $('input[name="baseLink"]').val();

            return link;
        }
    }
}();