$(document).ready(function(){

    $('.panel_slide').delay(1000).animate({right: "0"}, 500);
    

    $('.panel_slide').click(function (event) {
        /*event.preventDefault();*/

        $(this).animate({right: "-250px"}, 500);


    })















});