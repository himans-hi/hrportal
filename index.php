<?php

// print_r($_COOKIE);

// if($_COOKIE['spice_user']=='admin' && $_COOKIE['spice_pass']=='admin123')
// {
	// header("Location:front.php");
// }
// else if($_COOKIE['spice_user']=='hod' && $_COOKIE['spice_pass']=='hod123')
// {
	// header("Location:front.php");
// }
// else if($_COOKIE['spice_user']=='hr' && $_COOKIE['spice_pass']=='hr123')
// {
	// header("Location:front.php");
// }

// else if($_COOKIE['spice_user']=='newuser' && $_COOKIE['spice_pass']=='spice@123')
// {
	// header("Location:front.php");
// }
// else if($_COOKIE['spice_user'] != '' && $_COOKIE['spice_pass'] != '')
// {
	// header("Location:user_profile.php");
// }

// if(isset($_COOKIE["type"])&& isset($_COOKIE["user"]))
// {
	// header("Location:front.php");
// }
// else{
	// header("Location:login2.php");
// }

if(!isset($_COOKIE["type"]) && !isset($_COOKIE["user"]))
{
	header("Location:login2.php");
}
else{
	header("Location:front.php");
}

?>
