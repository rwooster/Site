<?php
	
	$user = $_POST['user'];

	$con = mysqli_connect( localhost, 'rwooster_userLi', 'xdrthn33!', 'rwooster_users' );
	$query = "DELETE FROM Users WHERE username='$user'";

	mysqli_query( $con, $query );

	mysqli_close( $con );

	header( 'Location: ../approve.php' );

?>
