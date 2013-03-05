<?php
	
	$username = $_POST['username'];
	$password = $_POST['password'];

	if ( !ctype_alnum( $username ) ) {
		echo "<html>
			<head>
			<title>Error</title>
			<script type=\"text/javascript\">
				function error() {
					window.alert( \"Username must only contain letters/numbers.\" );
					window.location.replace(\"../register.php\");
			}
			</script>
			</head>
			<body onload=\"error()\">
			</body>
			</html>";
	} else {	
		$con = mysqli_connect( localhost, 'rwooster_userLi', 'xdrthn33!', 'rwooster_users' );

		if (!$con) {
			die( 'Could not connect: ' . mysqli_error( $con ) );
		}
		$insert = "INSERT INTO Users ( Username, Password, Level ) VALUES ( '$username', '$password', 'pending')";
		$query = mysqli_query( $con, $insert );
		
		if ( !$query ) {
			die( 'Could not insert: ' . mysqli_error( $con ) );
		}
		header( 'Location: ../index.php' );

	}

?>
