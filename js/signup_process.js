
	var regExpName = /^[a-zA-Z]*$/;
	var regExpUserName = /^[a-zA-Z0-9]*$/;
	var validity;
	// <span class="validitymsg" id="nameValidity"></span>

	function name() {
		var fname = document.forms['signupForm']['firstname'];
		var lname = document.forms['signupForm']['lastname'];
		var nameError = document.getElementById('nameError');

		if(fname.value=="" || lname.value=="") {
			nameError.style.color = 'red';
			nameError.innerHTML = "Full Name Required";
			flag = 0;
		}
		else if(fname.value.match(regExpName) == null) {
			alert("Enter Only Alphabets");
			flag = 0;
		}
		else {
			nameError.innerHTML = "";
			flag = 1;
		}
		return flag;
	}

	function username() {
		var user = document.forms['signupForm']['username'];
		var usernameError = document.getElementById('usernameError');

		if(user.value=="") {
			usernameError.style.color = 'red';
			usernameError.innerHTML = "Username Required";
			flag = 0;
		}
		else if(user.value.match(regExpUserName)== null) {
			alert("0-9 & Alphabets only");
			flag = 0;
		}
		else {
			usernameError.innerHTML = "";
			flag = 1;
		}
		return flag;
	}

	function email() {
		var email = document.forms['signupForm']['email'];
		var emailError = document.getElementById('emailError');

		if (email.value == "") {
			emailError.style.color = 'red';
			emailError.innerHTML = "Email Required"
			flag = 0;
		}

		else {
			emailError.innerHTML = "";
			flag = 1;
		}
		return flag;
	}


	function password() {
			var password = document.forms['signupForm']['password'];
			var passError = document.getElementById('passError');
			var passConfirm = document.forms['signupForm']['passConfirm'];
			var confirmError = document.getElementById('confirmError');
			
			if(password.value == "" || passConfirm.value == "") {
				passError.style.color = 'red';
				passError.innerHTML = "Password shouldn't be empty";
				flag = 0;
			}
			else if(password.value.length < 8) {
				passError.style.color = 'red';
				passError.innerHTML = "Minimum 8 characters required";
				flag = 0;
			}
			else{
				passError.innerHTML = "";
			}

			var matchError = document.getElementById('matchError');

			if(password.value != passConfirm.value) {
				matchError.style.color = 'red';
				matchError.innerHTML = "Password do not match";	
				flag = 0;
			}
			else {
				matchError.innerHTML = "";
			}
	}

	function disableField(userTypes) {
			if (userTypes.value == "0")
				document.getElementById("regId").disabled = false;
			else{
				document.getElementById("regId").value = null;
				document.getElementById("regId").disabled = true;
			}
			userType = userTypes.value;
		}

	function regId() {
		var regId = document.forms['signupForm']['regId'];
		var regIdError = document.getElementById('regIdError');
		var type1 = document.getElementById('type1');
		
		if (type1.checked && regId.value == "") {
			regIdError.style.color = 'red';
			regIdError.innerHTML = "Registration No. Required";
			flag = 0;
		}
		else{
			regIdError.style.color = 'green';
			regIdError.innerHTML = "No need of Registration No.";
		}
		return flag;
	}

	function contact() {
		var contact = document.forms['signupForm']['contact'];
		var contactError = document.getElementById('contactError');

		if(contact.value=="") {
			contactError.style.color = 'red';
			contactError.innerHTML = "Phone No. Required"
			flag = 0;
		}

		else 
			 {
			 	contactError.innerHTML = "";
			 }
	}

	function gender() {
		var gender = document.forms['signupForm']['gender'];
		var genderError = document.getElementById('genderError');
		
		if(gender[0].checked==false && gender[1].checked == false) {
			genderError.style.color = 'red';
			genderError.innerHTML = "Please specify your gender"
			flag = 0;
		}

		else {
				genderError.innerHTML = "";
			 }
	}



	function validation() {
		name();
		username();
		email();
		password();
		regId();
		contact();
		gender();
		if(flag == 0) {
			return false;
		}
		else 
			return true;
	}
