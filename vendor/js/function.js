$(function () {
    // $('body').css('display', 'none');
    //    $(window).load(function () {
    //        $('.content').css('display', 'block')

    //    })

    $('.img_zoom').click(function () {
        $('.img_zoom_div').remove()
        $('body').append('<div class="img_zoom_div"><span class="img_zoom_close">x</span><img src="' + $(this).attr('src') + '"/></div>');

    })
    $('body').on('click', '.img_zoom_close', function () {

        $('.img_zoom_div').remove()

    })
})