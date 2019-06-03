$(function () {
    $(".smooth_scroll").on('click', function () {
        let attr = $(this).attr("href");
        $('html, body').animate({
            scrollTop: $(attr).offset().top
         }, 1000);
    });
});

// $(function () {
//     let offset = $("#scroll_to_top").offset().top;
//     if(offset > 20){
//         $("#scroll_to_top").hide();
//     }
//     else{
//         $("#scroll_to_top").show();
//     }
// });

$("#scroll_to_top").hide();

$(window).scroll(function() {
    if ($(this).scrollTop()) {
        $('#scroll_to_top:hidden').stop(true, true).fadeIn();
    } else {
        $('#scroll_to_top').stop(true, true).fadeOut();
    }
});
