$(function() {
    $(window).scroll(function() {
    $(window).scrollTop()>330?(
        $("#description").addClass("description-fixed"),
        $(".description-fixed").css("z-index", "1000")): ($("#description").removeClass("description-fixed"),
        $(".description-fixed").css("z-index", "1"));
    });
});
