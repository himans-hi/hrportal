<?php

 ini_set('display_error', 'All');
// error_reporting( E_ALL );
  
//  include('config/require.php'); 
  
  if(isset($_POST['submit']))
  {
      $fname1=$_POST['fname'];
      $lname1=$_POST['lname'];
       $department=$_POST['Dept'];
       $DepartmentLocation=$_POST['DeptLoc'];
       $contact=$_POST['Contact'];
      $Email=$_POST['email'];
	  $marry=$_POST['marry'];
	//  $subject=$_POST['subject'];
	  $pwd=$_POST['pwd'];
      // $AccountManager=$_POST['manager']; 
      // $Grade=$_POST['grade'];
      // $payscale=$_POST['PayScale'];
      // $Salary=$_POST['tds'];
     $MealFacility=$_POST['mealfacility'];
     $CabFacility=$_POST['cabfacility'];
	 $address=$_POST['address'];
       $PinCode=$_POST['pincode'];
  //   $City=$_POST['city'];
	  $Status=$_POST['status'];
	  

$message=
	'
  <h3 align="center">Employee Details</h3>
  <table>
   <tr>
    <td width="30%">FName</td>
    <td width="70%">'.$_POST['fname'].'</td>
   </tr>
   <tr>
    <td width="30%">LName</td>
    <td width="70%">'.$_POST['lname'].'</td>
   </tr>
   <tr>
    <td width="30%">Department</td>
    <td width="70%">'.$_POST['Dept'].'</td>
   </tr>
   <tr>
    <td width="30%">Contact</td>
    <td width="70%">'.$_POST["Contact"].'</td>
   </tr>
   <tr>
    <td width="30%">Email </td>
    <td width="70%">'.$_POST["email"].'</td>
   </tr>
   <tr>
    <td width="30%">Password</td>
    <td width="70%">'.$_POST["pwd"].'</td>
   </tr>
   <tr>
    <td width="30%">AccountManager</td>
    <td width="70%">'.$_POST["mealfacility"].'</td>
   </tr>
   <tr>
    <td width="30%">Salary</td>
    <td width="70%">'.$_POST["cabfacility"].'</td>
   </tr>
   <tr>
    <td width="30%">City</td>
    <td width="70%">'.$_POST["address"].'</td>
   </tr>
    <tr>
    <td width="30%">Pincode</td>
    <td width="70%">'.$_POST["pincode"].'</td>
   </tr>
    <tr>
    <td width="30%">Status</td>
    <td width="70%">'.$_POST["status"].'</td>
   </tr>
  </table>
 ';
	
 require 'PHPMailerAutoload.php';
// require 'credential.php';


 $mail = new PHPMailer;
 $mail->Timeout = 300;
  $mail->SMTPDebug = 3;
  $mail->IsSMTP();        //Sets Mailer to send message using SMTP
 // $mail->isHTML(true);
 $mail->Host = 'smtp.gmail.com';  //Sets the SMTP hosts of your Email hosting, this for Godaddy
 $mail->Port = '25';        //Sets the default SMTP server port
 $mail->SMTPAuth = true;       //Sets SMTP authentication. Utilizes the Username and Password variables
//  $mail->Username = Email;
  $mail->Username = 'hg140771@gmail.com'; //Sets SMTP username
  $mail->Password = 'himanshi1@';     //Sets SMTP password
 $mail->SMTPSecure = 'tls';       //Sets connection prefix. Options are "", "ssl" or "tls"
 


 
 
 //Recipients
    $mail->setFrom('hg140771@gmail.com','noreply');
	
    $mail->addAddress('himanshigupta210@gmail.com');     // Add a recipient
      

//    $mail->addReplyTo(Email);
  //  $mail->addCC('cc@example.com');
  //  $mail->addBCC('bcc@example.com');

// Attachments
// print_r($_FILES['upload']); exit;
for($i=0; $i<count($_FILES['upload']['name']); $i++){
     $mail->addAttachment($_FILES['upload']['tmp_name'][$i], "uploaded/" .$_FILES['upload']['name'][$i]);
   }
       // $mail->addAttachment($_FILES['upload']['tmp_name'], "uploaded/" .$_FILES['upload']['name']);
	   // $mail->addAttachment($_FILES['upload1']['tmp_name'], "uploaded/" .$_FILES['upload1']['name']);
	   // $mail->addAttachment($_FILES['upload2']['tmp_name'], "uploaded/" .$_FILES['upload2']['name']);
	   // $mail->addAttachment($_FILES['upload3']['tmp_name'], "uploaded/" .$_FILES['upload3']['name']);
	   
	   
	   

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
   // $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
  //  $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
	
	
	
// $mail->AddAttachment($path);     //Adds an attachment from a path on the filesystem
 $mail->Subject = 'Application for Programmer Registration';    //Sets the Subject of the message
 $mail->Body = $message;       //An HTML or plain text message body



	  if(!$mail->send()) {
		  $msg = "message could not be sent";
		//  $message = '<div class="alert alert-danger">There is an Error</div>';
			    
			//    echo 'Mailer Error: ' . $mail->ErrorInfo;
	    } else {
		   $msg = "Message has been sent";
			//	$message = '<div class="alert alert-success">Application Successfully Submitted</div>';
			//	 header('Location:login2.html');
			}
	//		exit(json_encode(array("message" => $message)));

  
  }
 

?>