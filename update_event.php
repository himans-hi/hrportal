<?php
// include('validate.php');
if(!isset($_COOKIE["type"])&& !isset($_COOKIE["user"]))
{
	header("Location:login2.php");
}
 
if(($_COOKIE['type']=="admin")||($_COOKIE['type']=="hr")||($_COOKIE['type']=="hod"))
{	
?>


<?php
ini_set('display_error', 'All');

  include('config/require.php');
  
  if(isset($_POST['update']))
  {
	  $id=$_POST['id'];
   $event=$_POST['event'];
      $sub=$_POST['sub'];
       $comment=$_POST['comment'];
       $requirement=$_POST['requirement'];
	   $terms=$_POST['terms'];
	   $event_date=$_POST['event_date'];
       $name=$_FILES['upload']['name'];
	   $tmpFilePath = $_FILES['upload']['tmp_name'];
	   move_uploaded_file($tmpFilePath,$_SERVER['DOCUMENT_ROOT']."/hr/employee/uploaded/".$name);
	 
	  if($name!='')
	  {
	   echo $query1 = "update create_event set event_title='$event',sub_title='$sub',comment='$comment',requirements='$requirement',terms='$terms',event_date='$event_date',image='$name' where id=$id " ;
		  $result1 = mysqli_query($conn,$query1); 
		 if($result1)
		 {
		 echo "<script>alert(data updated successfully)</script>";
	      echo "<br>";
		 header("Location:viewevent.php");
		 }
	  }
	  else 
		{
	   echo $query1 = "update create_event set event_title='$event',sub_title='$sub',comment='$comment',requirements='$requirement',terms='$terms',event_date='$event_date' where id=$id " ;
		  $result1 = mysqli_query($conn,$query1); 
		 if($result1)
		 {
		 echo "<script>alert(data updated successfully)</script>";
	      echo "<br>";
		 header("Location:viewevent.php");
		 }
	  } 
  }
  $conn->close();
			?>
			<?php
}
else{
	header("Location:login2.php");
}
?>