<?php
	session_start();
	require 'common.php';

	init( 'none' );
?>

<div id="content">

<div id="left">
<div id="breadcrumb"><a href="index.php">Home</a> >> <a href="#">Features</a></div>
<div class="post"> <h2>Website Features</h2> 
<br>
<br>
<p>
<a href=uploads.php>Upload/Manage your files.</a></p>
<br>
<?php
	session_start();
	
	if ( $_SESSION['level'] == 'admin' ) {
		echo "<h3>Administrative Features</h3><br><br>";
		echo "<p><a href=approve.php>Approve new accounts</a></p>";
	}
?>
</div>
<div class="clear2"></div>
</div>
<?php
	sidebar();
	footer();
?>
