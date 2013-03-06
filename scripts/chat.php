<?php
	session_start();
	$message = $_POST['message'];
	$user = $_SESSION['username'];

	$con = mysqli_connect( localhost, 'rwooster_userLi', 'xdrthn33!', 'rwooster_users' );

		if ( !$con ) {
			die( 'Could not connect: ' . mysqli_error( $con ) );
		}
		$insert = "INSERT INTO chat ( user, message ) VALUES ( '$user', '$message' )";
		$query = mysqli_query( $con, $insert );
		
		if ( !$query ) {
			die( 'Could not insert: ' . mysqli_error( $con ) );
		}
?>
