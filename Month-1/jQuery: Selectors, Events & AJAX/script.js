$(document).ready(function () {

    $(".click").click(function () {
        alert("Button Clicked");
    });

    $(".dbl-click").dblclick(function () {
        alert("Double clicked");
    });

    $(".input").on("input", function () {
        $(".input-text").text($(this).val());
    });

    $(".change").change(function () {
        $(".change-text").text($(this).val());
    });
    $(".key-down").keydown(function () {
        $(".key-down-text").text($(this).val());
    });
    $(".key-up").keyup(function () {
        $(".key-up-text").text($(this).val());
    });

    $(".form-submit-event").submit(function (e) {
        e.preventDefault();
        alert("Form submitted");
    });

    $(".focus").focus(function () {
        $(this).css({ backgroundColor: "lightgreen" });
    });
    $(".blur").blur(function () {
        $(this).css({ backgroundColor: "lightblue" });
    });


    $(".mouse-enter").mouseenter(function () {
        alert("Mouse Entered");
    });
    $(".mouse-leave").mouseleave(function () {
        alert("Mouse Leaved");
    });










    // Form Attribute Selector
    $(".attribute-selector").submit(function (e) {
        e.preventDefault();

        let user = {
            username: $(".attribute-selector input[name='username']").val(),
            email: $(".attribute-selector input[name='email']").val(),
            password: $(".attribute-selector input[name='password']").val(),
            phone: $(".attribute-selector input[name='phone']").val(),
            gender: $(".attribute-selector input[name='gender']:checked").val()
        };

        $(".username").text(user.username);
        $(".email").text(user.email);
        $(".password").text(user.password);
        $(".phone").text(user.phone);
        $(".gender").text(user.gender);
    });




    // Filtering and traversing elements
    $(".first-btn").click(function () {
        $(".filter-div").first().css({ backgroundColor: "pink" });
    });
    $(".eq-2-btn").click(function () {
        $(".filter-div").eq(2).css({ backgroundColor: "lightgreen" });
    });
    $(".eq-3-btn").click(function () {
        $(".filter-div").eq(3).css({ backgroundColor: "lightblue" });
    });
    $(".filter-btn").click(function () {
        $(".filter-div").filter(".active").css({ backgroundColor: "lightcoral" });
    });
    $(".not-btn").click(function () {
        $(".filter-div").not(".deleted").css({ backgroundColor: "thistle" });
    });
    $(".last-btn").click(function () {
        $(".filter-div").last().css({ backgroundColor: "moccasin" });
    });



    $(".parent-btn").click(function () {
        $(".parent-node").css({ backgroundColor: "pink" });
    });
    $(".closest-btn").click(function () {
        $(".child-node").closest(".grand-parent-node").css({ backgroundColor: "lightgreen" });
    });
    $(".siblings-btn").click(function () {
        $(".child-1").siblings().css({ backgroundColor: "lightblue" });
    });
    $(".next-btn").click(function () {
        $(".child-2").next().css({ backgroundColor: "moccasin" });
    });
    $(".prev-btn").click(function () {
        $(".child-3").prev().css({ backgroundColor: "thistle" });
    });
    $(".find-btn").click(function () {
        $(".child-node").find(".child-1").css({ backgroundColor: "lightblue" });
    });




    // Serialization
    $("#serializationForm").submit(function (e) {
        e.preventDefault();
        let serialize = $(this).serialize();
        let serializeArray = $(this).serializeArray();

        $(".serialize-form-data").text(serialize);
        $(".serializeArray-form-data").text(JSON.stringify(serializeArray));
    });
});