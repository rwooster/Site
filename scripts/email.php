<?php
	require_once "/home/rwooster/php/Mail.php";
	
	$field = filter_var( $_POST['email'], FILTER_SANITIZE_EMAIL );

	if ( filter_var( $field, FILTER_VALIDATE_EMAIL ) ) {
		$to = 'ryan@rwooster.com';
		$header['From'] = $_POST['email'];
		$header['To'] = 'ryan@rwooster.com';
		$header['Subject'] = $_POST['subject'];
		$message = $_POST['message'];
		
		$smpt['host'] = 'shane.asmallorange.com';
		$smpt['port'] = '465';
		$smpt['auth'] = true;
		$smpt['username'] = 'rwooster';
		$smpt['password'] = '.Ssjdon186.';
		
		$mailObj = &Mail::factory( "smtp", $smtp );
		$mail = $mailObj -> send( $to, $header, $message );
			
		header("Location: ../contact.php");	
	} else {
		echo "<html>
			<head>
			<title>Error</title>
			<script type=\"text/javascript\">
				function error() {
					window.alert( \"Invalid email.\" );
					window.location.replace(\"../contact.php\");
			}
			</script>
			</head>
			<body onload=\"error()\">
			</body>
			</html>";
	}
 ?>