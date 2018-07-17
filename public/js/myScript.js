$('.carousel').carousel({
    interval: 3000
});

$(document).ready(function () {

    $("#counting-one").animateNumbers(2000, true, 5000);
    $("#counting-two").animateNumbers(50, true, 5000);
    $("#counting-three").animateNumbers(500, true, 5000);
    $("#counting-four").animateNumbers(25, true, 5000);

});

//navbar

$(document).ready(function () {
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        if (scroll > 300) {
            $(".navbar-area").css("background", "rgba(0,0,0, .8)");
        }

        else {
            $(".navbar-area").css("background", "");
        }
    });
});

//wow plugin
new WOW().init();

//back to top

