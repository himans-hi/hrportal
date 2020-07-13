<!DOCTYPE html>
<html>
<head>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 40%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 40px;
  border: none;
  cursor: pointer;
  width: 40%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}


/* Float cancel and signup buttons and add an equal width */
 .loginbtn {
  float: left;
  margin: 4px 80px;
  width: 40%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 200px) {
   .loginbtn {
     width: 40%;
  }
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- <script src="jquery.js"></script> -->
<script>
$(document).ready(function(){
$("#submit").click(function(e){
   $("#myForm").submit();

   var username = $('#user').val();
   var password = $('#psw').val();
   if(username != "" && password !="")
   {
   $.ajax({
 url:"check.php",
 type:"get",
 data:{
	user_name:username,user_pass:password
	
 },
 <!-- alert(user_name); -->
	<!-- alert(user_pass); -->
 dataType:"text",
   
   success: function(data){
		if(data == 'success'){
			var redLink = "validate.php?user="+username+"&pass="+password+"&type=setuser";
	
			<!-- console.log(redLink); -->
			//alert(redLink);
			<!-- window.location.href=redLink; -->
			window.location = redLink;
		}else{
			$('#errormsg').html('Error: woring credentials');
			//alert("woring credentials");
			alert("please enter correct username and password");
		}
   },
   error: function (jqXhr, textStatus, errorMessage) { // error callback 
	    alert(jqXhr+" : "+textStatus+" : "+errorMessage);
        $('p').append('Error: ' + errorMessage);
		<!-- alert("wrog creentials"); -->
    }
 
   });
   }else{
  alert("both fields are required");
   }
   });
   });
 
</script>
</head>
<body>
<form name='myForm' action="validate.php" method="post" style="border:1px solid #ccc">
  <div class="container">
    <h1>Login Form</h1>
    <div id="errormsg">Please fill in this form to create an account.</div>
    <hr>

    <label for="username"><b>username</b></label>
    <input type="text" placeholder="Enter username" name="user" id="user" class="form-control" />
	<span id="name_status"></span>
<br>
<br>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" class="form-control" />
	<span id="pwd_status"></span>
    <div class="clearfix">
      <button type="submit" name="submit" id="submit" value="send" class="loginbtn">Login</button>
    </div>
  </div>
</form>

</body>
</html>
