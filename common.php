<?php
	
	function init($active) {
		echo '<!DOCTYPE html>
		<html>
		<head>
		<title>Ryan Wooster</title>
		<link href="style.css" rel="stylesheet" type="text/css" />

		<script type="text/javascript" src="scripts/formChecks.js">
		</script>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js">
		</script>
		<script type="text/javascript" src="scripts/chat.js">
		</script>
		</head>

		<body>
		<div id="wrap">
		<div id="header">
		<div id="topbar">
		<div id="navigation">
  		<ul>
   			<li';
			if ( $active == 'home' ) {
				echo ' class="active"';
			}
	
			echo '><a href="index.php">Home</a></li>
   			<li';
			if ( $active == 'resume' ) {
				echo ' class="active"';
			}
	
			echo '><a href="resume.php">Resume</a></li>
   			<li';
			if ( $active == 'projects' ) {
				echo ' class="active"';
			}
			
			echo '><a href="projects.php">Projects</a></li>
    			<li';
			if ( $active == 'contact' ) {
				echo ' class="active"';
			}

			echo '><a href="contact.php">Contact</a></li>
 		</ul>
	</div>
	</div>
	<div id="subnav">';
	if ( $_SESSION["level"] == "user" || $_SESSION["level"] == "admin" ) {
		echo '<a href="#">' . $_SESSION["username"] . '</a> | <a href="scripts/logout.php"> Logout </a>';
	} else {
		echo '<a href="register.php">Register</a> | <a href="login.php">Login </a>';
	}
	echo '| <a href="sitemap.php">Sitemap</a> | 
	<a href="features.php">Features</a></div>

	<h1 id="sitename">Ryan Wooster </h1>
	</div>';
		
}

	function sidebar() {
		echo '<div id="sidebar">
		<h2>Site Features</h2>
		<ul>
		<li><a href="uploads.php">Uploads</a></li>
		</ul>';
		if ( $_SESSION['level'] == 'admin' ) {
			echo '<br><h2>Admin Features</h2>
			<ul>
				<li><a href="approve.php">Approve Accounts</a></li>
			</ul>';
		}
		echo '</div>
		<div class="clear"></div>';
	}

	function footer() {
		echo '</div>
		<div id="footer">
		<p>
		Apologies for any dead links found on the website. The site is continually under construction, 
		the feature probably has not been implemented yet.
		</p>
		<p id="credit">
		<!-- Removing this link back to Ramblingsoul.com will be violation of the Creative Commons Attribution 3.0 Unported License, under which this template is released for download -->
		<a href="http://ramblingsoul.com" title="Download High Quality CSS Layouts">CSS Layout</a> by RamblingSoul.com
		<!-- Copyright - Ramblingsoul.com -->
		</p></div>
		</div>
		</body>
		</html>';
	}
?>
