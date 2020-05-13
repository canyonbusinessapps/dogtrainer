jQuery(".custom_search_form-trigger").click(function () {
    jQuery(this).hide();
    jQuery("#custom_search_form").toggle('slow');

});

jQuery(".appoinment_block").click(function () {
    window.location = $(this).find("a").attr("href");
    return false;
});
