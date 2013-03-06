<?php
	require 'common.php';
	session_start();

	init( 'none' );
?>

<div id="content">

<div id="left">
<div id="breadcrumb"><a href="index.php">Home</a> >> <a href="features.php">Features</a> >> Chatroom</div>
<div class="post"> <h2>Chatroom</h2> 
<br>
<br>
<div id="chatWindow"> </div>
<br>
<form name='chat' id='chat' action='' onSubmit="sendMessage();return false;" method='post'>
<input type='text' name='message'>
<input type='submit' value="Send" id='button'>
</form>

</div>
<div class="clear2"></div>
</div>
<?php
	sidebar();
	footer();
?>
