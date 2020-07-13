
<?php

include('config/require.php');

include('checkheader.php');

$conn=mysqli_connect("localhost:3306","root","","employee");
  
  function query($sql, $condition=null){
	global $conn;
  }
  
  if(isset($_POST['submit']))
  {
      
       $user1=$_POST['user'];
       $passwd=$_POST['psw'];
      
		
	echo $insertsql="insert into login(username,password) values('$user1','$passwd')";
	 
		  $returnval = mysqli_query($conn, $insertsql);
		  if($returnval){
		 echo "successful insert";
		  }
		}	   	  
?>
