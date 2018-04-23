<!DOCTYPE html>
<html>
<style>
	body {font-family: Arial, Helvetica, sans-serif;}
	* {box-sizing: border-box}


	input[type=text], input[type=password] {
	    width: 100%;
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


	button {
	    background-color: #4CAF50;
	    color: white;
	    padding: 14px 20px;
	    margin: 8px 0;
	    border: none;
	    cursor: pointer;
	    width: 100%;
	    opacity: 0.9;
	}

	button:hover {
	    opacity:1;
	}

	/* Extra styles for the cancel button */
	.cancelbtn {
	    padding: 14px 20px;
	    background-color: #f44336;
	}

	.cancelbtn, .signupbtn {
	  float: left;
	  width: 50%;
	}

	.container {
	    padding: 16px;
	}

	.clearfix::after {
	    content: "";
	    clear: both;
	    display: table;
	}

	@media screen and (max-width: 300px) {
	    .cancelbtn, .signupbtn {
	       width: 100%;
	    }
	}
</style>

<?php
	include "connect.php"; 
	include "SignUpDB.php";
?>
	
<body>

<form action="/action_page.php" style="border:1px solid #ccc">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
	
    x<label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" required>
    
    <label for="phone_number"><b>Phone Number</b></label>
    <input type="text" placeholder="Enter Phone Number" name="phone_number" required>
	
	<label for="address"><b>Address</b></label>
    <input type="text" placeholder="Enter Address" name="address" rows=4 required>
    
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
    
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
    
    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>

</body>
</html>