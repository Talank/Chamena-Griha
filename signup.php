<?php  
	$title = "Sign up";
	include('header.php');
?>

	<script type="text/javascript" src="js/signup_process.js"></script>
	<div>
		<section class="header-content">
			<div>
				<img src="images/logo.png">
				<a href="index.php" class="signin-button">Sign in</a>
			</div>
		</section>
		<section class="container-signup">
			<h1>Create your Account</h1>
			<div class="signupbox">
					<form name="signupForm" action="process/signup_process.php" onsubmit="return validation()" method="post" enctype="multipart/form-data">
							
							<label class="name fieldbox">
							Name<br>
								<input type="text" name="firstname" placeholder="Your Firstname">
								<input type="text" name="lastname" placeholder="Your Lastname"><br>
								<span class="errormsg" id="nameError"></span>
							</label><br>
							
							<label class="username fieldbox">
							Username<br>
								<input type="text" name="username" placeholder="Pick a Username">
								<span class="errormsg" id="usernameError"></span>
							</label><br>

							<label class="email fieldbox">
							Email<br>
								<input type="email" name="email" placeholder="you@example.com">
								<span class="errormsg" id="emailError"></span>
							</label><br>
							
							<label class="choice fieldbox">
								I am<br>
								<label>
									<input type="radio" name="userType" value="0" id="type1" checked="checked" onclick ="disableField(this);">Student
								</label>
								<label>
									<input type="radio" name="userType" value="1" id="type1" onclick ="disableField(this);">Teacher
								</label>
								<label>
									<input type="radio" name="userType" value="2" id="type1" onclick ="disableField(this);">Other
								</label>
									<span class="errormsg" id="userTypeError"></span>
							</label><br>
								
							<label class="regd fieldbox">
							Registration No.<br>
								<input type="number" name="regId" placeholder="Your Registration No." id="regId">
								<span class="errormsg" id="regIdError"></span>
							</label><br>
							
							<label class="gender fieldbox">
								Gender<br>
								<label><input type="radio" name="gender" value="male" id="gender">Male</label>
								<label><input type="radio" name="gender" value="female" id="gender">Female</label><br>
								<span class="errormsg" id="genderError"></span>
							</label><br>
							
							<label class="contact fieldbox">
								Contact<br>
								<input type="tel" name="contact" placeholder="Your Phone Number" id="contact">
								<span class="errormsg" id="contactError"></span>
							</label><br>
							
							<label class="picture fieldbox">
								Upload a Picture<br>
								<input type="file" name="userPic">
								<span class="errormsg" id="userPicError"></span>
							</label><br>

							<label class="password fieldbox">
							Password<br>
								<input type="password" name="password" placeholder="Create a Password">
								<span class="errormsg" id="passError"></span>
							</label><br>

							<label class="re-passowrd fieldbox">
							Confirm Password<br>
								<input type="password" name="passConfirm" placeholder="Confirm Password">
								<span class="errormsg" id="confirmError"></span>
								<span class="errormsg" id="matchError"></span>
							</label><br>
							
							<label class="submit fieldbox"><input type="submit" name="signup" value="Sign up"></label>
							
					</form>
					<div class="form-control">
						<p>Please read the terms and privacy policy before signing up.</p>
						<a href="#" class="terms">Terms</a>
						<a href="#" class="privacy">Privacy</a>
						<a href="#" class="help">Help</a>
					</div>
					<span class="copyright">Chamena Griha &copy; <?php echo date("Y");?> </span>
			</div>
		</section>
	</div>

<?php  
	include('footer.php');
?>