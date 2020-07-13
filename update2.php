<html>
<head>
<title>View</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>
</html>
<?php

ini_set('display_error', 'All');

  $conn=mysqli_connect("localhost:3306","root","","employee");
  
  function query($sql, $condition=null){
	global $conn;
  }
  
  if(isset($_POST['update']))
  {
	   $id = $_POST['id'];
      $fname=$_POST['fname'];
      $lname=$_POST['lname'];
       $address=$_POST['address'];
       $state=$_POST['state'];
       $post=$_POST['post'];
      $email=$_POST['email'];
      $password=$_POST['password']; 
      $date=$_POST['date'];
      $phone=$_POST['phone'];
      $designation=$_POST['designation'];
     $reports=$_POST['reports'];
     $emp=$_POST['emp'];
	 
	  echo $query = "update emp1 set fname= '$fname',lname='$lname', address='$address',state='$state',post_code='$post',email='$email',password='$password',date_of_birth='$date',phonenumber='$phone',designation='$designation',reports='$reports',employment_to='$emp' where id=$id " ;
		  $update = mysqli_query($conn,$query); 
		 if($update)
		 {
		 echo "<script>alert(data updated successfully)</script>";
		 echo "<br>";
		 header("Location:view2.php");
		 }
		 else
		 {
			 echo "error";
		 }
  }
  
  $conn->close();
  ?>
	 
	 