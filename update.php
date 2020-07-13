<?php
//print_r($_COOKIE);
//include('validate.php');
if(!isset($_COOKIE["type"])&& !isset($_COOKIE["user"]))
{
	header("Location:login2.php");
}

if(($_COOKIE['type']=="admin")||($_COOKIE['type']=="hr")||($_COOKIE['type']=="hod"))
{	
?>

<?php

 include('config/require.php');
  
  if(isset($_POST['update'])){
	  
	  
       $id = $_POST['id'];
	   $fname2=$_POST['fname']; 
	   $lname2=$_POST['lname'];
       $department=$_POST['Dept'];
       $DepartmentLocation=$_POST['DeptLoc'];
       $contact1=$_POST['Contact'];
      $Email=$_POST['email'];
 	  $subject=$_POST['subject'];
	  $pwd=$_POST['pwd'];
      $AccountManager=$_POST['manager']; 
      $Grade=$_POST['grade'];
      $payscale=$_POST['PayScale'];
      $Salary=$_POST['tds'];
     $MealFacility=$_POST['mealfacility'];
     $CabFacility=$_POST['cabfacility'];
     $City=$_POST['city'];
     $PinCode=$_POST['pincode'];
     // $Aadhar=$_POST['aadhar'];
     // $Pan=$_POST['pan'];
	 $name_array=$_FILES['upload']['name'];
	  $tmpFilePath = $_FILES['upload']['tmp_name'];
	  
	  for($i=0; $i<count($_FILES['upload']['name']); $i++) {
		  unlink("uploaded/$name_array[$i]");
	  if(move_uploaded_file($tmpFilePath[$i],$_SERVER['DOCUMENT_ROOT'].'/hr/employee/uploaded/'.$name_array[$i])){
		  $msg= $name_array[$i]." upload is complete<br>";
		//  echo $insertsql="insert into emp(Fname,Lname,aadharcard,pancard) values('$fname1','$lname1','$name_array[0]','$name_array[1]')";
	  }  else{
		  echo "move_uploaded_file function failed for ".$name_array[$i]."<br>";
	  }
	  }
	 
	 $status=$_POST['status'];
	 
	 
if($_POST['status']=="active")
	{		
	   $message='
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
   </table><br/> 
   this user is successfully enroll';
	}
	else 
	{
	 $message='
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
   </table><br/> 
   this user is not successfully enroll';
	};
	
 require 'PHPMailerAutoload.php';
//  require 'credentials.php';

 $mail = new PHPMailer;
 $mail->Timeout = 300;
 $mail->SMTPDebug = 3;
 $mail->IsSMTP();        //Sets Mailer to send message using SMTP
 $mail->Host = 'smtp.gmail.com';  //Sets the SMTP hosts of your Email hosting, this for Godaddy
 $mail->Port = '587';        //Sets the default SMTP server port
 $mail->SMTPAuth = true;       //Sets SMTP authentication. Utilizes the Username and Password variables
// $mail->Username = Email;
 $mail->Username = 'himanshigupta210@gmail.com'; //Sets SMTP username
 $mail->Password = 'guptahim12';     //Sets SMTP password
 $mail->SMTPSecure = 'tls';       //Sets connection prefix. Options are "", "ssl" or "tls"
 
 
 
 //Recipients
    $mail->setFrom('himanshigupta210@gmail.com','noreply');
    $mail->addAddress('hg140771@gmail.com');     // Add a recipient
      

//    $mail->addReplyTo(Email);
  //  $mail->addCC('cc@example.com');
  //  $mail->addBCC('bcc@example.com');


    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
   // $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
  //  $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
	
	
	
 $mail->AddAttachment($path);     //Adds an attachment from a path on the filesystem
 $mail->Subject = 'Application for Programmer Registration';    //Sets the Subject of the message
 $mail->Body = $message;       //An HTML or plain text message body
 if($mail->send())        //Send an Email. Return true on success or false on error
 {
	 echo "message sent";
  $message = '<div class="alert alert-success">Application Successfully Submitted</div>';
 // unlink($path);
 header("Location:view.php");
 }
 else
 {
	 echo "message not sent";
  $message = '<div class="alert alert-danger">There is an Error</div>';
 }
	  
	  if($name_array[0]!="")
	 {
		  echo $query2 = "update students set fname= '$fname2',lname='$lname2', department='$department',departmentlocation='$DepartmentLocation',contact='$contact1',email='$Email',subject='$subject',password='$pwd',accountmanager='$AccountManager',grade='$Grade',payscale='$payscale',salary='$Salary',mealfacility='$MealFacility',cabfacility='$CabFacility',city='$City',pincode='$PinCode',aadharnumber='$name_array[0]',status='$status' where id=$id " ;
		  $result2 = mysqli_query($conn,$query2); 
		 if($result2)
		 {
		 echo "<script>alert(data updated successfully)</script>";
		 echo "<br>";
		 header("Location:view.php");
		 }
	}
	
	 if($name_array[1]!="")
	 {
		  echo $query2 = "update students set fname= '$fname2',lname='$lname2', department='$department',departmentlocation='$DepartmentLocation',contact='$contact1',email='$Email',subject='$subject',password='$pwd',accountmanager='$AccountManager',grade='$Grade',payscale='$payscale',salary='$Salary',mealfacility='$MealFacility',cabfacility='$CabFacility',city='$City',pincode='$PinCode',pannumber='$name_array[1]',status='$status' where id=$id " ;
		  $result2 = mysqli_query($conn,$query2); 
		 if($result2)
		 {
		 echo "<script>alert(data updated successfully)</script>";
		 echo "<br>";
		 header("Location:view.php");
		 }
	}
	
     if($name_array[2]!="")
	 {
		  echo $query2 = "update students set fname= '$fname2',lname='$lname2', department='$department',departmentlocation='$DepartmentLocation',contact='$contact1',email='$Email',subject='$subject',password='$pwd',accountmanager='$AccountManager',grade='$Grade',payscale='$payscale',salary='$Salary',mealfacility='$MealFacility',cabfacility='$CabFacility',city='$City',pincode='$PinCode',ssc='$name_array[2]',status='$status' where id=$id " ;
		  $result2 = mysqli_query($conn,$query2); 
		 if($result2)
		 {
		 echo "<script>alert(data updated successfully)</script>";
		echo "<br>";
		 header("Location:view.php");
		 }
	}
	
	 if($name_array[3]!="")
	 {
		  echo $query2 = "update students set fname= '$fname2',lname='$lname2', department='$department',departmentlocation='$DepartmentLocation',contact='$contact1',email='$Email',subject='$subject',password='$pwd',accountmanager='$AccountManager',grade='$Grade',payscale='$payscale',salary='$Salary',mealfacility='$MealFacility',cabfacility='$CabFacility',city='$City',pincode='$PinCode',hsc='$name_array[3]',status='$status' where id=$id " ;
		  $result2 = mysqli_query($conn,$query2); 
		 if($result2)
		 {
		 echo "<script>alert(data updated successfully)</script>";
		echo "<br>";
	    header("Location:view.php");
		 }
	}
	
  if($name_array[$i]=="")
// else	
{
		  echo $query1 = "update students set fname= '$fname2',lname='$lname2', department='$department',departmentlocation='$DepartmentLocation',contact='$contact1',email='$Email',subject='$subject',password='$pwd',accountmanager='$AccountManager',grade='$Grade',payscale='$payscale',salary='$Salary',mealfacility='$MealFacility',cabfacility='$CabFacility',city='$City',pincode='$PinCode',status='$status' where id=$id " ;
		  $result1 = mysqli_query($conn,$query1); 
		 if($result1)
		 {
		 echo "<script>alert(data updated successfully)</script>";
	      echo "<br>";
		 header("Location:view.php");
		 }
	}

  }

   $conn->close();
  ?>
<?php
}
else
{
	header("Location:login2.php");
}
?>