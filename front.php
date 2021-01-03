<?php

if(!isset($_COOKIE["type"])&& !isset($_COOKIE["user"]))
 {
	 header("Location:login2.php");
}
//  print_r($_COOKIE);
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head><title>
	Knowledge Management Portal
</title><link href="vendor/css/style.css" rel="stylesheet" type="text/css" /> 
<link rel="stylesheet" href="vendor/cal2/css/eventCalendar.css" />
<link rel="stylesheet" href="vendor/cal2/css/eventCalendar_theme_responsive.css" />
<script type="text/javascript" src="vendor/js/jquery-1.11.1.js"></script>

    <script language="JavaScript" type="text/javascript"><!--
        function openwin1() {
            window.open("https://kmp.digispice.com/privacy2.htm", "", "width=440,height=350,iX=200,iY=270,toolbar=no, scrollbars=no");
        }
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
        })
    </script> 
 <style>
     .iframe2 {
    position: fixed;
    display: none;
    width: 800px;
    background: #fff;
    height: 850px;
    top: 45%;
    left: 24%;
    margin: -250px -313px;
    border: 1px solid #2980B9;
    box-shadow: 0 0 3px #2980B9;
}
     .icon_slider
     {
         width:100%;
     }
     .ne {
    position: absolute;
  bottom: 36%;
  right: 4px;
  background: url(images/nxt_hover.png) no-repeat center;
  height: 30px;
  width: 20px;
   cursor:pointer;

}

a.text_team_bold_link:hover 
  {
      color:#138eb7 !important;
  }
.image h4:hover {

color:#138eb7 !important;
}
.pr 
{
    height: 30px;
  width: 20px;
    position: absolute;
    bottom: 36%;
    cursor:pointer;
    left: 4px;
    background:url(images/prv.png) no-repeat center;
}
  .slides2 li
 {
   display: none;
    float: left;
    margin: 0;
    padding: 0;
    width: 20%;
    text-align: center;
    border-right: 1px solid #eee;
        border-left: 1px solid #eee;
 }
 .slides2
 {
     list-style:none;
     margin:0;
     padding:0;
 }
 
 .firstTitle 
 {
     color: #fff;
    font-family: "edo";
    font-size: 54px;
    letter-spacing: 0;
   
     
     }
     
     .secTitle 
 {
     color: #fff;
    font-family: "edo";
    font-size: 40px;
    letter-spacing: 0;
  
     
     }
 .text1
 {
    bottom: 153px;
    left: 50px;
    position: absolute;
 }
  .text2
 {
    bottom: 145px;
    left: 35px;
    position: absolute;
 }
 .thirdH2
 {
    color: #fff;
    font-family: "edo";
    font-size: 40px;
    letter-spacing: 0;
    margin-left: -16px !important;

     }
.main_slider .slides > li .text1 frstH2 {
    color: #fff;
    font-size: 25px;
    margin-top: 10px;
}
 </style>

</head>
<body>

    <form name="form1" method="post" id="form1">
<!-- <div>
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUKLTI2NTc4MzIwMw9kFgICBA9kFgpmD2QWDmYPDxYCHghJbWFnZVVybAUTaW1hZ2VzL25vX2ltYWdlLmpwZ2RkAgEPDxYCHwAFE2ltYWdlcy9ub19pbWFnZS5qcGdkZAICDw8WAh4EVGV4dAUOSGltYW5zaGkgR3VwdGFkZAIDDw8WAh8BBQdQcmVzZW50ZGQCBA8PFgIfAWVkZAIFDw8WAh8BBQ5Xcml0ZSBhIHN0YXR1c2RkAgYPFgIeCWlubmVyaHRtbGVkAgEPDxYCHwEFAygwKWRkAgIPDxYCHwEFAygwKWRkAgMPDxYCHwEFAygwKWRkAgUPFgIeB1Zpc2libGVoFgICAQ8WAh8DaBYCAgEPDxYCHwFlZGRkyxWqeArwv6Y5haCG+GFYodnjLr+k7P1rYx38NP6j2b0=" />
</div>

<div>

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="3C453806" />
</div>  -->
    <div class="container">
        <div class="row">
                
<link rel="stylesheet" type="text/css" href="vendor/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="vendor/css/font-awesome.css">

<link href="vendor/css/colorbox.css" rel="stylesheet" type="text/css" />
<script src="jquery/jquery-1.11.3.min.js"></script>
<script src="jquery/ui/1.11.4/jquery-ui.js"></script>
<script src="vendor/js/kmp.js"></script>
<script type="text/javascript" src="vendor/js/j1.js"></script>
<style type="text/css">
    .web_dialog
    {
        display: block;
        position: fixed;
        width: 380px;
        height: 219px;
        top: 50%;
        left: 50%;
        margin-left: -190px;
        margin-top: -130px;
        background-color: #ffffff; /*border: 1px solid #5bc0de;
        padding: 0px;*/
        z-index: 102;
        font-family: Arial, Verdana, Helvetica, sans-serif;
        font-size: 10pt;
    }
    .web_dialog_title
    {
        border-bottom: solid 2px #337ab7;
        padding: 4px;
        color: White;
        font-weight: normal;
        font-family: Arial, Verdana, Helvetica, sans-serif;
        font-size: 17px;
    }
</style>
<style type="text/css">
    .ui-helper-hidden-accessible
    {
        display: none;
        visibility: hidden;
    }
    .ui-autocomplete
    {
        list-style: none;
        margin: 0;
        z-index: 9999 !important;
        padding: 0;
        background: #fafafa !important;
        width: 420px;
        max-height: 400px;
        overflow: auto;
        border: 1px solid #ddd;
    }
    .ui-autocomplete li
    {
        list-style: none;
        margin: 0;
        cursor: pointer;
        padding: 5px !important;
        border-bottom: 1px solid #ddd;
    }
    .ui-autocomplete li:hover
    {
        background: #f4f4f4 !important;
    }
    .ui-autocomplete li a
    {
        font-family: Verdana;
        color: #900;
    }
    .ui-autocomplete li:hover a
    {
        color: green;
        font-weight: bold;
    }
    .ui-corner-all
    {
        color: #337ab7;
    }
</style>

<script type='text/javascript'>
    $(document).ready(function () {
        var value = $('#header1_lbl_atdstatus').text();
        var myID = $('.right_bar .user .user_image img').attr('id');

        if (value == 'Absent') {
            $("#divPic").addClass("user_image user_image");
            //$("img#header1_img_user").addClass("redclr");
            //            $("img#header1_img_user").addClass("redclr");
            //            $("img#ctl00_header1_img_user").addClass("redclr");
        }

        else {

            $("#divPic").addClass("user_image user_imagePresent");
            //$("img#header1_img_user").addClass("grnclr");
            //$("img#ctl00_header1_img_user").addClass("grnclr");


        }

    });
</script> 
<?php 
include('include/navbar.php');
?>
<div style='display: none'>
    <div id='inline_DecinedForm' class="web_dialog">
        <table width="100%" cellpadding="6" cellspacing="6" border="0" style="padding-left: 30px;">
            <tr>
                <td class="web_dialog_title" colspan="2" style="text-align: center; background-color: #337ab7;">
                    Write a status
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    &nbsp;
                </td>
            </tr>
            <tr>
                <td style="border: none; text-align: center;" colspan="2" valign="top">
                    <div style="text-align: center;">
                        <small>
                            <label id="lblErrorMsg" style="color: Red;">
                            </label>
                        </small>
                    </div>
                    <textarea name="header1$txtTagLine" id="header1_txtTagLine" cols="5" rows="5" style="width: 98%"></textarea>
                    <div id="textCounter" style="font-family: Arial, Verdana, Helvetica, sans-serif;
                        font-size: 10pt; color: Red;">
                        60 Characters limit</div>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    &nbsp;
                </td>
            </tr>
        </table>
        <div class="control-group" align="center">
            <button type="button" class="btn btn-info" id="btnsubmit" style="background-color: #337ab7;
                margin-top: -17px;">
                Submit</button>
            <button type="button" class="btn btn-default" id="btnClose" style="margin-top: -17px;"
                onclick="boxCloseColor();">
                Close</button>
        </div>
    </div>
    <input type="hidden" name="header1$hdtag" id="header1_hdtag" />
</div>
<script language="javascript" type="text/javascript">
    function boxCloseColor() {
        //        var hdtag = $("#header1_hdtag").val();
        //        if (hdtag != "") {
        //            $("#header1_txtTagLine").val(hdtag);
        //        }
        //        else {
        //            $("#header1_txtTagLine").val("");
        //        }
        //        $("#textCounter").html("60 Characters limit");
        //        $("#lblErrorMsg").text("");
        $.colorbox.close();
    }
    $(document).ready(function () {
        $('#header1_txtTagLine').on('input propertychange', function () {
            CharLimit(this, 60);
        });

        $("#header1_txtTagLine").keypress(function (e) {
            $("#lblErrorMsg").text("");

        });
    });

    function CharLimit(input, maxChar) {
        var len = $(input).val().length;
        $('#textCounter').text(maxChar - len + ' characters remaining');

        if (len > maxChar) {
            $(input).val($(input).val().substring(0, maxChar));
            $('#textCounter').text(0 + ' characters remaining');
        }
    }
    function GetTagVal(id) {
        var strval = id.innerHTML;
        //$("#header1_txtTagLine").val("");
        if (strval == "Write a status") {
            $("#header1_txtTagLine").val("");
        }
        else {
            var hdtag = $("#header1_hdtag").val();
            if (hdtag != "") {
                $("#header1_txtTagLine").val(hdtag);
            }
            else {
                $("#header1_txtTagLine").val("");
            }
        }
        CharLimit($('#header1_txtTagLine'), 60);
    }
</script>
<script src="Scripts/jquery.colorbox.js" type="text/javascript"></script>

            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <div class="main">
                    <div class="main_slider">
                        <section class="slider">
          <div class="flexslider">
            <ul class="slides">              
              <li><a href="https://kmp.digispice.com/videos/webinar_6th_June_2020.mp4" target="_blank"><img alt="OneDiGiSPICE" src="images/digispice-KMP-Banner04_6th_June_2020.jpg"/></a></li>
              <li><img alt="DiGiSPICE" src="images/digispice-KMP-Banner02.jpg" /></li>
              <li><img alt="DiGiSPICE" src="images/digispice-KMP-Banner03.jpg" /></li>
              <li><img alt="DiGiSPICE" src="images/digispice-KMP-Banner01.jpg" /></li> 
            </ul>
          </div>
        </section>
        </div>
                    </div>
                    <div class="main_category">
                        <div class="main_category_tabs">
                            <div class="panel panel-primary">
                            <a href="#">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-5">
                                            <img src="images/icon_pr.png">
                                        </div>
                                        <div class="col-xs-7 text-right">
                                            <h3>
                                                Purchase Request</h3>
                                        </div>
                                    </div>
                                </div>
                                
                                    <div class="panel-footer" style="color:#8058bd;">
                                        <span class="pull-left">View Details</span>&nbsp;<span id="lbl_prcnt">(0)</span> <span class="pull-right"></span>
                                        <div class="clearfix">
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="main_category_tabs">
                            <div class="panel panel-green">
                                <a href="#">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-5">
                                            <img src="images/icon_travel_desk.png">
                                        </div>
                                        <div class="col-xs-7 text-right">
                                            <h3 style="margin-left:6px;">
                                                Travel Desk</h3>
                                        </div>
                                    </div>
                                </div>
                                    <div class="panel-footer">
                                        <span class="pull-left">View Details</span>&nbsp;<span id="lbl_tcnt">(0)</span> <span class="pull-right"></span>
                                        <div class="clearfix">
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="main_category_tabs">
                            <div class="panel panel-yellow">
                            
                                <a href="#">
                                
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-5">
                                            <img src="images/icon_leave_services.png">
                                        </div>
                                        <div class="col-xs-7 text-right">
                                            <h3 style="padding-top:15px;margin-left:7px;">
                                                Leave</h3>
                                        </div>
                                    </div>
                                </div>
                                    <div class="panel-footer">
                                        <span class="pull-left">View Details</span>&nbsp;<span id="lbl_lcnt">(0)</span> <span class="pull-right"></span>
                                        <div class="clearfix">
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        
                         <div class="main_category_tabs">
                            <div class="panel panel-primary">
                                <a href="#">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-5">
                                            <img src="images/icon_fcr.png">
                                        </div>
                                        <div class="col-xs-7 text-right">
                                            <h3 style="padding-top:15px;margin-left:7px;">
                                                FCR</h3>
                                        </div>
                                    </div>
                                </div>
                                    <div class="panel-footer">
                                        <span class="pull-left">View Details</span> <span class="pull-right"></span>
                                        <div class="clearfix">
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        
                    </div> 
                   <div class="icon_slider">
                        <ul class="slides2">
                                <li>
                                    <div class="box">
                                        <a href="#">
                                            <div class="image">
                                                <img src="images/tts.png"></div>
                                            <h4>
                                                Managed Service Helpdesk
                                            </h4>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="box">
                                        <a href="#">
                                            <div class="image">
                                                <img src="images/icon_media_kit.png"></div>
                                            <h4>
                                                Media Kit
                                            </h4>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="box">
                                        <a href="#">
                                            <div class="image">
                                                <img src="images/icon_dms.png"></div>
                                            <h4>
                                                DMS
                                            </h4>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="box">
                                        <a href="#">
                                            <div class="image">
                                                <img src="images/icon3.png"></div>
                                            <h4>
                                                FCR</h4>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="box">
                                        <a href="#">
                                            <div class="image">
                                                <img src="images/icon_ithelpdesk.png"></div>
                                            <h4>
                                                IT Helpdesk</h4>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="box">
                                        <a href="#">
                                            <div class="image">
                                                <img src="images/icon4.png"></div>
                                            <h4>
                                                Finance Helpdesk</h4>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="box">
                                        <a href="#">
                                            <div class="image">
                                                <img src="images/icon5.png"></div>
                                            <h4>
                                                HR & Admin Helpdesk
                                            </h4>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="box">
                                        <a href="#">
                                            <div class="image">
                                                <img src="images/icon_empengagement.png"></div>
                                            <h4>
                                                New into Spice Family</h4>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="box">
                                        <a href="#">
                                            <div class="image">
                                                <img src="images/icon_new2.png"></div>
                                            <h4>
                                                Progressum</h4>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="box">
                                        <a href="#">
                                            <div class="image">
                                                <img src="images/icon_empprofile.png"></div>
                                            <h4>
                                                Manage Profile</h4>
                                        </a>
                                    </div>
                                </li> 
                                <li>
                                    <div class="box">
                                        <a href="#">
                                            <div class="image">
                                                <img src="images/icon_emp_engagement.png"></div>
                                            <h4>
                                                Employee Engagement</h4>
                                        </a>
                                    </div>
                                </li> 
                                <li>
                                    <div class="box">
                                        <a href="#">
                                            <div class="image">
                                                <img src="images/icon_wall_fame.png"></div>
                                            <h4>
                                                Wall of Fame</h4>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                            <div class="ne">
                                
                            </div>
                            <div class="pr"></div>
                    </div>  
                </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="right_bar">
                    

                    <div id="pval" style="display:none">1</div>
                                     
                        <div id="calendar"></div>
                    <div class="side_block">
                
                    <h3>
                            Productivity Tools
                        </h3>
                        <div class="community">
                            <ul class="producttool">
                                <li><a href="https://mail.google.com" target="_blank">
                                    <img src="images/gmail2.png" />
                                Spice Mail</a></li>
                                <li><a href="https://drive.google.com" target="_blank">
                                    <img src="images/drive.png" />
                                Drive</a></li>
                                <li><a href="https://docs.google.com" target="_blank">
                                    <img src="images/docs.png" />
                                Docs</a></li>
                                <li>
                                                                
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
  
  <div style="height:50px">
     <div class="footer_fix">Copyright &copy;  2018 DigiSpice.</div>
</div>
</div>

    </form>
      
    
    <script src="js/bootstrap.js"></script>
    <!-- FlexSlider -->
    <script defer src="js/jquery.flexslider.js"></script>
    <script type="text/javascript">
        $(function () {
          //  SyntaxHighlighter.all();
        });
        $(window).load(function () {
            $('.flexslider').flexslider({
                animation: "slide",
                start: function (slider) {
                    $('body').removeClass('loading');
                }
            });
        });
    </script>
	
      <script type="text/javascript" src="vendor/cal2/js/jquery.eventCalendar.js"></script>
       <script>
           $('#calendar').eventCalendar({

               eventsjson: '//kmp.digispice.com/api/eventsnew.aspx?year=2020',
              jsonDateFormat: 'human',
              cacheJson: false
           });
       </script>
</body>
</html>
