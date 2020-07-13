<?php
ini_set('display_error', 'All');

  $conn=mysqli_connect("localhost:3306","root","","employee");
  
  function query($sql, $condition=null){
	global $conn;
  }
  
  if(isset($_POST['submit']))
  {
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

echo $insert="insert into emp1(fname,lname,address,state,post_code,Email,password,date_of_birth,phonenumber,designation,reports,employment_to) values('$fname','$lname','$address','$state','$post','$email','$password','$date','$phone','$designation','$reports','$emp')";
	 
		  $returnval = mysqli_query($conn, $insert);
		  if($returnval){
			 echo "successful insert";
			 header('Location:view2.php');
		  }else{
			  echo "error in insert";
		  }
		}

?>