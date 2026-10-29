$(document).ready(function () {
    let width = $(window).width();

    $(window).on("resize", function () {
        width = $(this).width();

        if (width > 1008) $(".sidebar").show();
        else $(".sidebar").hide();
    });



    $(".fa-bars").click(function () {

        $(".sidebar").show();

        $(".main-content").click(function () {
            $(".sidebar").hide();
        });
    });
    

    $(".search-bar").click(function () {
        $("input[name='search']").focus();
    })
});