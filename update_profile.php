<?php
//   include('validate.php');
if(!isset($_COOKIE["type"])&& !isset($_COOKIE["user"]))
{
	header("Location:login2.php");
}
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
	  if(move_uploaded_file($tmpFilePath[$i],$_SERVER['DOCUMENT_ROOT']."/hr/employee/uploaded/".$name_array[$i])){
		  echo $name_array[$i]." upload is complete<br>";
		//  echo $insertsql="insert into emp(Fname,Lname,aadharcard,pancard) values('$fname1','$lname1','$name_array[0]','$name_array[1]')";
	  }  else{
		  echo "move_uploaded_file function failed for ".$name_array[$i]."<br>";
	  }
	  }
	 
	 $status=$_POST['status'];
	 
	 
	   if($name_array[0]!="")
	 {
		  echo $query2 = "update students set fname= '$fname2',lname='$lname2', department='$department',departmentlocation='$DepartmentLocation',contact='$contact1',email='$Email',subject='$subject',password='$pwd',accountmanager='$AccountManager',grade='$Grade',payscale='$payscale',salary='$Salary',mealfacility='$MealFacility',cabfacility='$CabFacility',city='$City',pincode='$PinCode',aadharnumber='$name_array[0]',status='$status' where id=$id " ;
		  $result2 = mysqli_query($conn,$query2); 
		 if($result2)
		 {
		 echo "<script>alert(data updated successfully)</script>";
		 echo "<br>";
		 header("Location:user_profile.php");
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
		 header("Location:user_profile.php");
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
		 header("Location:user_profile.php");
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
	    header("Location:user_profile.php");
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
		 header("Location:user_profile.php");
		 }
	}

  }

   $conn->close();
  ?>