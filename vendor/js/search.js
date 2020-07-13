///Loading....//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function loading(show) {
    if (show == 'show') {
        $('body').append('<div class="loading2"><div class="cssload-speeding-wheel"></div></div>');
        $('.loading2').fadeIn();
    }
    if (show == 'hide') {
        $('.loading2').fadeOut(1000, function () {
            $('.loading2').remove();

        });

    }

}
//Note Function/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function note(msg,time) {
    
    //msg = 'Successfully Done';

    //time = 4000;
    $('body').append('<div class="note_msg">' + msg + '</div>')

    setTimeout(function () {
        // alert(time)
        $('.note_msg').animate({
            left: 2000,
            opacity: 0
        }, 1000, function () {
            $('.note_msg').remove();
        })
        
    }, time)

}

//Tooltip function///////////////////////////////////////////////////////////////////////////////////////////////////////////////
(function ($) {

    // Create plugin
    $.fn.tooltips = function (el) {

        var $tooltip,
      $body = $('body'),
      $el;

        return this.each(function (i, el) {

            $el = $(el).attr("data-tooltip", i);

            var $tooltip = $('<div class="tooltip" data-tooltip="' + i + '">' + $el.attr('title') + '<div class="arrow2"></div></div>').appendTo("body");

            var linkPosition = $el.position();

            $tooltip.css({
                top: linkPosition.top - $tooltip.outerHeight() - 13,
                left: linkPosition.left - ($tooltip.width() / 2)
            });

            $el
            // Get rid of yellow box popup
      .removeAttr("title")

            // Mouseenter
      .hover(function () {

          $el = $(this);

          $tooltip = $('div[data-tooltip=' + $el.data('tooltip') + ']');

          // Reposition tooltip, in case of page movement e.g. screen resize                        
          var linkPosition = $el.position();

          $tooltip.css({
              top: linkPosition.top - $tooltip.outerHeight() - 13,
              left: linkPosition.left - ($tooltip.width() / 2)
          });

          // Adding class handles animation through CSS
          $tooltip.addClass("active");

          // Mouseleave
      }, function () {

          $el = $(this);

          // Temporary class for same-direction fadeout
          $tooltip = $('div[data-tooltip=' + $el.data('tooltip') + ']').addClass("out");

          // Remove all classes
          setTimeout(function () {
              $tooltip.removeClass("active").removeClass("out");
          }, 300);

      });

        });

    }

})(jQuery);

//Emp Search////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function search(val) {
    
    $('.loading').show();
    $.ajax({

        url: '//kmp.digispice.com/empsearchval.aspx',
        type: 'post',
        data: { searchstr: val },
        dataType: 'json',
        success: function (data) {
            $('.data_show ul li').slideUp().delay(2000).remove();
            $(data).each(function (i, obj) {
                //alert(data[i].a);
                if (data[i].j == '0') {
                    data[i].j = 'N/A';
                }
                if (data[i].g == '') {
                    data[i].g = 'http://www.cadsystech.com/wp-content/uploads/2015/04/user-icon.png';
                } else {
                    data[i].g = '//kmp.digispice.com/photo/' + data[i].g;
                }

                $('.data_show ul').append('<li><div class="ds_left_box"><div class="ds_img"><img src="' + data[i].g + '"/></div><div class="ds_name">' + data[i].b + '<br><b>Voip: </b>' + data[i].j + '</div></div><div class="ds_right_box"><div class="bb"><b>' + data[i].a + '</b><br>' + data[i].d + '<div>' + data[i].f + '</div></div><div  class=""><b>Department :</b><br>' + data[i].e + '</div></div><div class="clear emails"><b>Email:</b> <a href="mailto:' + data[i].c + '">' + data[i].c + '</a><br><b>Gmail:</b> <a href="mailto:' + data[i].h + '">' + data[i].h + '</a></div></li>')
            })
            $('.loading').hide();
        }

    });

}

$(document).ready(function () {

    $(".submenu").click(function (e) {
        $(".submenu_box").slideToggle();
        e.stopPropagation();
    });

    $(document).click(function (e) {
        if (!$(e.target).is('.submenu_box, .submenu_box *')) {
            $(".submenu_box").hide();
        }
    });

    $('input[type="image"]').tooltips();

    imgsrc = $('.divPic img').attr('src')
    alt = $('#ctl00_header1_lbl_atdstatus').text();
    $('#ctl00_header1_lbl_atdstatus').addClass('st_' + alt)
    $('body').on('change keydown paste input', '.search_emp input', function () {
        val = $(this).val();
        len = val.length;
        $('.rel').text(val)
        setTimeout(function () {
            if (len > 2) {
                $('.data_show').slideDown();
                $('.button_2').addClass('cross_icon').removeClass('search_icon');
                search(val)
            } else {
                $('.data_show').slideUp();
                $('.button_2').addClass('search_icon').removeClass('cross_icon');
            }
        }, 1000)

    })
    ///////////////////////////////////////////////////////////////////////////////////////////////
    $('body').on('click', '.cross_icon', function () {
        //  $("body").off('change keydown paste input', '.search_emp input',search(val))
        $('.data_show').fadeTo(1000, 0);
        setTimeout(function () {
            $('.search_emp input').val('');
            $('.data_show ul li').slideUp(1000).remove();
            $('.data_show').slideUp(1000);
            $('.cross_icon').addClass('search_icon').removeClass('cross_icon');
            $('.data_show').removeClass('data_blur');
            $('.data_show').fadeTo(0, 1);
        }, 1000)




    })

    ///////////////////////////////////////////////////////////////////////////////////
    $(window).scroll(function () {
        if ($(document).scrollTop() > 102) {
            $('#navbar').addClass('fix_header');
            $('.top_icon').fadeIn();
        }
        else {
            $('#navbar').removeClass('fix_header');
            $('.top_icon').fadeOut();
        }
    });
    ///////////////////////////////////////////////////////////////////////////////////////
    $('.top_icon').click(function () {
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    })
    /////////////////////////////////////////////////////////////////////////
    $('body').on('click', '.divPic', function () {

        $('.img_upload').fadeToggle();
    })
    $('body').on('click', '.img_cancel_btn', function () {
        //alert(imgsrc)
        $('.img_upload').fadeOut();
        $('#ctl00_header1_img_user').attr('src', imgsrc);
        $('.custom-file-upload input[type=file]').val('')
    })
    $('body').on('change', '.custom-file-upload input[type=file]', function (e) {

        var file = '';
        var file = this.files[0];
        var imagefile = file.type;

        var match = ["image/jpeg", "image/png", "image/jpg", "image/JPG", "image/PNG", "image/JPEG", "image/gif", "image/GIF", "image/bmp", "image/BMP"];
        var reader = new FileReader();
        //var data = new FormData();

        reader.readAsDataURL(file);
        if (!((imagefile == match[0]) || (imagefile == match[1]) || (imagefile == match[2]) || (imagefile == match[3]) || (imagefile == match[4]) || (imagefile == match[5]) || (imagefile == match[7]) || (imagefile == match[8]) || (imagefile == match[9]) || (imagefile == match[10]) || (imagefile == match[6]))) {
            alert('Not Supported File')
        } else {
            reader.onload = function (e) {
                // alert('')
                //  alert(e.target.result);
                ///data = e.target.result
                $('#ctl00_header1_img_user').attr('src', e.target.result);
                /////////////////////////////////////////////////////////////////////////////////////////////

            }
        }

    })

    //Image Upload/////////////////////////////////////////////////////////////////////////////////////////////////
    $('body').on('click', '.img_update_btn', function (e) {
        e.preventDefault();
        imval = $('.custom-file-upload input[type=file]').val();
        if (!imval == '') {
            var fileUpload = $('.custom-file-upload input[type=file]').get(0);
            var files = fileUpload.files;
            imgurl = $('#ctl00_header1_img_user').attr('src');
            var data = new FormData();
            // data.append('image',$('.custom-file-upload input[type=file]')[0].files[0]); 
            $.each(files, function (key, value) {

                data.append(key, value);
            });

            $.ajax({


                url: "//kmp.digispice.com/AndroidAPI/PicUpload.aspx",
                type: "POST",
                data: data,
                contentType: false,
                processData: false,
                success: function (msg) {
                    if (msg == 'Yes') {
                        imgsrc = imgurl;
                        $('.img_loading').text('Image Uploaded Successfully.')
                        $('.img_upload').fadeOut(2900, function () {
                            $('.cng_per').remove();
                            $('.img_loading').hide();
                            $('.img_loading').html('<span class="loading_icon icon"></span> Uploading ...');
                            $('.custom-file-upload input[type=file]').val('');
                        });
                    } if (msg == 'No') {
                        $('.img_loading').text('Somthing is wrong in Image').fadeOut(5000);
                    }
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {

                    alert('Connection seems dead!');

                },
                xhr: function () {
                    var xhr = new window.XMLHttpRequest();

                    xhr.upload.addEventListener("progress", function (evt) {

                        var percentComplete = evt.loaded / evt.total;

                        if (evt.lengthComputable) {
                            var percentComplete = evt.loaded / evt.total;
                            percentComplete = parseInt(percentComplete * 100);
                            console.log(percentComplete);
                            $('.img_loading').fadeIn();
                            $('.divPic').removeClass('divPic').addClass('pic_chng').append('<div class="cng_per"><span>' + percentComplete + '</span>%</div>');
                            $('.cng_per span').text(percentComplete)
                            if (percentComplete === 100) {
                                //  $('.cng_per').remove();
                                $('.pic_chng').removeClass('pic_chng').addClass('divPic');
                                //alert(percentComplete)
                            } else {
                                // alert(percentComplete)
                                //  return false;
                            }

                        }
                    }, false);

                    return xhr;
                }
            });

        } else {

            alert('Choose a file')
        }
    })

    //Responsive Nav//////////////////////////////////////////////////////////////////////////////////////////////////////

    $('body').on('click', '.mob_nav2', function () {
        //alert('d');
        $('.mob_nav').remove();
        nav = $('#navbar .nav').html();
        $('body').append('<div class="mob_nav"><ul>' + nav + '</ul></div>')
        return false;
    })
    $(document).click(function (e) {
        if (!$(e.target).is('.mob_nav, .mob_nav *,.mob_nav2')) {
            $(".mob_nav").hide();
        }
    });
    $('body').on('click', '.mob_nav>ul li a[href="#"]', function () {

        // vv =  $(this).parent().attr('class');
        if ($(this).parent().hasClass('sub_is')) {
            $('.sub_sub_menu ul').slideUp();
            $(this).next('.sub_sub_menu').children('ul').slideDown();
            $(this).next('.sub_sub_menu').slideDown();
        } else {
            $('.sub_menu ul').slideUp();
            $(this).next('.sub_menu').children('ul').slideDown();
        }

    })
    $('body').on('click', '.ul_have', function () {
        
        
        

        if ($(this).hasClass('active_ul')) {
            $(this).removeClass('active_ul').children('.ul_is').slideUp();
        } else {
            $('.ul_is').slideUp();
            $('.ul_have').removeClass('active_ul');
            $(this).addClass('active_ul').children('.ul_is').slideDown();
        }

    })


})