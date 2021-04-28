// Trailers Section image to video efect
$('.trailer-item-info').click(function () {
    var video = $('<iframe />', {
        'class': "trailer-item-video",
        'src': "https://www.youtube.com/embed/" + this.dataset.video + "?controls=0",
        'height': "400%",
        'width': "100%",
        'frameborder': "0"
    });
    $(this).siblings('img').replaceWith(video);
    $(this).hide();
});


// Play Button Effect
$('.trailer-item-info').children('i').hover(function () {
    $(this).removeClass("far");
    $(this).toggleClass('fas');

}, function () {
    $(this).removeClass("fas");
    $(this).addClass('far');
});