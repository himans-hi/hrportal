<?php
  ini_set('display_error', 'All');
 error_reporting(0);
 
 include('include/mail.php'); 
 
  include('config/require.php'); 
  $message='';
  $i=0;
  if(isset($_POST['submit']))
  {
      $fname1=$_POST['fname'];
      $lname1=$_POST['lname'];
       $department=$_POST['Dept'];
       $DepartmentLocation=$_POST['DeptLoc'];
       $contact=$_POST['Contact'];
      $Email=$_POST['email'];
//	  $subject=$_POST['subject'];
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
	  $filepath="/uploaded/" .$name_array[$i];
	  
	  for($i=0; $i<count($_FILES['upload']['name']); $i++) {
  if(move_uploaded_file($tmpFilePath[$i], "/uploaded/" .$name_array[$i])){
		echo $name_array[$i]." upload is complete<br>";
	  } 
	  else{
		  echo "move_uploaded_file function failed for ".$name_array[$i]."<br>";
	  }
	  }
	 
	 $Status=$_POST['status'];
	  
  //   $Salary= $Salary * 10 / 100;
	
	
	
	
	 $checkvalues = "select * from students where Contact='".$contact."' and email='".$Email."' and password='".$pwd."'"; 
	 	       
	$sql = mysqli_query($conn, $checkvalues);

	 $count = mysqli_num_rows($sql);
	
	if($count > 0){
		echo "User already exists";
		header("Location:index1.php");
	}else{			
 $insertsql="insert into students(Fname,Lname,Department,DepartmentLocation,contact,Email,subject,password,AccountManager,Grade,PayScale,Salary,MealFacility,CabFacility,City,PinCode,aadharnumber,pannumber,ssc,hsc,Status) values('$fname1','$lname1','$department','$DepartmentLocation','$contact','$Email','$subject','$pwd','$AccountManager','$Grade','$payscale','$Salary','$MealFacility','$CabFacility','$City','$PinCode','$name_array[0]','$name_array[1]','$name_array[2]','$name_array[3]','$Status')";
	 
		  $returnval = mysqli_query($conn, $insertsql);
		  if($returnval){
			  $message = '<div class="alert alert-success">Application Successfully Submitted</div>';
			 echo "successfully insert";	 
		//	 header('Location:submit.php');
		       
		  }else { 
		      $message = '<div class="alert alert-danger">There is an Error</div>';
			  echo "error in insert";
		  }
		}
	}
?>