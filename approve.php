<?php
	session_start();
	require 'common.php';
	if (  $_SESSION['level'] != 'admin' ) {
		header( "Location: login.php" );
	}
	init( 'none' );
?>

<div id="content">

<div id="left">
<div id="breadcrumb"><a href="index.php">Home</a> >> <a href="#">Features</a> >> Approve</div>
<div class="post"> <h2>Account Requests</h2> 
<br>
<br>
<?php
	session_start();
	
	$con = mysqli_connect( localhost, 'rwooster_userLi', 'xdrthn33!', 'rwooster_users' );

	$query = "SELECT * FROM Users WHERE level='pending'";
	$result = mysqli_query( $con, $query );

	echo "<table>";
	while ( $row = mysqli_fetch_row( $result ) ) {
		echo "<tr>";
		echo "<td id='lesslongRow'>";
		echo $row[1];
		echo "</td><td id='shortRow'>";
		echo "<form name='approve' method=post action='scripts/approve.php'>";
		echo "<input type='hidden' name='user' value='" . $row[1] . "'>";
		echo "<input type='submit' value='Approve User'></form>";
		echo "</td><td id='shortRow'>";
		echo "<form name='deny' method=post action='scripts/deny.php'>";
		echo "<input type='hidden' name='user' value='" . $row[1] . "'>";
		echo "<input type='submit' value='Deny User'></form>";
		echo "</td></tr>";
	}
	echo "</table>";

	mysqli_close( $con );
?>
</div>
<div class="clear2"></div>
</div>
<?php
	sidebar();
	footer();
?>

