<?php

if(!isset($_COOKIE["type"])&& !isset($_COOKIE["user"]))
{
	header("Location:login2.php");
}

if(($_COOKIE['type']=="auth"))
{	
?>

<?php

 include('config/require.php');
  
  if(isset($_POST['update'])){
	
  error_reporting(0);
 
  ini_set('display_error', 'All');	
	  
	$errors     = array();
    $maxsize    = 1097152;
    
	  
       $id = $_POST['id'];
       $fname2=$_POST['fname']; 
       $lname2=$_POST['lname'];
       $department=$_POST['Dept'];
       $DepartmentLocation=$_POST['DeptLoc'];
       $contact1=$_POST['Contact'];
       $Email=$_POST['email'];
      $marry=$_POST['marry'];
      $pwd=$_POST['pwd'];
      $band=$_POST['band'];
     
      $MealFacility=$_POST['mealfacility'];
      $CabFacility=$_POST['cabfacility'];
      $address=$_POST['address'];
      $PinCode=$_POST['pincode'];
    
	   $query2 = "update students set fname= '$fname2',lname='$lname2', department='$department',departmentlocation='$DepartmentLocation',contact='$contact1',email='$Email',married='$marry',password='$pwd',band='$band',mealfacility='$MealFacility',cabfacility='$CabFacility',current_address='$address',pincode='$PinCode' where id=$id " ;
		
		$result2 = mysqli_query($conn,$query2); 
		 if($result2)
		 {
		 echo "<script>alert(data updated successfully)</script>";
		 echo "<br>";
     	 header("Location:view.php");
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