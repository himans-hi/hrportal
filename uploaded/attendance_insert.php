<?php

$conn=mysqli_connect("localhost:3306","root","","hr");
  
  function query($sql, $condition=null){
	global $conn;
  }
  
  if(isset($_POST['submit']))
  {
      
       $name=$_POST['name'];
	   $department=$_POST['department'];
	   $employee_id=$_POST['employee_id'];
       $date=$_POST['attendance_date'];
	   $intime=$_POST['intime'];
       $outtime=$_POST['outtime'];
	   $description=$_POST['description'];
	   $status=$_POST['status'];
      
		
	echo $insertsql="insert into attendance(name,department,employee_id,attendance_date,in_time,out_time,description,status) values('$name','$department','$employee_id','$date','$intime','$outtime','$description','$status')";
	 
		  $returnval = mysqli_query($conn, $insertsql);
		  if($returnval){
			 echo "successfully insert";
			 header('Location:view3.php');
		  }else { 
			  echo "error in insert";
		  }	   	  
  }
?>
