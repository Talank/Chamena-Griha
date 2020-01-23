<?php
	if(isset($_GET['username_not_found'])==true) {
		echo '
			<script type = "text/javascript">
				// var err = document.getElementById("loginError1");
				// err.style.color = "red";
				// err.innerHTML("Username Not Found");
				alert("Username Not found");
			</script>
		';
	}
	else if(isset($_GET['password_wrong'])==true) {
		echo '
			<script type = "text/javascript">
				// var err = document.getElementById("loginError2");
				// err.style.color = "red";
				// err.innerHTML("Invalid Username or Password");
				alert("Invalid Username or Password");
			</script>
		';
	}
	else{
		// echo 'Valid';
	}
?>	
<div>
	<div class = loginbox>
		<img src="images/logo.PNG" class = "head-logo">
		<img src="images/user.png" class = "user">
		<h3>Sign In Here</h3>
		<form class="loginForm" method="post" action="process/login_process.php">
			<div id = "loginError1"></div>
			<div id = "loginError2"></div>
			<div class="inputbox">
				<span><i class="fa fa-user" aria-hidden="true"></i></span>
				<input type="text" name="username" placeholder="Enter your Username" required>
			</div>
			<div class="inputbox">
				<span><i class="fa fa-lock" aria-hidden="true"></i></span>
				<input type="password" name="password" placeholder="Enter your Password" required>
			</div>
				<input type="submit" name="login" value="Sign In"><br>
				<a class = "fpass" href="forgot_password.php">Forgot Password?</a>	
		</form>

		<div class = login_foot>
			Don't have an account? <a href="signup.php?create_account">Create Account</a>
		</div>
	</div>
</div>
