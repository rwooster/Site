<?php
	session_start();
	require 'common.php';
	if ( $_SESSION['level'] != 'user' && $_SESSION['level'] != 'admin' ) {
		header( "Location: login.php" );
	}
	
	init( 'none' );
?>

<div id="content">

<div id="left">
<div id="breadcrumb"><a href="index.php">Home</a> >> <a href="#">Features</a> >> Uploads</div>
<div class="post"> <h2>Uploads</h2> 
<br>
<br>
<?php
	session_start();
	$location = "uploads/" . $_SESSION['username'];
	$handle = opendir($location);
	echo "<table id='tableButton'>";
	while (false !== ($entry = readdir($handle))) {
		if( $entry != '.' && $entry != '..' ) {
			echo "<tr>";
			echo "<td id='longRow'>";
			echo "<a href = scripts/download.php?file=" . $entry  . ">" . $entry . "</a>" . "<br>";
			echo "</td><td id='shortRow'>";
			echo "<form action=scripts/delete.php method=get>";
			echo "<input type='hidden' value='" . $entry . "' name='file'>";
			echo "<input type='submit' value='Delete'></form>";
			echo "</td></tr>";
		}
    }
	echo "</table>";
	closedir($handle);
?>
<br>
<form action="scripts/upload.php" method="post" enctype="multipart/form-data" id='submit'>
<p>
<label>Filename: </label><input type="file" name="file"><br><br>
<input type="submit" name="submit" value="Upload">
</p>
</form>
</div>
<div class="clear2"></div>
</div>
<?php
	sidebar();
	footer();
?>
