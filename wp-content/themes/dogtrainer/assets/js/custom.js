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
