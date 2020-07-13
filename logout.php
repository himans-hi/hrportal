<?php

// print_r($_COOKIE);
	// unset($_COOKIE[COOKIE_USER]);
				// unset($_COOKIE[COOKIE_PASS]);
			// //	print_r($_COOKIE);
 // setcookie(COOKIE_USER, '', time() - 3600);
 // setcookie(COOKIE_PASS, '',time() -3600);
 
 
 unset($_COOKIE[spice_user]);
 unset($_COOKIE[spice_pass]);
			
 setcookie(spice_user, '', time() - 3600);
 setcookie(spice_pass, '',time() -3600);
 setcookie("user", '',time() -3600);
 setcookie("type", '',time() -3600);
header("Location:login2.php");
	?>