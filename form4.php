<?php
//print_r($_COOKIE);
//include('validate.php');
if(!isset($_COOKIE["type"])&& !isset($_COOKIE["user"]))
{
	header("Location:login2.php");
}

?>

<!--<!DOCTYPE html>
<html lang="en">
<head>
<title>ADD EMPLOYEE FORM</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
<!--  <link href="css/sb-admin-2.min.css" rel="stylesheet">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  -->  
<!--  <script>
  function REG_FORM()                                    
 { 
  //  var id = document.forms["RegForm"]["id"]; 
    var fname1 = document.forms["RegForm"]["fname"]; 
    var lname1 = document.forms["RegForm"]["lname"]; 	
    var department = document.forms["RegForm"]["Dept"];    
    var DepartmentLocation = document.forms["RegForm"]["DeptLoc"];  
    var contact =  document.forms["RegForm"]["Contact"];  
    var Email = document.forms["RegForm"]["email"];  
    var AccountManager = document.forms["RegForm"]["manager"];  
	var Grade = document.forms["RegForm"]["grade"];  
    var payscale = document.forms["RegForm"]["PayScale"];  
	var Salary = document.forms["RegForm"]["tds"];  
    var MealFacility = document.forms["RegForm"]["mealfacility"];  
	var CabFacility = document.forms["RegForm"]["cabfacility"];   
	var City = document.forms["RegForm"]["city"];  
    var Pincode = document.forms["RegForm"]["pincode"];  
	var status = document.forms["RegForm"]["status"];
	var file = document.forms["RegForm"]["upload[]"];
   var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
   
   
    if (fname1.value == "")                                  
    { 
        window.alert("Please enter your first name."); 
        fname1.focus(); 
        return false; 
    } 
	
	if(!isNaN(fname1.value))
    {
		
    window.alert("Please Enter Only Characters");
    fname1.focus();
    return false;
    }
	
	if(fname1.value.length < 3 || fname1.value.length >15)
	{ 

        window.alert("Please enter atleast 3 characters."); 
        fname1.focus(); 
        return false; 
    } 
	
	if (lname1.value == "")                                  
    { 

        window.alert("Please enter last name."); 
        lname1.focus(); 
        return false; 
    } 
	
	if(!isNaN(lname1.value))
    {
		
       window.alert("Please Enter Only Characters");
       lname1.focus();
       return false;
    }
   
   if(lname1.value.length < 4 || lname1.value.length >15)
	{ 

        window.alert("Please enter atleast 3 characters."); 
        lname1.focus(); 
        return false; 
    } 




  if(department.value == "")
   {
	   
   window.alert("Please enter your valid dept."); 
        department.focus(); 
       return false; 
  }
    
   if (DepartmentLocation.value == "")                                   
    { 
        window.alert("Please enter your valid dept location."); 
        DepartmentLocation.focus(); 
       return false; 
   }
   if (contact.value == "")                                   
    { 
        window.alert("Please enter your contact."); 
        contact.focus(); 
       return false; 
   }
   if(contact.value.length!=10)
   {
	   
        window.alert("Please enter valid length."); 
        contact.focus(); 
       return false; 
   }
   if (isNaN(contact.value))
   {
        window.alert("Please enter only numbers."); 
        contact.focus(); 
       return false; 
   }
   if (Email.value == "")                                   
    { 
        window.alert("Please enter your valid email."); 
        Email.focus(); 
       return false; 
   }
   // if (Email.value.indexOf("@", 0) < 0)                 
  // { 
       // window.alert("Please enter a valid e-mail address."); 
       // Email.focus(); 
     // return false; 
   // } 
   
   // if (Email.value.indexOf(".", 0) < 0)                 
    // { 
       // window.alert("Please enter a valid e-mail address."); 
        // Email.focus(); 
        // return false; 
   // } 

if(!mailformat.test(Email.value))
	{
	window.alert("please provide a valid email address");
	Email.focus();
	return false;
	}   
	   
   if (AccountManager.value == "")                                   
    { 
        window.alert("Please enter your account manager."); 
        AccountManager.focus(); 
       return false; 
   }
      
   if (Grade.value == "")                                   
    { 
        window.alert("Please enter your grade."); 
        Grade.focus(); 
       return false; 
   }
   
	   
   if (payscale.value == "")                                   
    { 
        window.alert("Please enter your payScale."); 
        payscale.focus(); 
       return false; 
   }
   
   if (Salary.value == "")                                   
    { 
        window.alert("Please enter your Salary."); 
        Salary.focus(); 
       return false; 
   }
   if(isNaN(Salary.value))                                   
    { 
        window.alert("Please enter only numbers."); 
        Salary.focus(); 
       return false; 
   }

   
   if (MealFacility.value == "")                                    
    { 
	var formValid=false;
	var i=0;
	while(!formValid && i< MealFacility.length)
	{
	if (MealFacility[i].checked)formValid=true;
	i++;
	}
        if(!formValid)alert("please enter value of meal facility!");
       return formValid;			
   }
   
   if (CabFacility.value == "")                                  
    { 
	var formValid=false;
	var i=0;
	while(!formValid && i< CabFacility.length)
	{
	if (CabFacility[i].checked)formValid=true;
	i++;
	}
        if(!formValid)alert("please enter value of cab facility!");
       return formValid;		
   	  
   }

 if (City.value == "")                                   
    { 
        window.alert("Please enter your City."); 
        City.focus(); 
       return false; 
   }
   
   if(!isNaN(City.value))
     {
     window.alert("Please Enter Only Characters");
     City.focus();
     return false;
    }
	
    if (Pincode.value == "")                                   
    { 
        window.alert("Please enter your PinCode."); 
        Pincode.focus(); 
       return false; 
   }
   
   if(isNaN(Pincode.value))                                   
    { 
        window.alert("Please entr only number.."); 
        Pincode.focus(); 
       return false; 
   }
   if (Pincode.value.length < 6)                                   
    { 
        window.alert("Pincode must be valid number"); 
        Pincode.focus(); 
       return false; 
    }
	
    for(var i=0; i<file.length;)
   {
	   if(file[0].value == "")
	   {
	//	   alert(file[i].value);
		   window.alert("please upload aadhar image");
		   file.value == "";
		   return false;
	   }
	   i++;
	   if(file[1].value == "")
		   {
	//	   alert(file[i].value);
		   window.alert("please upload pancard image");
		   file.value == "";
		   return false;
	   }
	   i++;
	   if(file[2].value == "")
	   {
	//	   alert(file[i].value);
		   window.alert("please upload 10th marksheet image");
		   file.value == "";
		   return false;
	   }
	   i++;
	   if(file[3].value == "")
 	   {
	//	   alert(file[i].value);
		   window.alert("please upload 12th marksheet image");
		   file.value == "";
		   return false;
	   }
   }
   
   if (status.value == "")                                   
    { 
        window.alert("Please enter your status."); 
        status.focus(); 
       return false; 
    }
    return true; 
  }
  </script>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script>
   $(document).ready(function(){  
   // $('#Contact').blur(function(){
	 
	  
     // var contact = $(this).val();
	 // alert(contact); 		
		
     // $.ajax({
      // url:'check2.php',
      // method:"POST",
      // data:{contact:contact},
      // success:function(data)
      // {
       // if(data != '0')
       // {  
          // alert('h1');
          // // $('#contact span').removeClass();
		  // // $('#contact span').addClass();
          // $('#contact').html('<span class="text-danger">already exist</span>');
	
	     // // $('#submit').removeAttr();
		// // $('#submit').addAttr();
        // $('#submit').attr("disabled", true);
       // }    
	   // else
	   // {
		   // alert('h3');
		   // // $('#contact span').removeClass();
		 // // $('#contact span').addClass();
		 // $('#contact').html('<span class="text-success">available</span>');
		 
		 // // $('#submit').removeAttr();
		// // $('#submit').addAttr();
        // $('#submit').attr("disabled", false);  
	   // }
      // }
     // })		 
   // });
   
   
   $('#pwd').blur(function(){
	  
     var pwd = $(this).val();
//	 alert(pwd);
	
     $.ajax({
      url:'check2.php',
      method:"POST",
      data:{pwd:pwd},
      success:function(data)
      {
       if(data != '0')
       {
	//	   alert('h1');
		   // $('#fname').removeClass('<span class="text-danger">already exist</span>');
		   // $(this).parent().addClass('<span class="text-danger">already exist</span>');
        $('#password').html('<span class="text-danger">create different password</span>');
        $('#submit').attr("disabled", true);
       }
       else
       {
	//	   alert('h3');
	//	   $('#fname').removeClass('<span class="text-danger">already exist</span>');
        $('#password').html('<span class="text-success">Available</span>');
        $('#submit').attr("disabled", false);
       }
      }
     })
   });
 });
  
 </script>
  </head>
  <body>
  
  <!-- Page Wrapper -->
 <!-- <div id="wrapper">

    <!-- Sidebar -->
<?php
// $_COOKIE["page"] = "form4";
  // include('include/navbar.php');
?>
<!--<div class="container-fluid">
 <div class="modal-fade" id="employeeform" tabindex="-1" role="dialog">
<div class="modal-dialog" role="document"> 
<div class="modal-content">	
	<div class="modal-header"> 
<h5 class="modal-title" id="exampleModalLabel">EmployeeForm</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>	
  <form name="RegForm" action="new2.php" onsubmit="return REG_FORM()" method="post" enctype="multipart/form-data">
<div class="modal-body">  
  
  <div class="form-group">
  <label>First Name</label>
  <input type="text" name="fname" id="fname" class="form-control" placeholder="enter first name" />
  </div>
  <div class="form-group">
  <label>Last Name</label>
  <input type="text" name="lname" class="form-control" placeholder="enter last name">
  </div>
  
  
  <div class="form-group">
  <label>Department</label>
 <!-- <input type="inpu" name="phone" class="form-control" placeholder="enter phone number">-->
<!-- <select name='Dept' class="form-control" placeholder="enter department type">
<option value >select</option>
<option >admin</option>
<option >account</option>
<option >finance</option>
<option >hr</option>
<option >technical</option>
</select>
  </div>
  
   <div class="form-group">
  <label>DepartmentLocation</label>
 <!-- <input type="inpu" name="phone" class="form-control" placeholder="enter phone number">-->
<!-- <select name='DeptLoc' class="form-control" placeholder="enter department location">
<option value >select</option>
<option >delhi</option>
<option >uttar pradesh</option>
<option >madhya pradesh</option>
<option >punjab</option>
<option >mumbai</option>
</select>
  </div>
  
  
 <div class="form-group">
  <label>Contact</label>
  <input type="text" name="Contact" id="Contact" maxlength='10' class="form-control" placeholder="enter contact">
  <span id="contact"></span>
  </div>
    
  <div class="form-group">
  <label>email</label>
  <input type="text" name="email" id="email" class="form-control" placeholder="enter email">
  <span id="availability"></span>
  </div>
  
  <div class="form-group">
  <label>Subject</label>
  <input type="text" name="subject" class="form-control" placeholder="enter subject">
  </div> 
  
  <div class="form-group">
  <label>Password</label>
  <input type="text" name="pwd" id="pwd" class="form-control" placeholder="enter password">
  <span id="password"></span>
  </div>
  
   <div class="form-group">
  <label>AccountManager</label>
 <!-- <input type="inpu" name="phone" class="form-control" placeholder="enter phone number">-->
<!-- <select name='manager' class="form-control" placeholder="enter Account Manager">
<option value >select</option>
<option >Himanshi gupta</option>
<option >Himanshu gupta</option>
<option >Anamika Parashar</option>
<option >Nandini patel</option>
<option >Rajni rajput</option>
</select>
  </div>
  
   <div class="form-group">
  <label>Grade</label>
 <!-- <input type="inpu" name="phone" class="form-control" placeholder="enter phone number">-->
<!-- <select name='grade' class="form-control" placeholder="enter grade">
<option value >select</option>
<option >A</option>
<option >B</option>
<option >C</option>
<option >D</option>
<option >E</option>
</select>
  </div>
  
  <div class="form-group">
  <label>PayScale</label>
 <!-- <input type="inpu" name="phone" class="form-control" placeholder="enter phone number">-->
<!-- <select name='PayScale' class="form-control" placeholder="enter payscale">
<option value >select</option>
<option >1000-10000</option>
<option >10000-50000</option>
<option >50000-100000</option>
<option >100000</option>
</select>
  </div>
  
  
  <div class="form-group">
  <label>Salary</label>
  <input type="text" name="tds" class="form-control" placeholder="enter salary">
  </div>
  
  <div class="form-group">
  <label>MealFacility</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <td><input type="radio" name="mealfacility" value="yes"/>yes</td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <td><input type="radio" name="mealfacility" value="no"/>no</td>
  </div>
  
  
   <div class="form-group">
  <label>CabFacility</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
 <td><input type="radio" name="cabfacility"  value="yes" />yes</td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <td><input type="radio" name="cabfacility" value="no" />no</td>
  </div>
  
  <div class="form-group">
  <label>City</label>
  <input type="text" name="city" class="form-control" placeholder="enter city">
  </div>
  
  <div class="form-group">
  <label>PinCode</label>
  <input type="text" name="pincode" class="form-control" placeholder="enter pincode">
  </div>
 
  <div class="form-group">
  <label>AadharNumber</label>
  <input type="file" name="upload[]" accept=".png,.jpg,.jpeg" class="form-control" placeholder="enter AadharNumber">
  </div>
  
  <div class="form-group">
  <label>PanNumber</label>
  <input type="file" name="upload[]" accept=".png,.jpg,.jpeg" class="form-control" placeholder="enter PanNumber">
  </div>
  
  <div class="form-group">
  <label>10thMarksheet</label>
  <input type="file" name="upload[]" accept=".png,.jpg,.jpeg"  class="form-control" placeholder="enter 10thMarksheet">
  </div>
  <br/>
  
  <div class="form-group">
  <label>12thMarksheet</label>
  <input type="file" name="upload[]" accept=".png,.jpg,.jpeg" class="form-control" placeholder="enter 12thMarksheet">
  </div>
   
  <div class="form-group">
  <label>Status</label>
 <!-- <input type="inpu" name="phone" class="form-control" placeholder="enter phone number">-->
<!-- <select name='status' class="form-control" placeholder="enter status">
<option value >select</option>
<option >active</option>
<option >update</option>
<option >pending</option>
</select>
  </div>
  
  </div>
 <!-- <div class="modal-footer">  -->
<!--  <a href="view.php"><button type="button" class="btn btn-secondary">close</button></a>&nbsp&nbsp
 <a href="view.php"><button type="submit" name="submit" id="submit" value="send" class="btn btn-primary">Save</button></a>&nbsp&nbsp
<!-- </div > -->
 <!-- </form>	
  </div>
  </div>
  </div> 
  </div>
  </div>
  
  <!-- Bootstrap core JavaScript-->
<!--  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
<!--  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
<!--  <script src="js/sb-admin-2.min.js"></script>
  
  </body>
  </html>  -->
  
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



   <!--      <div class="container">
        <div class="row"> -->
            
<!-- <link href="vendor/css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="vendor/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="vendor/css/font-awesome.css">
<link href="vendor/css/colorbox.css" rel="stylesheet" type="text/css" /> --> 
<script src="jquery/jquery-1.11.3.min.js"></script>
<script src="jquery/ui/1.11.4/jquery-ui.js"></script> 
 <script src="vendor/js/kmp.js"></script>  
<script type="text/javascript" src="vendor/js/j1.js"></script>
<!-- <script src="KmpMessageJs/jquery.colorbox.js"
    type="text/javascript"></script>  -->
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
    var fname1 = document.forms["RegForm"]["fname"]; 
    var lname1 = document.forms["RegForm"]["lname"]; 	
    var department = document.forms["RegForm"]["Dept"];    
    var DepartmentLocation = document.forms["RegForm"]["DeptLoc"];  
    var contact =  document.forms["RegForm"]["Contact"];  
	var Email = document.forms["RegForm"]["email"];
    var AccountManager = document.forms["RegForm"]["manager"];  
	var Grade = document.forms["RegForm"]["grade"];  
    var payscale = document.forms["RegForm"]["PayScale"];  
	var Salary = document.forms["RegForm"]["tds"];  
    var MealFacility = document.forms["RegForm"]["mealfacility"];  
	var CabFacility = document.forms["RegForm"]["cabfacility"];   
	var City = document.forms["RegForm"]["city"];  
    var Pincode = document.forms["RegForm"]["pincode"];  
	var status = document.forms["RegForm"]["status"];
	var file = document.forms["RegForm"]["upload[]"];
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
   
   
    if (fname1.value == "")                                  
    { 
         
        window.alert("Please enter your first name."); 
        fname1.focus(); 
        return false; 
    } 
	
	if(!isNaN(fname1.value))
    {
		
       window.alert("Please Enter Only Characters");
       fname1.focus();
       return false;
    }
	
	if(fname1.value.length < 3 || fname1.value.length >15)
	{ 

        window.alert("Please enter atleast 3 characters."); 
        fname1.focus(); 
        return false; 
    } 
	
	if (lname1.value == "")                                  
    { 

        window.alert("Please enter last name."); 
        lname1.focus(); 
        return false; 
    } 
	
	if(!isNaN(lname1.value))
    {
		
       window.alert("Please Enter Only Characters");
       lname1.focus();
       return false;
    }

   if(lname1.value.length < 4 || lname1.value.length >15)
	{ 

        window.alert("Please enter atleast 3 characters."); 
        lname1.focus(); 
        return false; 
    } 

  if(department.value == "")
   {
	   
   window.alert("Please enter your valid dept."); 
        department.focus(); 
       return false; 
  }
    
   if (DepartmentLocation.value == "")                                   
    { 
        window.alert("Please enter your valid dept location."); 
        DepartmentLocation.focus(); 
       return false; 
   }
   if (isNaN(contact.value))                                   
    { 
        window.alert("Please enter only numbers."); 
        contact.focus(); 
       return false; 
   }
   if(contact.value.length!=10)
   {
	   
        window.alert("Please enter valid length."); 
        contact.focus(); 
       return false; 
   }
   if((contact.value.charAt(0)!=9) && (contact.value.charAt(0)!=8) && (contact.value.charAt(0)!=7))
   {
	   window.alert("mobile number must be start with 9,8 and 7");
	   contact.focus();
	   return false;
   }
   
   if (Email.value == "")                                   
    { 
        window.alert("Please enter your email."); 
        Email.focus(); 
       return false; 
   }
       
	if(!mailformat.test(Email.value))
	{
	window.alert("please provide a valid email address");
	Email.focus();
	return false;
	}

      
   if (AccountManager.value == "")                                   
    { 
        window.alert("Please enter your account manager."); 
        AccountManager.focus(); 
       return false; 
   }
      
   if (Grade.value == "")                                   
    { 
        window.alert("Please enter your grade."); 
        Grade.focus(); 
       return false; 
   }
   
	   
   if (payscale.value == "")                                   
    { 
        window.alert("Please enter your payScale."); 
        payscale.focus(); 
       return false; 
   }
   
   if (Salary.value == "")                                   
    { 
        window.alert("Please enter your Salary."); 
        Salary.focus(); 
       return false; 
   }
   if(isNaN(Salary.value))                                   
    { 
        window.alert("Please enter only numbers."); 
        Salary.focus(); 
       return false; 
   }
   if(Salary.value < 1000)
   {
	   window.alert("salary must be greater than 1000");
	   Salary.focus();
	   return false;
   }

   
   if (MealFacility.value == "")                                    
    { 
	var formValid=false;
	var i=0;
	while(!formValid && i< MealFacility.length)
	{
	if (MealFacility[i].checked)formValid=true;
	i++;
	}
        if(!formValid)alert("please enter value of meal facility!");
       return formValid;			
   }
   
   if (CabFacility.value == "")                               
    { 
	var formValid=false;
	var i=0;
	while(!formValid && i< CabFacility.length)
	{
	if (CabFacility[i].checked)formValid=true;
	i++;
	}
        if(!formValid)alert("please enter value of cab facility!");
       return formValid;		
   	  
   }

 if (City.value == "")                                   
    { 
        window.alert("Please enter your City."); 
        City.focus(); 
       return false; 
   }
   
   if(!isNaN(City.value))
     {
     window.alert("Please Enter Only Characters");
     City.focus();
     return false;
    }
	
    if (Pincode.value == "")                                   
    { 
        window.alert("Please enter your PinCode."); 
        Pincode.focus(); 
       return false; 
   }
   
   if(isNaN(Pincode.value))                                   
    { 
        window.alert("Please enter only number.."); 
        Pincode.focus(); 
       return false; 
   }
   
   if (Pincode.value.length < 6)                                   
    { 
        window.alert("Pincode must be valid number"); 
        Pincode.focus(); 
       return false; 
    }
	
//   if(file.value == "")
//   {
   for(var i=0; i<file.length;)
   {
	   if(file[0].value == "")
	   {
	//	   alert(file[i].value);
		   window.alert("please upload aadhar image");
		   file.value == "";
		   return false;
	   }
	   i++;
	   if(file[1].value == "")
		   {
	//	   alert(file[i].value);
		   window.alert("please upload pancard image");
		   file.value == "";
		   return false;
	   }
	   i++;
	   if(file[2].value == "")
	   {
	//	   alert(file[i].value);
		   window.alert("please upload 10th marksheet image");
		   file.value == "";
		   return false;
	   }
	   i++;
	   if(file[3].value == "")
 	   {
	//	   alert(file[i].value);
		   window.alert("please upload 12th marksheet image");
		   file.value == "";
		   return false;
	   }
   }
// }
   
   if (status.value == "")                                   
    { 
        window.alert("Please enter your status."); 
        status.focus(); 
       return false; 
    }
	
    return true; 
  }
  </script>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script>
   $(document).ready(function(){  
   $('#pwd').blur(function(){
	  
     var pwd = $(this).val();
//	 alert(pwd);
	
     $.ajax({
      url:'check2.php',
      method:"POST",
      data:{pwd:pwd},
      success:function(data)
      {
       if(data != '0')
       {
		//   alert('h1');
		   // $('#fname').removeClass('<span class="text-danger">already exist</span>');
		   // $(this).parent().addClass('<span class="text-danger">already exist</span>');
        $('#password').html('<span class="text-danger">already exist create different  password</span>');
        $('#submit').attr("disabled", true);
       }
       else
       {
		//   alert('h3');
	//	   $('#fname').removeClass('<span class="text-danger">already exist</span>');
        $('#password').html('<span class="text-success">Available</span>');
        $('#submit').attr("disabled", false);
       }
      }
     })
   });
 });
  </script>
</head>
<body>
        <?php
		include('include/navbar.php');
		?>
<!--    <form name="form1" method="post" action="./VisitingCardRequest" onsubmit="javascript:return WebForm_OnSubmit();" id="form1"> -->
	<form name="RegForm" action="new2.php" onsubmit="return REG_FORM()" method="post" enctype="multipart/form-data">
	<div>
	<div class="main" style="width:98%; margin-left:16px;">
		
         
		 
            <div class="main">
            <div class="top_bar">
			                      <h2>
                                        Employee Registration Form</h2>
                                </div>
              
                   <table cellpadding="2" cellspacing="2" class="form_table" width="100%">                                   
                        <tr height="10"></tr>
                        <tr>
                            <td align="left" width="30%">
                                <span class="text_big_team">First Name</span>
                            </td>
                            <td align="left">
                                <input name="fname" type="text" class="form-control" placeholder="enter first name" style="width:199px;" />
                            </td>                            
                        </tr>
						<tr>
                            <td align="left" width="30%">
                                <span class="text_big_team">Last Name</span>
                            </td>
                            <td align="left">
                                <input name="lname" type="text" class="form-control" placeholder="enter last name" style="width:199px;" />
                            </td>                            
                        </tr>
						<tr>
                            <td align="left" width="30%">
                                <span class="text_big_team">Department</span>
                            </td>
                            <td align="left">
                                <select name="Dept" id="dept" class="btn btn-default dropdown-toggle" data-toggle="dropdown" style="width:200px;">
									<option value="">Select Department</option>
									<option value="admin">admin</option>
									<option value="account">account</option>
									<option value="finance">finance</option>
									<option value="hr">hr</option>
									<option value="technical">technical</option>
									<option value="sales">sales</option>
                              	</select>
                            </td>                            
                        </tr>
						<tr>
                            <td align="left" width="30%">
                                <span class="text_big_team">DepartmentLocation</span>
                            </td>
                            <td align="left">
                                <select name="DeptLoc" id="DeptLoc" class="btn btn-default dropdown-toggle" data-toggle="dropdown" style="width:200px;">
									<option value="">Select Department Location</option>
	<option value="Bangalore">Bangalore</option>
	<option value="Bangladesh">Bangladesh</option>
	<option value="Kolkata">Kolkata</option>
	<option value="punjab">punjab</option>
	<option value="Mohali">Mohali</option>
	<option value="Mumbai">Mumbai</option>
	<option value="Noida">Noida</option>
	<option value="delhi">delhi</option>
	<option value="uttar pradesh">uttar pradesh</option>
	<option value="madhya pradesh">madhya pradesh</option>
                              	</select>
                            </td>                               
                        </tr>
						<tr>
                            <td align="left" width="30%">
                                <span class="text_big_team">Contact</span>
                            </td>
                            <td align="left">
                                <input name="Contact" id="Contact" maxlength="10" type="text" class="form-control" placeholder="enter contact number" style="width:199px;" />
                            </td>                            
                        </tr>
						
                        <tr>
                            <td align="left">
                                <span class="text_big_team">Email</span>
                            </td>
                            <td align="left">
                                <input name="email" type="text" id="email" class="form-control" placeholder="enter email" style="width:199px;" />
								<span id="Email"></span>
                            </td>
                        </tr>
						
						<tr>
                            <td align="left">
                                <span class="text_big_team">Subject</span>
                            </td>
                            <td align="left">
                                <input name="subject" type="text" id="subject" class="form-control" placeholder="enter subject" style="width:199px;" />
                            </td>
                        </tr>    
						
                        <tr>
                            <td align="left">
                                <span class="text_big_team">Password</span>
                            </td>
                            <td align="left">
                                <input name="pwd" type="text" id="pwd" class="form-control" placeholder="enter password" style="width:199px;" />
                                <span id="password"></span>
                            </td>
                        </tr>
                       
                            <tr>
                            <td align="left" width="30%">
                                <span class="text_big_team">Account Manager</span>
                            </td>
                            <td align="left">
                                <select name="manager" id="manager" class="btn btn-default dropdown-toggle" data-toggle="dropdown" style="width:200px;">
									<option value="">Select</option>
	<option value="Himanshi Gupta">Himanshi Gupta</option>
	<option value="Himanshu Gupta">Himanshu Gupta</option>
	<option value="Anamika Parashar">Anamika Parashar</option>
	<option value="Nandini Patel">Nandini Patel</option>
	<option value="Rajni Rajput">Rajni Rajput</option>
	</select>
	</td>
	</tr>
	
                        <tr>
                            <td align="left" width="30%">
                                <span class="text_big_team">Grade</span>
                            </td>
                            <td align="left">
                                <select name="grade" id="grade" class="btn btn-default dropdown-toggle" data-toggle="dropdown" style="width:200px;">
									<option value="">Select</option>
	<option value="A">A</option>
	<option value="B">B</option>
	<option value="C">C</option>
	<option value="D">D</option>
	<option value="E">E</option>
	</select>
	</td>
    </tr>
						
                        <tr>
                            <td align="left" width="30%">
                                <span class="text_big_team">PayScale</span>
                            </td>
                            <td align="left">
                                <select name="PayScale" id="PayScale" class="btn btn-default dropdown-toggle" data-toggle="dropdown" style="width:200px;">
									<option value="">Select</option>
	<option >1000-10000</option>
<option >10000-50000</option>
<option >50000-100000</option>
<option >100000</option>
	</select>
	</td>
                        </tr>
						
                        <tr>
                            <td align="left">
                                <span class="text_big_team">Salary</span>
                            </td>
                            <td align="left">
                                <input name="tds" type="text" id="tds" class="form-control" placeholder="enter salary" style="width:199px;" />
                            </td>
                        </tr>
						
						<tr>
                            <td align="left">
                                <span class="text_big_team">Meal Facility</span>
                            </td>
                            <td align="left">
                                <input type="radio" name="mealfacility" id="mealfacility" value="yes"/>yes&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                <input type="radio" name="mealfacility" id="mealfacility" value="no"/>no
                            </td>
                        </tr>
						
						<tr>
                            <td align="left">
                                <span class="text_big_team">Cab Facility</span>
                            </td>
                            <td align="left">
                                <input type="radio" name="cabfacility" id="cabfacility"  value="yes" />yes&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                <input type="radio" name="cabfacility" id="cabfacility" value="no" />no
                            </td>
                        </tr>
						
						<tr>
                            <td align="left">
                                <span class="text_big_team">City</span>
                            </td>
                            <td align="left">
                                <input name="city" type="text" id="city" class="form-control" placeholder="enter city" style="width:199px;" />
                            </td>
                        </tr>
						
						<tr>
                            <td align="left">
                                <span class="text_big_team">Pincode</span>
                            </td>
                            <td align="left">
                                <input name="pincode" type="text" id="pincode" class="form-control" placeholder="enter pincode" style="width:199px;" />
                            </td>
                        </tr>
						
						<tr>
                            <td align="left">
                                <span class="text_big_team">Aadhar Number</span>
                            </td>
                            <td align="left">
                                <input type="file" name="upload[]" accept=".png,.jpg,.jpeg"  placeholder="enter AadharNumber">
                            </td>
                        </tr>
						
						<tr>
                            <td align="left">
                                <span class="text_big_team">Pan Number</span>
                            </td>
                            <td align="left">
                                <input type="file" name="upload[]" accept=".png,.jpg,.jpeg" placeholder="enter PanNumber">
                            </td>
                        </tr>
						
						<tr>
                            <td align="left">
                                <span class="text_big_team">10th Marksheet</span>
                            </td>
                            <td align="left">
                                <input type="file" name="upload[]" accept=".png,.jpg,.jpeg"  placeholder="enter 10th marksheet">
                            </td>
                        </tr>
						
						<tr>
                            <td align="left">
                                <span class="text_big_team">12th Marksheet</span>
                            </td>
                            <td align="left">
                                <input type="file" name="upload[]" accept=".png,.jpg,.jpeg"  placeholder="enter 10th marksheet">
                            </td>
                        </tr>
						
                        <tr>
                            <td align="left">
                                <span class="text_big_team">Status</span>
                            </td>
                            <td align="left">
                               <select name="status" id="status" class="btn btn-default dropdown-toggle" data-toggle="dropdown" style="width:200px;">
									<option value="">Select</option>
										<option >active</option>
									<option >update</option>
									<option >pending</option>
										</select>
                            </td>
                        </tr>
                        
                        
                        <tr>
                            <td></td>
                            <td align="left">
                                <a href="view.php"><button type="button" class="btn btn-secondary">close</button></a>&nbsp&nbsp
  <a href="view.php"><button type="submit" name="submit" id="submit" value="send" class="btn btn-primary">Save</button></a>                            
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
  
  
  
  
  
  
  
  
  
  
  
  
  
  