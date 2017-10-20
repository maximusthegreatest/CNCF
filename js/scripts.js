$(document).ready(function() {
    // Set title
    function capitalize(string) {
        return string.charAt(0).toUpperCase() + string.slice(1);
    }

    var title = window.location.pathname.split("/").pop().slice(0, -4);
    title = capitalize(title);

    $("title").html("Children's Neuroblastoma Cancer Foundation - " + title);

    // Set active tab
    var url = window.location.pathname;
    url = url.split("/").pop();
    $("a.nav-link[href='" + url + "']").addClass("active");

    // Owl Carousel
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 28,
        nav: true,
        pagination: true,
        navText: [
            "<i class='fa fa-caret-left'></i>",
            "<i class='fa fa-caret-right'></i>"
        ],
        autoplay: true,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    })
});