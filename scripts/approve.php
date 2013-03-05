<?php 
	
	$user = $_POST['user'];
	$con = mysqli_connect( localhost, 'rwooster_userLi', 'xdrthn33!', 'rwooster_users' );
	$query =  "UPDATE Users SET level='user' WHERE username='$user'";

	mysqli_query( $con, $query );

	$dir = "../uploads/" . $user;
	mkdir($dir, 0755);

	mysqli_close( $con );
	
	header( 'Location: ../approve.php' );

?>

