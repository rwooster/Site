<?php
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if ( !ctype_alnum( $username ) ) {
		echo "<html>
			<head>
			<title>Error</title>
			<script type=\"text/javascript\">
				function error() {
					window.alert( \"Invalid username.\" );
					window.location.replace(\"../login.php\");
			}
			</script>
			</head>
			<body onload=\"error()\">
			</body>
			</html>";
	} else {
		$connection = mysqli_connect(localhost, 'rwooster_userLi', 'xdrthn33!', 'rwooster_users');
	
		$select = "SELECT * FROM Users WHERE username='$username' and password='$password'";
		$result = mysqli_query( $connection, $select );
		$level = $result->fetch_assoc();
		if ( mysqli_num_rows( $result ) == 1 ) {
			if ( $level['Level'] == 'pending' ) {
				echo "<html>
				<head>
				<title>Error</title>
				<script type=\"text/javascript\">
					function error() {
						window.alert( \"Your account is still awaiting activation.\" );
						window.location.replace(\"../login.php\");
					}
				</script>
				</head>
				<body onload=\"error()\">
				</body>
				</html>";
			} else {
				session_start();
				$_SESSION['level'] = $level['Level'];
				$_SESSION['username'] = $username;
				header( 'Location: ../index.php' );
			}
		} else {
			echo "<html>
			<head>
			<title>Error</title>
			<script type=\"text/javascript\">
				function error() {
					window.alert( \"Invalid username and/or password.\" );
					window.location.replace(\"../login.php\");
			}
			</script>
			</head>
			<body onload=\"error()\">
			</body>
			</html>";
		}
	}
?>
