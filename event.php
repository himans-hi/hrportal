<?php
 include('validate.php');
?>


<?php
ini_set('display_error', 'All');
error_reporting(0);

  include('config/require.php');
  $message='';
  if(isset($_POST['form-submit']))
  {
      $event=$_POST['event'];
      $sub=$_POST['sub'];
       $comment=$_POST['comment'];
       $requirements=$_POST['requirement'];
       $terms=$_POST['terms'];
	   $event_date=$_POST['event_date'];
      $name=$_FILES['upload']['name'];
	  $tmpFilePath = $_FILES['upload']['tmp_name'];
	  echo $name;
	  echo $tmpFilePath;

	  move_uploaded_file($tmpFilePath, "uploaded/" .$name);
	 	
		echo $insertsql="insert into create_event(event_title,sub_title,comment,requirements,terms,event_date,image)values('$event','$sub','$comment','$requirements','$terms','$event_date','$name')";
	 
		  $returnval = mysqli_query($conn, $insertsql);
		  if($returnval){
			 echo "successful insert";
			 header("Location:createevent.php");
			 $message = '<div class="alert alert-success">Application Successfully Submitted</div>';
		  }else{
			  echo "error in insert";
			  $message = '<div class="alert alert-danger">There is an Error</div>';
		  }	
  }
  ?>