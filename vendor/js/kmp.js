$(function () {
    $('body').on('click', '.user_image', function (e) {
        $('.logout-menu').slideToggle();
        e.stopPropagation();
    })
    $(document).click(function (e) {
        if (!$(e.target).is('.logout-menu')) {
            $(".logout-menu").slideUp();
        }
    });

    $('body').on('click', '.img_ul img', function () {
        $('.img_ul img').removeClass('select');
        $(this).addClass('select');
    });

    $('body').on('click', '.btn2', function () {

        $(this).text('Sending....')
        id = $('.bir_pop h3 .name').attr('rel');
        msg = $('.bir_pop textarea').val();
        img = $('.select').attr('title');
        url = 'api/greetm.aspx?imgname=' + img + '&receivercode=' + id + '&msg=' + msg;
        $.ajax({
            url: url,
            type: 'get',
            dataType: 'json',
            success: function (data) {
                $('.btn2').text('Message has been sent successfully');
                setTimeout(function () {
                    $('.bir_pop').hide();
                    $('.bg').hide();
                    $('.btn2').text('Send');
                    $('.bir_pop textarea').val('');
                }, 4000);
            }
        });

    });

    $('body').on('click', '.bir_close', function () {

        $('.bir_pop').hide();
        $('.bg').hide();
    });
    $('body').on('click', '.bday', function () {
        $('.bir_pop').show();
        $('.bg').show();
        id = $(this).attr('rel');
        name = $(this).text();
        $('.bir_pop h3 .name').text(name);
        $('.bir_pop h3 .name').attr('rel', id);
    });

    $('body').on('click', '.control-group #btnsubmit', function () {
        $("#lblErrorMsg").text("");
        $('#btnsubmit').text('Saving....')
        msg = $('#header1_txtTagLine').val();
        if (msg != "") {

            url = 'api/EmpStatus.aspx?st=' + msg;
            $.ajax({
                url: url,
                type: 'get',
                dataType: 'json',
                success: function (data) {

                    $('#btnsubmit').text('Status has been updated successfully!!!')
                    //alert('Status has been updated successfully!!!');
                    //$('#header1_txtTagLine').text(data.tag);
                    setTimeout(function () {
                        $.colorbox.close();
                        location.reload();
                    }, 4000);
                }
            });
        }
        else {
            $("#lblErrorMsg").text("This field is required");
        }

    });


    $('body').on('click', '.panel-purple', function () {
       // $('.iframe iframe').attr('src', $('.iframe iframe').attr('data-src'));
        $('.iframe').show();
        $('.bg').show();
    });
    $('body').on('click', '.ifr_close', function () {

        $('.iframe').hide();
        $('.bg').hide();
    });

})


$(function () {


    $('.slides2 li').hide()
    $('.slides2 li:hidden').slice(0, 5).show()
    $('.ne').on('click', function () {
        if ($('.slides2 li:last').is(':visible')) { $('.ne').css('backgroundImage', 'url(images/nxt.png)'); } else {
            $('.ne').css('backgroundImage', 'url(images/nxt_hover.png)');
            $('.pr').css('backgroundImage', 'url(images/prv_hover.png)');
            lastVisible = $('.slides2 li:visible:first').index() + 1;
            if (lastVisible >= $('.slides2 li').length) lastVisible = 0;
            $('.slides2 li').hide();
            $toShow = $('.slides2 li:hidden').slice(lastVisible, lastVisible + 5);
            $toShow.show()

        }
    });
    $('.pr').on('click', function () {
        if ($('.slides2 li:first').is(':visible')) { $('.pr').css('backgroundImage', 'url(images/prv.png)'); } else {
            $('.pr').css('backgroundImage', 'url(images/prv_hover.png)');
            $('.ne').css('backgroundImage', 'url(images/nxt_hover.png)');
            lastVisible = $('.slides2 li:visible:first').index() - 1;
            if (lastVisible >= $('.slides2 li').length) lastVisible = 0;
            $('.slides2 li').hide();
            $toShow = $('.slides2 li:hidden').slice(lastVisible, lastVisible + 5);
            $toShow.show();

        }
    });
    //var currentURL = window.location.href;
    //var index = currentURL.indexOf("?msg=");
    //if (index > -1) {
        msg = $('#pval').text()
        //alert(msg);
        $(window).load(function () {
            if (msg == '0') {
                $('.rail').slideDown(1000);
                $('.bg').fadeIn(2000);
            }
        })

  //  }
    $('body').on('click', '.rail_close', function () {
        $('.rail').slideUp(1000);
        $('.bg').fadeOut(2000);
    });

    $('body').on('click', '.rail_submit', function () {
        $('.rail').slideUp(1000);
        $('.bg').fadeOut(2000);
        $.post("api/popup.aspx", function () {
           // alert("success");
        })
    });

})