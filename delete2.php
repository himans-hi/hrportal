<?php

  include('config/require.php');
  if(isset($_GET['id']))
  {
   $id = $_GET['id'];

 echo $sql= "delete from emp1 where id =$id ";
  $result= mysqli_query($conn,$sql);
  
   if($result)
   {
	   echo "<font color='green'>Record delete successfully";
	   header('location:view2.php');
   }
   }

  $conn->close(); 
  
  ?>