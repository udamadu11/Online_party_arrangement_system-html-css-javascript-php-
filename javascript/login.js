	console.log("login");	
function loginform(){
	var name=document.getElementById("name").value;
	var password=document.getElementById("password").value;

	if(name =="") {
		alert("Enter the name");
		return false;
	}
	if(password =="") {
		alert("Enter the password");
		return false;
	}
}