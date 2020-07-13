<?php
 // print_r($_COOKIE);
//  include('validate.php');
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
   // for(var i=0; i<file.length;)
   // {
	   // if(file[0].value == "")
	   // {
	// //	   alert(file[i].value);
		   // window.alert("please upload aadhar image");
		   // file.value == "";
		   // return false;
	   // }
	   // i++;
	   // if(file[1].value == "")
		   // {
	// //	   alert(file[i].value);
		   // window.alert("please upload pancard image");
		   // file.value == "";
		   // return false;
	   // }
	   // i++;
	   // if(file[2].value == "")
	   // {
	// //	   alert(file[i].value);
		   // window.alert("please upload 10th marksheet image");
		   // file.value == "";
		   // return false;
	   // }
	   // i++;
	   // if(file[3].value == "")
 	   // {
	// //	   alert(file[i].value);
		   // window.alert("please upload 12th marksheet image");
		   // file.value == "";
		   // return false;
	   // }
   // }
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
// $_COOKIE["page"]= "edit";
  include('include/navbar.php');

  include('config/require.php');
 
  if(isset($_GET['id'])){
   $id = $_GET['id'];

      
   $sql= "select * from students where id=$id" ;
   $result= mysqli_query($conn,$sql);
   $row=mysqli_fetch_assoc($result);
   
  }
  ?>
  
  <form name="RegForm" action="update.php" onsubmit="return REG_FORM()" method="post" enctype="multipart/form-data">
	<div>
	<div class="main" style="width:98%; margin-left:16px;">
		
         
		 
            <div class="main">
            <div class="top_bar">
			                      <h2>
                                        Edit Employee Form</h2>
                                </div>
              
                   <table cellpadding="2" cellspacing="2" class="form_table" width="100%">                                   
                        <tr height="10"></tr>
                        <tr>
                            <td align="left" width="30%">
                                <span class="text_big_team">First Name</span>
                            </td>
                            <td align="left">
                                <input value="<?php echo $row['fname'] ?>" name="fname" type="text" class="form-control" placeholder="enter first name" style="width:199px;" />
                            </td>                            
                        </tr>
						<tr>
                            <td align="left" width="30%">
                                <span class="text_big_team">Last Name</span>
                            </td>
                            <td align="left">
                                <input value="<?php echo $row['lname'] ?>" name="lname" type="text" class="form-control" placeholder="enter last name" style="width:199px;" />
                            </td>                            
                        </tr>
						<tr>
                            <td align="left" width="30%">
                                <span class="text_big_team">Department</span>
                            </td>
                            <td align="left">
                                <select name="Dept" id="dept" class="btn btn-default dropdown-toggle" data-toggle="dropdown" style="width:200px;">
									<option value="">Select Department</option>
									<option value="admin"
									<?php
if($row['department']=='admin')
{
	echo "selected";
}
?>
>admin</option>
									<option value="account"
									<?php
if($row['department']=='account')
{
	echo "selected";
}
?>
									>account</option>
									<option value="finance"
									<?php
if($row['department']=='finance')
{
	echo "selected";
}
?>
									>finance</option>
									<option value="hr"
									<?php
if($row['department']=='hr')
{
	echo "selected";
}
?>
									>hr</option>
									<option value="technical"
									<?php
if($row['department']=='technical')
{
	echo "selected";
}
?>
									>technical</option>
									<option value="sales"
									<?php
if($row['department']=='sales')
{
	echo "selected";
}
?>
									>sales</option>
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
	<option value="Bangalore"
	<?php
if($row['departmentlocation']=='Banglore')
{
	echo "selected";
}
?>
	>Bangalore</option>
	<option value="Bangladesh"
	<?php
if($row['departmentlocation']=='Bangladesh')
{
	echo "selected";
}
?>
	>Bangladesh</option>
	<option value="Kolkata"
	<?php
if($row['departmentlocation']=='Kolkata')
{
	echo "selected";
}
?>
	>Kolkata</option>
	<option value="punjab"
	<?php
if($row['departmentlocation']=='punjab')
{
	echo "selected";
}
?>
	>punjab</option>
	<option value="Mohali"
	<?php
if($row['departmentlocation']=='Mohali')
{
	echo "selected";
}
?>
	>Mohali</option>
	<option value="Mumbai"
	<?php
if($row['departmentlocation']=='Mumbai')
{
	echo "selected";
}
?>
	>Mumbai</option>
	<option value="Noida"
	<?php
if($row['departmentlocation']=='Noida')
{
	echo "selected";
}
?>
	>Noida</option>
	<option value="delhi"
	<?php
if($row['departmentlocation']=='delhi')
{
	echo "selected";
}
?>
	>delhi</option>
	<option value="uttar pradesh"
	<?php
if($row['departmentlocation']=='uttar pradesh')
{
	echo "selected";
}
?>>uttar pradesh</option>
	<option value="madhya pradesh"
	<?php
if($row['departmentlocation']=='madhya pradesh')
{
	echo "selected";
}
?>
	>madhya pradesh</option>
                              	</select>
                            </td>                               
                        </tr>
						<tr>
                            <td align="left" width="30%">
                                <span class="text_big_team">Contact</span>
                            </td>
                            <td align="left">
                                <input value="<?php echo $row['contact'] ?>" name="Contact" id="Contact" maxlength="10" type="text" class="form-control" placeholder="enter contact number" style="width:199px;" />
                            </td>                            
                        </tr>
						
                        <tr>
                            <td align="left">
                                <span class="text_big_team">Email</span>
                            </td>
                            <td align="left">
                                <input value="<?php echo $row['email'] ?>" name="email" type="text" id="email" class="form-control" placeholder="enter email" style="width:199px;" />
								<span id="Email"></span>
                            </td>
                        </tr>
						
						<tr>
                            <td align="left">
                                <span class="text_big_team">Subject</span>
                            </td>
                            <td align="left">
                                <input value="<?php echo $row['subject'] ?>" name="subject" type="text" id="subject" class="form-control" placeholder="enter subject" style="width:199px;" />
                            </td>
                        </tr>     
						
                        <tr>
                            <td align="left">
                                <span class="text_big_team">Password</span>
                            </td>
                            <td align="left">
                                <input value="<?php echo $row['password'] ?>" name="pwd" type="text" id="pwd" class="form-control" placeholder="enter password" style="width:199px;" />
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
	<option value="Himanshi Gupta"
	<?php
if($row["accountmanager"]=='Himanshi gupta')
{
	echo "selected";
}
?>
	>Himanshi Gupta</option>
	<option value="Himanshu Gupta"
	<?php
if($row["accountmanager"]=='Himanshu gupta')
{
	echo "selected";
}
?>
	>Himanshu Gupta</option>
	<option value="Anamika Parashar"
	<?php
if($row["accountmanager"]=='Anamika Parashar')
{
	echo "selected";
}
?>
	>Anamika Parashar</option>
	<option value="Nandini Patel"
	<?php
if($row["accountmanager"]=='Nandini Patel')
{
	echo "selected";
}
?>
	>Nandini Patel</option>
	<option value="Rajni Rajput"
	<?php
if($row["accountmanager"]=='Rajni Rajput')
{
	echo "selected";
}
?>
	>Rajni Rajput</option>
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
	<option value="A"
	<?php
if($row["grade"]=='A')
{
	echo "selected";
}
?>
	>A</option>
	<option value="B"
	<?php
if($row["grade"]=='B')
{
	echo "selected";
}
?>
	>B</option>
	<option value="C"
	<?php
if($row["grade"]=='C')
{
	echo "selected";
}
?>
	>C</option>
	<option value="D"
	<?php
if($row["grade"]=='D')
{
	echo "selected";
}
?>
>D</option>
	<option value="E"
	<?php
if($row["grade"]=='E')
{
	echo "selected";
}
?>
	>E</option>
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
	<option value="1000-10000"
	<?php
if($row["payscale"]=='1000-10000')
{
	echo "selected";
}
?>
	>1000-10000</option>
<option value="10000-50000"
<?php
if($row["payscale"]=='10000-50000')
{
	echo "selected";
}
?>
>10000-50000</option>
<option value="50000-100000" 
<?php
if($row["payscale"]=='50000-100000')
{
	echo "selected";
}
?>
 >50000-100000</option>
<option value="100000"
<?php
if($row["payscale"]=='100000')
{
	echo "selected";
}
?>
>100000</option>
	</select>
	</td>
                        </tr>
						
                        <tr>
                            <td align="left">
                                <span class="text_big_team">Salary</span>
                            </td>
                            <td align="left">
                                <input value="<?php echo $row['salary']?>" name="tds" type="text" id="tds" class="form-control" placeholder="enter salary" style="width:199px;" />
                            </td>
                        </tr>
						
						<tr>
                            <td align="left">
                                <span class="text_big_team">Meal Facility</span>
                            </td>
                            <td align="left">
                                <input type="radio" name="mealfacility" id="mealfacility" value="yes"
								 <?php
	if($row['mealfacility']=='yes')
	{
		echo "checked";
	}
	?>
								/>yes&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                <input type="radio" name="mealfacility" id="mealfacility" value="no"
								 <?php
	if($row['mealfacility']=='no')
	{
		echo "checked";
	}
	?>
								/>no
                            </td>
                        </tr>
						
						<tr>
                            <td align="left">
                                <span class="text_big_team">Cab Facility</span>
                            </td>
                            <td align="left">
                                <input type="radio" name="cabfacility" id="cabfacility"  value="yes"
 <?php
	if($row['cabfacility']=='yes')
	{
		echo "checked";
	}
	?>
								/>yes&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                <input type="radio" name="cabfacility" id="cabfacility" value="no" 
								 <?php
	if($row['cabfacility']=='no')
	{
		echo "checked";
	}
	?>			
								/>no
                            </td>
                        </tr>
						
						<tr>
                            <td align="left">
                                <span class="text_big_team">City</span>
                            </td>
                            <td align="left">
                                <input value="<?php echo $row['city'] ?>" name="city" type="text" id="city" class="form-control" placeholder="enter city" style="width:199px;" />
                            </td>
                        </tr>
						
						<tr>
                            <td align="left">
                                <span class="text_big_team">Pincode</span>
                            </td>
                            <td align="left">
                                <input value="<?php echo $row['pincode'] ?>" name="pincode" type="text" id="pincode" class="form-control" placeholder="enter pincode" style="width:199px;" />
                            </td>
                        </tr>
						
						<tr>
                            <td align="left">
                                <span class="text_big_team">Aadhar Number</span>
                            </td>
                            <td align="left"><img src="uploaded/<?php echo $row['aadharnumber']; ?>" style="width:50px;height:50px"> <?php echo $row['aadharnumber'];?>
                                <input type="file" name="upload[]" accept=".png,.jpg,.jpeg"  placeholder="enter AadharNumber">
                            </td>
                        </tr>
						
						<tr>
                            <td align="left">
                                <span class="text_big_team">Pan Number</span>
                            </td>
                            <td align="left"><img src="uploaded/<?php echo $row['pannumber']; ?>" style="width:50px;height:50px"> <?php echo $row['pannumber'];?>
                                <input type="file" name="upload[]" accept=".png,.jpg,.jpeg" placeholder="enter PanNumber">
                            </td>
                        </tr>
						
						<tr>
                            <td align="left">
                                <span class="text_big_team">10th Marksheet</span>
                            </td>
                            <td align="left"><img src="uploaded/<?php echo $row['ssc']; ?>" style="width:50px;height:50px"> <?php echo $row['ssc'];?>
                                <input type="file" name="upload[]" accept=".png,.jpg,.jpeg"  placeholder="enter 10th marksheet">
                            </td>
                        </tr>
						
						<tr>
                            <td align="left">
                                <span class="text_big_team">12th Marksheet</span>
                            </td>
                            <td align="left"><img src="uploaded/<?php echo $row['hsc']; ?>" style="width:50px;height:50px"> <?php echo $row['hsc'];?>
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
										<option value="active"
										<?php
if($row['status']=='active')
{
	echo "selected";
}
?>
										>active</option>
									<option value="update"
									<?php
if($row['status']=='update')
{
	echo "selected";
}
?>
									>update</option>
									<option value="pending"
									<?php
if($row['status']=='pending')
{
	echo "selected";
}
?>
									>pending</option>
										</select>
                            </td>
                        </tr>
                         <input type='hidden' name='id' value= "<?php echo $row['id'] ?>">
                        
                        <tr>
                            <td></td>
                            <td align="left">
                                <a href="view.php"><button type="button" class="btn btn-secondary">close</button></a>&nbsp&nbsp
 <button type="submit" name="update" value="update" class="btn btn-primary">Save</button></a>&nbsp&nbsp                             
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
else{
	header("Location:login2.php");
}
?>

  