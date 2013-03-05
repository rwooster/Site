<?php
	require 'common.php';
	session_start();

	init( 'contact' );
?>
<div id="content">

<div id="left">
<div id="breadcrumb"><a href="index.php">Home</a> >> Contact</div>
<div class="post"> <h2>Contact Me</h2> 
<br>
<br>

<div id="forms">
<form name="contact" action="/scripts/email.php" method="post" onSubmit="return checkContact()">
Name: <input type="text" name="name"><br><br>
Email: <input type="text" name="email"><br><br>
Subject: <input type="text" name="subject"><br><br>
Message: <textarea rows="10" cols="70" name="message"></textarea><br><br>
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
