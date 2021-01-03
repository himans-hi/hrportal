<?php
if(!isset($_COOKIE["type"])&& !isset($_COOKIE["user"]))
{
	header("Location:login2.php");
}
?>

<?php
  include('config/require.php');
  if(isset($_GET['id']))
  {
   $id = $_GET['id'];

 echo $sql= "delete from students where id =$id ";
  $result= mysqli_query($conn,$sql);
  
   if($result)
   {
	   echo "<font color='green'>Record delete successfully";
	   header('location:view.php');
   }
   }

  $conn->close(); 
  ?>