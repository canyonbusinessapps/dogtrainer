jQuery(".custom_search_form-trigger").click(function () {
    jQuery(this).hide();
    jQuery("#custom_search_form").toggle('slow');

});

jQuery(".appoinment_block").click(function () {
    window.location = $(this).find("a").attr("href");
    return false;
});

function our_team(teamid) {
    jQuery('.content_' + teamid).hover(function () {
        jQuery(".title_" + teamid).addClass("text_white");
        jQuery(".img_" + teamid).addClass("content-image-border");
    }, function () {
        jQuery(".title_" + teamid).removeClass("text_white");
        jQuery(".img_" + teamid).removeClass("content-image-border");
    });
}

jQuery(document).ready(function () {
    jQuery("#testimonial-slider").owlCarousel({
        items: 1,
        itemsDesktop: [1000, 1],
        itemsDesktopSmall: [979, 1],
        itemsTablet: [768, 1],
        pagination: false,
        navigation: true,
        navigationText: ["", ""],
        autoPlay: false
    });
});

/*
 * Top sticky nav
 * Sticky when foating
 */
// When the user scrolls the page, execute myFunction
window.onscroll = function () {
    stickyNav()
};
// Get the header
var header = document.getElementById("header");
// Get the offset position of the navbar
var sticky = header.offsetTop;
function stickyNav() {
    if (window.pageYOffset > sticky) {
        header.classList.add("nav-shadow");
    } else {
        header.classList.remove("nav-shadow");
    }
}

