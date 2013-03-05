<?php
	require 'common.php';
	session_start();

	init( 'none' );
?>

<div id="content">

<div id="left">
<div id="breadcrumb"><a href="index.php">Home</a> >> <a href="#">Features</a> >> Register</div>
<div class="post"> <h2>Register</h2> 
<br>
<br>
<em>Usernames may only contain alphanumeric characters.</em><br><br>
<div id="forms">
<form name="register" action="/scripts/sendRegister.php" method="post" onSubmit="return checkRegister()">
Username: <input type="text" name="username"><br><br>
Password: <input type="password" name="password"><br><br>
Confirm Password: <input type="password" name="checkPass"><br><br>
<input type="submit" name='submit' value="Submit">
</form>
<br>
</div>

</div>
<div class="clear2"></div>
</div>
<?php
	sidebar();
	footer();
?>
