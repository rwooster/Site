<?php
	
	
	$con = mysqli_connect( localhost, 'rwooster_userLi', 'xdrthn33!', 'rwooster_users' );

	if ( !$con ) {
		die( 'Could not connect: ' . mysqli_error( $con ) );
	}
	$query = "SELECT * FROM chat ORDER BY PID DESC LIMIT 15";
	$result = mysqli_query( $con, $query );
		
	if ( !$query ) {
		die( 'Could not find: ' . mysqli_error( $con ) );
	}

	while( $row = mysqli_fetch_row( $result ) ) {
		$res_arr[] = $row;
	}
	$res_arr = array_reverse( $res_arr );
		
	for( $i = 0; $i < 15; $i++ ) {
	//	echo $res_arr[$i][1] . " ::: " 
		echo $res_arr[$i][2] . ": " . $res_arr[$i][3];
		echo "<br>";
	}
?>
