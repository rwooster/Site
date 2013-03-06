function checkContact() {
	var nameCheck = document.forms["contact"]["name"].value;
	var emailCheck = document.forms["contact"]["email"].value;
	var subjectCheck = document.forms["contact"]["subject"].value;
	var messageCheck = document.forms["contact"]["message"].value;

	var atpos = emailCheck.indexOf("@");
	var dotpos = emailCheck.lastIndexOf(".");

	if ( nameCheck == null || nameCheck == "" ) {
		alert( "Please enter your name." );
		return false;
	} else if ( atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= emailCheck.length ) {
		alert("Not a valid e-mail address.");
		return false;
	} else if ( subjectCheck == null || subjectCheck == "" ) {
		alert( "Please enter a subject." );
		return false;
	} else if ( messageCheck == null || messageCheck == "" ) {
		alert( "Please enter a message." );
		return false;
	} else {
		return true;
	}
}

function checkLogin() {
	var user = document.forms["login"]["username"].value;
	var pass = document.forms["login"]["password"].value;
	
	if ( user == null || user == "" ) {
		alert( "Please enter your username." );
		return false;
	} else if ( pass == null || pass == "" ) {
		alert("Please enter your password.");
		return false;
	} else {
		return true;
    		}
	}

function checkRegister() {
	var user = document.forms["register"]["username"].value;
	var pass = document.forms["register"]["password"].value;
	var check = document.forms["register"]["checkPass"].value;
	
	if ( user == null || user == "" ) {
		alert( "Please enter your username." );
		return false;
	} else if ( user.length < 5 || user.length > 20 ) {
		alert ( "Username must be between 5 and 20 characters" );
		return false;
	} else if ( pass == null || pass == "" ) {
		alert( "Please enter your password." );
		return false;
	} else if ( check == null || check == "" ) {
		alert( "Please confirm your password." );
		return false;
	} else if ( check != pass ) {
		alert( "Passwords must match" );
		return false;
	} else {
		return true;
	}
}
