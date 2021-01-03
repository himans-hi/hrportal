<?php

include('config/require.php');

$message ='';

if(isset($_POST['submit']))
{ 
   if(empty($_POST['user']) || empty($_POST['psw']))
{
	         $message = "<div class='alert alert-danger'>*Both Fields are required</div>";
}
else 
{

   $a = $_POST['user'];
   $b = $_POST['psw'];


         $query = "select * from login where username='$a'and password='$b' limit 1";
 
         $query1 = "select * from students where fname='$a'and password='$b' limit 1";

		 $result=mysqli_query($conn,$query);
	     $row = mysqli_fetch_array($result);
		 
		 $result1=mysqli_query($conn,$query1);
	     $row1 = mysqli_fetch_array($result1);
		 
             if($row > 0) 
			{	
			setcookie(COOKIE_USER,$a,time()+60*60*7);
			setcookie(COOKIE_PASS,$b,time()+60*60*7);
			setcookie("user",$a,time()+60*60*7);
			setcookie("type",$row["user_type"],time()+60*60*7);
			
			// echo " in if";
			header("Location: front.php");
			exit();	
		    }
			
	
           else if($row1 > 0) 
			{
			setcookie(COOKIE_USER,$a,time()+60*60*7);
			setcookie(COOKIE_PASS,$b,time()+60*60*7);
			setcookie("user",$a,time()+60*60*7);
			setcookie("type",$row1["Department"],time()+60*60*7);
			
			// echo " in if";
			header("Location: front.php");
			exit();
			}  
			
     		else {
			$message = "<div class='alert alert-danger'>*Username or password is incorrect,Please try again..</div>";	
            }	
   	
}

 }
 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head id="Head1"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><title>
	KMP
    </title><link rel="shortcut icon" href="favicon4.ico">
	
    <script src="./KMP_files/jquery.min.js.download" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="./KMP_files/kmpNew.css">
    <script src="./KMP_files/FormPostData.js.download" type="text/javascript"></script>
    <script src="./KMP_files/FormResetNew.js.download" type="text/javascript"></script>
    
    <style type="text/css">
        a.text_team_bold_link:hover
        {
            color: #138eb7 !important;
        }
    </style>
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  

</head>
<body style="">
 <form name='myForm'  method="post" style="border:1px solid #ccc">
        <div class="login_box">
            <div class="container">
                <div class="top_banner">
              	  
    <h2>Login Form</h2>
	
	<div class="alert alert-danger" style="color:red;color:red;font-style:normal; width:350px;">
	 <?php
     echo $message;
     ?>	
	 </div>
     <hr>
	
                    <div class="input_group">
                    <label for="username"><b>username</b></label>
                        <input name="user" type="text" id="user" class="btn_loge" placeholder="Enter username" />
                    </div>
                    <div class="input_group" style="padding-top: 12px">
					<label for="username"><b>Password</b></label>
                        <input name="psw" type="password" id="psw" class="btn_logePwd" placeholder="Enter Password" />
                    </div>
                    <div class="sub_btn" style="padding-top: 12px">
                        <input type="submit" name="submit" value="Sign In" id="submit" class="btn_singe" style="height:35px;width:313px;" />
                    </div>
              					
            </div>
        </div>
        
    </div>
	
    <script src="./KMP_files/JqueryMin1.11.js.download" type="text/javascript"></script>
    <script src="./KMP_files/bootstrap.js.download"></script>
    </form> 


</body></html>