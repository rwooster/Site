<?php
	
	session_start();

	$location = "../uploads/" . $_SESSION['username'] . "/";
	
	if ($_FILES["file"]["error"] > 0) {	
		echo "Error: " . $_FILES["file"]["error"] . "<br>";
	} 
	if (file_exists( $location . $_FILES["file"]["name"])) {
		echo "<html>
			<head>
			<title>Error</title>
			<script type=\"text/javascript\">
				function error() {
					window.alert( \"File already exists.\" );
					window.location.replace(\"../uploads.php\");
			}
			</script>
			</head>
			<body onload=\"error()\">
			</body>
			</html>";
	} else {
		move_uploaded_file($_FILES['file']['tmp_name'], $location . $_FILES['file']['name']);
		header( 'Location: ../uploads.php' );
	}
?>
