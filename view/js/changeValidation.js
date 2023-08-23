function validate(pForm) {
	let flag = "";

	if (pForm.username.value === "") {
		document.getElementById("userErrMsg").innerHTML = "Please enter correnct username";
		flag = "Empty";
	}

	if (pForm.password.value === "") {
		document.getElementById("passErrMsg").innerHTML = "Please enter correct password";
		flag = "Empty";
	}

	if (pForm.newpassword.value === "") {
		document.getElementById("newpassErrMsg").innerHTML = "Please enter new password";
		flag = "Empty";
	}

	if (flag === "") {
		return true;
	}
	return false;
}