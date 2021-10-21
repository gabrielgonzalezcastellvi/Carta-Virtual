function showPass() {
	var x = document.getElementById("show-pass");
	if (x.type === "password") {
		x.type = "text";
	} else {
		x.type = "password";
	}
}

