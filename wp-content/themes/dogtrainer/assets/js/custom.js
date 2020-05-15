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
//        jQuery(".img_" + teamid).animate({width: "100px", height: "100px"}, 10);
    }, function () {
        jQuery(".title_" + teamid).removeClass("text_white");
//        jQuery(".img_" + teamid).animate({width: "100%", height: "100%"}, 10);
    });
}