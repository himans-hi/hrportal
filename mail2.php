<?php

  // ini_set('display_error', '1');
 // error_reporting( E_ALL );
 
   // include('config/require.php'); 
  
   // if(isset($_REQUEST['submit']))
   // {
      // $fname1=$_REQUEST['fname'];
      // $lname1=$_REQUEST['lname'];
       // $department=$_REQUEST['Dept'];
       // $DepartmentLocation=$_REQUEST['DeptLoc'];
       // $contact=$_REQUEST['Contact'];
      // $Email=$_REQUEST['email'];
	  // $subject=$_REQUEST['subject'];
	  // $pwd=$_REQUEST['pwd'];
      // $AccountManager=$_REQUEST['manager']; 
      // $Grade=$_REQUEST['grade'];
      // $payscale=$_REQUEST['PayScale'];
      // $Salary=$_REQUEST['tds'];
     // $MealFacility=$_REQUEST['mealfacility'];
	 
// $to = "himanshigupta296@gmail.com";
// $subject = "HTML email";

// $message = "i am very thankful to you.";

// // Always set content-type when sending HTML email
 // $headers = "MIME-Version: 1.0" . "\r\n";
 // $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
 // $headers .= "Content-Transfer-Encoding: 8bit \r\n";

// // More headers
// // $headers .= 'From: <himanshigupta1111@gmail.com>' . "\r\n";
// $headers .= "From: himanshigupta1111@gmail.com";



// mail($to, $subject, $message, $headers);

     // echo "Your mail has been sent successfully.";
      // }
   
	 // else
	 // {
	 // echo "mail not sent successfully";
	 // }
	 
	 
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
	
    $from = "himanshigupta1111@gmail.com";
	
    $to = "himanshigupta296@gmail.com";
	
    $subject = "Checking PHP mail";
	
    $message = "PHP mail works just fine";


    $headers  = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "Content-Transfer-Encoding: 8bit" . "\r\n";
	$headers .= "From:" . $from;
    
	mail($to,$subject,$message, $headers);
    
	echo "The email message was sent.";

 
?>