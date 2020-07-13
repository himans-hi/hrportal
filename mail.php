<?php
ini_set('display_error', 'All');

//  include('config/require.php');
  
  if(isset($_REQUEST['send']))
  {
	  $event=$_REQUEST['event'];
      $sub=$_REQUEST['sub'];
       $comment=$_REQUEST['comment'];
       $requirement=$_REQUEST['requirement'];
       $terms=$_REQUEST['terms'];
	   $event_date=$_REQUEST['event_date'];
	 //  $image=$_POST['image'];
	    // $name=$_FILES['upload']['name'];
	    // $tmpFilePath=$_FILES['upload']['tmp_name']; 
	    // move_uploaded_file($tmpFilePath, "uploaded/" .$name);
	
	   	  	 $message=
	'
	Dear Colleagues,
	<html>
	<head>
	<title>'.$_POST['event'].'</title>
	</head>
	<body>
	<h1><b>'.$_POST['sub'].'</b></h1><br/>
	<h3>'.$_POST['comment'].'</h3><br/>
	<table border="1" width="100%" cellpadding="5" cellspacing="5">
	<tr>
	<td width="30%">Requirements</td>
	<td width="30%">'.$_POST['requirement'].'</td>
	</tr>
	<tr>
	<td width="30%">Terms&Condition</td>
	<td width="70%">'.$_POST['terms'].'</td>
	</tr>
	</table>
	<h4>This event is organise on'.$_POST['event_date'].'.</h4><br/>
	<h4> Team HR<br/>
  HumanResource</h4>
  </body>
  </html>
 ';
	
 require 'PHPMailerAutoload.php';
// require 'credentials.php';

 $mail = new PHPMailer();
 $mail->SMTPDebug = 4;
 $mail->IsSMTP();        //Sets Mailer to send message using SMTP
 $mail->Host = 'smtp.gmail.com';  //Sets the SMTP hosts of your Email hosting, this for Godaddy
 $mail->Port = '25';        //Sets the default SMTP server port
 $mail->SMTPAuth = true;       //Sets SMTP authentication. Utilizes the Username and Password variables
// $mail->Username = Email;
 $mail->Username = 'hg140771@gmail.com'; //Sets SMTP username
 $mail->Password = 'himanshi1@';     //Sets SMTP password
 $mail->SMTPSecure = 'tls';       //Sets connection prefix. Options are "", "ssl" or "tls"
 
 
 
 //Recipients
    $mail->setFrom('hg140771@gmail.com','noreply');
    $mail->addAddress('himanshigupta1111@gmail.com');     // Add a recipient//
      $mail->addAddress('himanshi.gupta@digispice.com');  
	  $mail->addAddress('himanshigupta296@gmail.com'); 

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML

 $mail->AddAttachment($_FILES['upload']['tmp_name'],$_FILES['upload']['name']);     //Adds an attachment from a path on the filesystem
// if (isset($_FILES['upload']['name']) && $_FILES['upload']['error'] == UPLOAD_ERR_OK){
//	if(move_uploaded_file($tmpFilePath1, "uploaded/" .$name1)){
// $mail->AddAttachment($name);
// }

 $mail->Subject = 'HR EVENT ORGANISATION';    //Sets the Subject of the message
 $mail->Body = $message;       //An HTML or plain text message body
 
	  if(!$mail->Send()) {
	//	  $status = "failed";
			    echo 'Message could not be sent.';
		//	    $response = 'Mailer Error: ' . $mail->ErrorInfo;				
			}
			else {
		//		$status = "success";
			//	 $response ="mail is sent";
                echo 'Message has been sent';
               header("Location:viewevent.php");
			}
		//	exit(json_encode(array("response" => $response)));
}
?>
