<?php
// include('mail2.php');
ini_set('display_error', 'All');

$conn=mysqli_connect("localhost:3306","root","","employee");
  
  function query($sql, $condition=null){
	global $conn;
  }
  
  if(isset($_POST['submit']))
  {
      
       $name=$_POST['name'];
	   $department=$_POST['department'];
	   $employee_id=$_POST['employee_id'];
	   $leave_day=$_POST['leave_day'];
       $leave=$_POST['leave'];
	   $fromdate=$_POST['fromdate'];
       $todate=$_POST['todate'];
	   $description=$_POST['description'];
	   $mail_to=$_POST['mail_to'];
      
		
	echo $insertsql="insert into leave_table(name,department,employee_id,leave_day,leave_category,from_date,to_date,description,mail_to) values('$name','$department','$employee_id','$leave_day','$leave','$fromdate','$todate','$description','$mail_to')";
	 
		  $returnval = mysqli_query($conn, $insertsql);
		  if($returnval){
			 echo "successfully insert";
			 
		  }else { 
			  echo "error in insert";
		  }	   	  
  }
?>
