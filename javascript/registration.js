	console.log("reg");
function registrationform() {
	var name=document.getElementById("name").value;
	var email=document.getElementById("email").value;
	var password=document.getElementById("password").value;
	var password2=document.getElementById("password2").value;

		if (name =="") {
			alert("Enter the Name");
			return false;
		}
		if (email ==""){
			alert("Enter the email");
			return false;
		}
		if (password =="") {
			alert("Enter the password");
			return false;
		}
		if (password2 =="") {
			alert("Re-Enter the password2");
			return false;
		}
}