$(document).ready(function () {
    $('.owl-carousel').owlCarousel({
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
    })
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