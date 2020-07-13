<?php
// print_r($_COOKIE);
//include('validate.php');
if(!isset($_COOKIE["type"])&& !isset($_COOKIE["user"]))
{
	header("Location:login2.php");
}
	 
if(($_COOKIE['type']=="admin")||($_COOKIE['type']=="hr")||($_COOKIE['type']=="hod"))
{	
?>

 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
<style type="text/css">
.form_table td {
    padding: 2px 173px;
}
</style>

    <title>
	Knowledge Management Portal
</title><link href="vendor/css/style.css" rel="stylesheet" type="text/css" /><link rel="stylesheet" type="text/css" href="vendor/css/bootstrap.css" /><link rel="stylesheet" type="text/css" href="vendor/css/font-awesome.css" />
<script src="jquery/jquery-1.11.3.min.js"></script>
<script src="jquery/ui/1.11.4/jquery-ui.js"></script> 
 <script src="vendor/js/kmp.js"></script>  
<script type="text/javascript" src="vendor/js/j1.js"></script>
<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/redmond/jquery-ui.css" />
<style type="text/css">
    .web_dialog
    {
        display: block;
        position: fixed;
        width: 380px;
        height: 210px;
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
    .right_bar .user .user_image img
    {
        border-radius: 28px !important;
        height: 55px !important;
        margin: 21px 0px 0 0 !important;
        position: relative !important;
        width: 58px !important;
    }
    
    
    .right_bar .user .user_image:after
    {
        content: '';
        width: 23px;
        height: 23px !important;
        background: url();
        background-size: 80% !important;
        position: absolute;
        bottom: 5px;
        right: 20px;
        color: #D8D4D8;
        font-size: 24px;
    }
    .right_bar .user .user_image
    {
        position: relative;
    }
</style>

<script type='text/javascript'>
    $(document).ready(function () {
        var value = $('#header_lbl_atdstatus').text();
        var myID = $('.right_bar .user .user_image img').attr('id');
        if (value == 'Absent') {
            $("#divPic").addClass("user_image user_imageSmall");
        }
        else {
            $("#divPic").addClass("user_image user_imagePresentSmall");

        }

    });
</script>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script>
   function REG_FORM()                                    
 { 
  //  var id = document.forms["RegForm"]["id"]; 
    var event1 = document.forms["RegForm"]["event"]; 
    var sub1 = document.forms["RegForm"]["sub"]; 	
    var comment1 = document.forms["RegForm"]["comment"];    
    var requirement1 = document.forms["RegForm"]["requirement"];  
    var terms1 =  document.forms["RegForm"]["terms"];  
    var event_date1 = document.forms["RegForm"]["event_date"];  
    var upload = document.forms["RegForm"]["upload"];  
  
    if (event1.value == "")                                  
    { 
        window.alert("Please enter your event title."); 
        event1.focus(); 
        return false; 
    }
	
	if(event1.value.length < 10)
	{
		window.alert("event title must be atleast 10 characters long");
		event1.focus();
		return false;
	}
	
	if (sub1.value == "")                                  
    { 
        window.alert("Please enter your sub title."); 
        sub1.focus(); 
        return false; 
    } 
	if(sub1.value.length < 10)
	{
	   window.alert("sub title must be atleast 10 characters long");
        sub1.focus();
        return false;		
	}
	
   if(comment1.value == "")
   {
        window.alert("Please enter your comment."); 
        comment1.focus(); 
        return false; 
   }
   
   if(comment1.value.length < 6)
	{
	   window.alert("comment must be atleast 6 characters long");
        comment1.focus();
        return false;		
	}
    
   if (requirement1.value == "")                                   
    { 
        window.alert("Please enter your requirement."); 
        requirement1.focus(); 
       return false; 
    }
   
   if (requirement1.value.length < 10)                                   
    { 
        window.alert("requirement must be atleast 10 characters long."); 
        requirement1.focus(); 
       return false; 
    }
   
   if (terms1.value == "")                                   
    { 
        window.alert("Please enter your terms&condition."); 
        terms1.focus(); 
       return false; 
   }
   
   if (terms1.value.length < 10)                                   
    { 
        window.alert("terms &condition must be 10 charactes long."); 
        terms1.focus(); 
       return false; 
    }
   
   if (event_date1.value == "")                                   
    { 
        window.alert("Please enter your event date."); 
        event_date1.focus(); 
       return false; 
   }
 	
   return true;
 }
  
  </script>
</head>
<body>
<?php
// $_COOKIE["page"]="editevent";
include('include/navbar.php');
ini_set('display_error', 'All');
  
  include('config/require.php');
  
  if(isset($_GET['id'])){
   $id = $_GET['id'];

      
   $sql= "select * from create_event where id=$id" ;
   $result= mysqli_query($conn,$sql);
   $row=mysqli_fetch_assoc($result);
   
  }
  ?>
		
    <form name="RegForm" action="update_event.php" onsubmit="return REG_FORM()" method="post" enctype="multipart/form-data">
	<div>
	<div class="main" style="width:98%; margin-left:16px;">
		
         
		 
            <div class="main">
			<div class="top_bar">
			                      <h2>
                                        EDIT EVENT FORM</h2>
                                </div>      




 <table cellpadding="2" cellspacing="2" class="form_table" width="100%">                                   
                        <tr height="10"></tr>
                        <tr>
                            <td align="left" width="30%">
                                <span class="text_big_team">Event Name</span>
                            </td>
                            <td align="left">
                                <input value="<?php echo $row['event_title'] ?>" name="event" type="text" class="form-control" id="event" placeholder="enter event title" style="width:199px;" />
                            </td>                            
                        </tr>
						<tr>
                            <td align="left" width="30%">
                                <span class="text_big_team">Sub Title</span>
                            </td>
                            <td align="left">
                                <input value="<?php echo $row['sub_title'] ?>" name="sub" type="text" class="form-control" id="sub" placeholder="enter sub title" style="width:199px;" />
                            </td>                            
                        </tr> 
<tr>
                            <td align="left" width="30%">
                                <span class="text_big_team">Comment</span>
                            </td>
                            <td align="left">
                                <input value="<?php echo $row['comment'] ?>" name="comment" type="text" class="form-control" id="comment" placeholder="enter comment" style="width:199px;" />
                            </td>                            
                        </tr>
<tr>
                            <td align="left" width="30%">
                                <span class="text_big_team">Requirements</span>
                            </td>
                            <td align="left">
                                <textarea name="requirement" rows="6" type="text" class="form-control" id="requirement" placeholder="enter requirement" style="width:199px;" /><?php echo $row['requirements'] ?></textarea>
                            </td>                            
                        </tr>
<tr>
                            <td align="left" width="30%">
                                <span class="text_big_team">Terms&Condition</span>
                            </td>
                            <td align="left">
                                <textarea name="terms" rows="6" type="text" class="form-control" id="terms" placeholder="enter sub title" style="width:199px;" /><?php echo $row['terms'] ?></textarea>
                            </td>                            
                        </tr>
<tr>
                            <td align="left" width="30%">
                                <span class="text_big_team">Event Date</span>
                            </td>
                            <td align="left">
                                <input value="<?php echo $row['event_date'] ?>" type="date" id="event_date" placeholder="Enter Event Date" name="event_date" class="form-control" style="width:199px;" />
                            </td>                            
                        </tr>	


<tr>
                            <td align="left" width="30%">
                                <span class="text_big_team">Event Image</span>
                            </td>
                            <td align="left">
							<img src="uploaded/<?php echo $row['image']; ?>" style="width:50px;height:50px"><?php echo $row['image']; ?>
                                <input type="file" id="upload" placeholder="Enter image" class="form-control" name="upload" style="width:199px;" />
                            </td>                            
                        </tr>			
                        <input type='hidden' name='id' value= "<?php echo $row['id'] ?>"> 


<tr>
                            <td></td>
                            <td align="left">
                               <button type="submit" id="update" name="update" class="btn btn-primary">Send Now</button>
                            </td>
                        </tr>
					
                   <tr>
                            <td colspan="2" align="center">
                                <span id="lb12" class="text_big_team">Fields marked <font color='red'>*</font> are required</span>
                            </td>  
                        </tr>      

                        <tr>
                                <td colspan="2" class="text" 
                                    width="15" height="5">
                                </td>
                            </tr>
                            <tr>
                                <td class="text_footer" align="center"> 
                                     <div class="footer_fix">Copyright &copy;  2020 Spice Digital Limited.</div>


</td>
                             
                            </tr>
                    </table>
                    </div>
                    </div>
                    </div>
                 <!--   </div>
                    
    </div>        -->
</form>
</body>
</html>
<?php
}
else
{
	header("Location:login2.php");
}
?>

























								
           <!--                       <fieldset>
                                    <input value="<?php// echo $row['event_title'] ?>" type="text" id="event" placeholder="Enter event title" name="event" class="form-control" >
                                 </fieldset>
                                </div>
                                <div class="form-group">
                                  <fieldset>
                                    <input value="<?php// echo $row['sub_title'] ?>" type="text" id="sub" placeholder="Enter sub title" name="sub" class="form-control" >
                                  </fieldset>
                                </div>
                                 <div class="form-group">
                                  <fieldset>
                                   <input value="<?php// echo $row['comment'] ?>" type="text" id="comment" placeholder="Enter comment" class="form-control" name="comment" >
                                  </fieldset>
                                </div>
                                <div class="form-group">
                                  <fieldset>
                                    <textarea  name="requirement" rows="6" class="form-control" id="requirement" placeholder="Enter Requirements..." > <?php// echo $row['requirements'] ?></textarea>
                                  </fieldset>
                                </div>
								<div class="form-group">
                                  <fieldset>
                                     <textarea  name="terms" rows="6" class="form-control" id="terms" placeholder="Enter terms&condition" > <?php// echo $row['terms'] ?></textarea>
                                  </fieldset>
                                </div>
								<div class="form-group">
                                  <fieldset>
                              <input value="<?php// echo $row['event_date'] ?>" type="date" id="event_date" placeholder="Enter Event Date" name="event_date" class="form-control" required>
                                  </fieldset>
                                </div>
                                 <div class="form-group">
                                  <fieldset>
								  <img src="uploaded/<?php// echo $row['image']; ?>" style="width:50px;height:50px"><?php// echo $row['image']; ?>
                                    <input type="file" id="upload" placeholder="Enter image" name="upload">
                                  </fieldset>
                                </div>
								<input type='hidden' name='id' value= "<?php// echo $row['id'] ?>">
                                <div class="form-group">
                                  <fieldset>
                                    <button type="submit" id="update" name="update" class="btn btn-primary">Send Now</button>
                                  </fieldset>                                                                                                                                                                                                                                                                                                         
                                </div>
                            </div>
                        </form>
						</div>
						</div>
						</div>
						</div>
						</div>
						
                   <!-- Bootstrap core JavaScript-->
 <!-- <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
<!--  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
 <!-- <script src="js/sb-admin-2.min.js"></script>
  
</body>
</html>  -->