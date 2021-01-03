<?php

if(!isset($_COOKIE["type"]) && !isset($_COOKIE["user"]))
{
	header("Location:login2.php");
}
else{
	header("Location:front.php");
}

?>
