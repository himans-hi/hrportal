<?php


// error_reporting(0);

 
 include('config/require.php');

if(isset($_REQUEST['type'])){
	$user=$_REQUEST['user'];
	$pass=$_REQUEST['pass'];
		if($_REQUEST['user'] == 'admin' && $_REQUEST['pass'] == 'admin123'){
		//	echo COOKIE_USER . $user;
			setcookie(COOKIE_USER,$user,time()+60*60*7);
			setcookie(COOKIE_PASS,$pass,time()+60*60*7);
			// echo " in if";
			header("Location: front.php");
			exit;
		}
		else if($_REQUEST['user'] == 'hr' && $_REQUEST['pass']=='hr123'){
		//	echo COOKIE_USER . $user;
			setcookie(COOKIE_USER,$user,time()+60*60*7);
			setcookie(COOKIE_PASS,$pass,time()+60*60*7);
			// echo " in if";
			header("Location: front.php");
			exit;
		}

		else if($_REQUEST['user'] == 'hod' && $_REQUEST['pass']=='hod123'){
		//	echo COOKIE_USER . $user;
			setcookie(COOKIE_USER,$user,time()+60*60*7);
			setcookie(COOKIE_PASS,$pass,time()+60*60*7);
			// echo " in if";
			header("Location: front.php");
			exit;
		}
		 
        else if($_REQUEST['user'] == 'newuser' && $_REQUEST['pass']=='spice@123'){
		//	echo COOKIE_USER . $user;
			setcookie(COOKIE_USER,$user,time()+60*60*7);
			setcookie(COOKIE_PASS,$pass,time()+60*60*7);
			// echo " in if";
			header("Location: front.php");
			exit;
		}
        else
        {
        //  echo COOKIE_USER . $user;
			setcookie(COOKIE_USER,$user,time()+60*60*7);
			setcookie(COOKIE_PASS,$pass,time()+60*60*7);
			// echo " in if";
			header("Location: user_profile.php");
			exit;
		}	
}


 if(isset($_REQUEST['type'])){
		if($_REQUEST['type'] == 'unsetuser'){
			// unset(COOKIE_USER);
			unset($_COOKIE[COOKIE_USER]);
			
			$res = setcookie(COOKIE_USER, '', time() - 3600);
			
			unset($_COOKIE[COOKIE_PASS]);
			$res = setcookie(COOKIE_PASS, '', time() - 3600);
			
			// unset(COOKIE_PASS);
			//echo " in unset if";
			header("Location: login2.php");
			exit;
		}
}	



$user = $_COOKIE[COOKIE_USER];
$pass = $_COOKIE[COOKIE_PASS];

	
	if($_COOKIE[COOKIE_USER] == "" && $_COOKIE[COOKIE_PASS] == ""){
				// echo "in check exist";
				header("Location: login2.php");
				exit;
}

	
	?>
	
	
	
	
	
	
	