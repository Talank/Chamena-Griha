<?php 
	$title = "forgot password";
	include_once 'header.php';
?>

<!-- <script type='text/javascript'>
	function displayMsg() {
		var regExpName = /^[a-zA-Z]*$/;
		var regExpUserName = /^[a-zA-Z0-9]*$/;
		var validity;

		if (document.forms['forgot_pw']['email'].value == "") {}
		var message = document.getElementById('displayMsg');
		message.style.color = 'red';
		message.innerHTML = 'Please check your email';
	}
</script> -->

	<section>
		<div id="displayMsg">
			<p>Check your email after requesting for reset password link</p>
		</div>
		<form name="forgot_pw" method="post" action="process/forgot_password_process.php">
			<input type="email" name="email" placeholder="you@example.com">
			<input type="submit" name="forgot_password" value="Send Email">
		</form>
	</section>

<?php 
	include_once 'footer.php';
?>

