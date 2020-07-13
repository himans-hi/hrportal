<?php

   //  session_start();

	   // include('config/require.php');

       // $a=$_REQUEST['user_name'];
       // $b=$_REQUEST['user_pass'];

         // $query = "select * from login where username='$a'and password='$b' limit 1";
 
         // $query1 = "select * from students where fname='$a'and password='$b' limit 1";

             // $result=mysqli_query($conn,$query);
	        // $row = mysqli_fetch_array($result);
           

	         // $result1=mysqli_query($conn,$query1);
	         // $row1 = mysqli_fetch_array($result1);


           // if ($row > 0) 
			// {
				// echo "success";
				// header("Location:front.php");
			
			// }	
			// else if($row1 > 0)
			// {
				// echo "success";
				// header("Location:user_profile.php");

			// }			
			
			 // else 
			// {	
			  // echo "error";
			// }


include('config/require.php');

$message ='';
if(isset($_POST['submit']))
{ 
   if(empty($_POST['user']) || empty($_POST['psw']))
{
	         $message = "<div class='alert alert-danger'>Both Fields are required</div>";
	        if($_COOKIE[COOKIE_USER] == "" && $_COOKIE[COOKIE_PASS] == ""){
		
		     // unset($_COOKIE[COOKIE_USER]);
			// $res = setcookie(COOKIE_USER, '', time() - 3600);
			
			
			// unset($_COOKIE[COOKIE_PASS]);
			// $res = setcookie(COOKIE_PASS, '', time() - 3600);
		
             header("Location: login2.php");
			 exit;
			}
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
            
        //    echo COOKIE_USER . $a;
        //    echo COOKIE_PASS .$b;
			setcookie(COOKIE_USER,$a,time()+60*60*7);
			setcookie(COOKIE_PASS,$b,time()+60*60*7);
			setcookie("type",$a,time()+60*60*7);
			
			// echo " in if";
			header("Location: front.php");
			exit;
			}
		
            else if($row1 > 0) 
			{
			setcookie(COOKIE_USER,$a,time()+60*60*7);
			setcookie(COOKIE_PASS,$b,time()+60*60*7);
			setcookie("type",$a,time()+60*60*7);
			
			// echo " in if";
			header("Location: user_profile.php");
			exit;
			}	
		
		    else
		    {
			$message = '<div class="alert alert-danger">Wrong please enter correct username and password</div>';	
			unset($_COOKIE[COOKIE_USER]);
			$res = setcookie(COOKIE_USER, '', time() - 3600);
			
			
			unset($_COOKIE[COOKIE_PASS]);
			$res = setcookie(COOKIE_PASS, '', time() - 3600);
			header("Location:login2.php");
			exit;
            }	
			
}

 }
 
?>
