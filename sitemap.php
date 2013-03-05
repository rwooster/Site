<?php
	session_start();
	require 'common.php';
	
	init( 'none' );
?>

<div id="content">

<div id="left">
<div id="breadcrumb"><a href="index.php">Home</a> >> <a href="#">Sitemap</a></div>
<div> <h2>Sitemap</h2> 
<br>
<br>
<p>
<div id='mapLi'>
<ul>
	<li><a href='index.php'>Home</a><br></li>
	<ul id='sq'>
		<li><a href="resume.php">Resume</a></li>
		<li><a href="projects.php">Projects</a></li>
		<li><a href="contact.php">Contact</a></li>
		<li><a href="features.php">Features</a></li>
		<ul id='sq'>
			<li><a href="uploads.php">Uploads</a></li>
<?php
	session_start();
	
	if ( $_SESSION['level'] == 'admin' ) {
		echo "<li><a href='approve.php'>Approve</a></li>";
	}
?>
		</ul>
	</ul>
</ul>
</div>
</p>

</div>
<div class="clear2"></div>
</div>
<?php
	sidebar();
	footer();
?>
