<?php
if(!isset($_COOKIE["type"])&& !isset($_COOKIE["user"]))
{
	header("Location:login2.php");
}
?>
<?php  
//check.php  
ini_set('display_error', 'All');
 
include('config/require.php');

// if(isset($_POST["contact"]))
// {
// // $fname = mysqli_real_escape_string($conn,$_POST["fname"]);
 // $query = "SELECT * FROM students WHERE contact = '".$_POST["contact"]."'";
 // $result = mysqli_query($conn, $query);
 // echo mysqli_num_rows($result);
// }
if(isset($_POST["pwd"]))
{

// $fname = mysqli_real_escape_string($conn,$_POST["fname"]);
 $query_1 = "SELECT * FROM students WHERE password = '".$_POST["pwd"]."'";
 $result_1 = mysqli_query($conn, $query_1);
 echo mysqli_num_rows($result_1);
}

?>