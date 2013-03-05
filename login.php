<?php
	require 'common.php';
	session_start();

	init( 'none' );
?>

<div id="content">

<div id="left">
<div id="breadcrumb"><a href="index.php">Home</a> >> <a href="#">Features</a> >> Login</div>
<div class="post"> <h2>Login</h2> 
<br>
<br>

<div id="forms">
<form name="login" action="/scripts/login.php" method="post" onSubmit="return checkLogin()">
Username: <input type="text" name="username"><br><br>
Password: <input type="password" name="password"><br><br>
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
