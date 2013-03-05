<?php
	session_start();
	ob_start();
	$file = "../uploads/" . $_SESSION['username'] . "/" . $_GET['file'];
	unlink( $file );

	header( 'Location: ../uploads.php' );
	ob_flush();
?>
