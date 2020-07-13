

<?php
$mysqli = new mysqli("localhost:3306","root","","test");

if(isset($_POST['update'])){

   $name= $_POST['username'];

   $file = $_FILES['myfile'];

   $filename= $file['name'];
   $fileerror=$file['error'];
   $filetmp=$file['tmp_name'];

// first delete an old file
   unlink("image/$old_image");

// new image upload to folder
move_uploaded_file($filetmp,"image/$filename");



echo $query="update data set username= '$name',image='$filename' where username=$name " ;
	 
   $result = mysqli_query($mysqli,$query); 
	 if($result)
	 {
     echo "data updated successfully";
	 header("Location:view1.php");
	 }
	
else
{
echo "record not updated";
}
  }

   $mysqli->close();
?>