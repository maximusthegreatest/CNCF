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

// donate page
    var showOther = document.getElementById("amount-donation-other"); 
    var amountButtons = document.getElementById("amount");
    var otherWrapper = document.getElementById("amountOtherWrapper");  
    var backToAmounts = document.getElementById("other-back-to-amounts");
    
    showOther.addEventListener("click", hideAmounts); 
    backToAmounts.addEventListener("click", revealAmounts);

    function hideAmounts() {
        if (otherWrapper.className === "hide") {
                otherWrapper.className = "";
            } else {
                otherWrapper.className = "hide";
            }
        if (amountButtons.className === "") {
            amountButtons.className = "hide";
        }
    }

    function revealAmounts() {
        if (amountButtons.className === "hide") {
            amountButtons.className = "";
        } else {
            amountButtons.className = "hide";
        }

        if (otherWrapper.className === "") {
            otherWrapper.className = "hide";
        }
    }

    // change to active for btn
     $(".pay-meth-btn").on('click', function(){
    $(this).siblings().removeClass('active')
    $(this).addClass('active');
})

     $(".amt-btn").on('click', function(){
    $(this).siblings().removeClass('active')
    $(this).addClass('active');
})



});