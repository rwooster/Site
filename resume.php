<?php
	require 'common.php';
	session_start();

	init('resume');
?>

<div id="content">

<div id="left">
<div id="breadcrumb"><a href="index.php">Home</a> >> Resume</div>
<div class="post"> 
<p><a href="resume 03-2013forInternet.pdf">A pdf version is available here</a>
<br><br>
<h2>Education</h2>
<p>University of Michigan
<br>
Expected Graduation: May 2015 
<br>
Major: Bachelor's of Engineering in Computer Science 
<br>
Minor: Mathematics (focus in Discrete Math)
</p>
<h2>Work Experience</h2>
<h3>Engineering Administration Computer Support - September 2012-Present</h3>
<h4>Tier 1 Helpdesk</h4>
<br>
<ul>
	<li>Troubleshoot and fix user issues with both Windows and Mac computers over email, over the 
	phone and in person.</li>
	<li>Configure a variety of different computers to our projector and sound systems for 
	presentations.<li>
	<li>Work with users to help adjust to the university switch to Google. Explained the use of 
	different applications and features offered by Google products.</li>
</ul>
<br>
<h3>Undergraduate Research Opportunity Program - September 2011 - April 2012</h3>
<h4>Research into Machine Learning</h4>
<br>
<ul>
	<li>Wrote Python scripts to format 1-5 megabyte text files to be compatible with our system.</li>
	<li>Worked with the open source python module <a href="http://orange.biolab.si/">Orange</a> 
	to develop a naive Bayes algorithm with over 90% accuracy.</li>
</ul>
<br>
<h2>Projects</h2>
<h3>Personal Website</h3>
<ul>
	<li>Developed personal website using HTML/CSS for design and layout, built off of a basic template.</li>
	<li>Wrote a registration and login system using a PHP and MySQL back-end with a front-end JavaScript validation system.</li>
	<li>Developed user features such as a file upload/management system and an administrator control panel for approving/denying new account 	requests.</li>
</ul>
<p>More details on my projects can be found on my <a href="projects.php">Projects</a> page.</p>
<br>
<h3>Familiar Technologies</h3>
<p><strong>Languages (experienced): </strong>C, C++
<br>
<strong>Languages (familiar): </strong>Verilog, Python
<br>
<strong>Languages (exposed to): </strong>LabVIEW, HTML/CSS
<br>
<strong>Other: </strong>Windows, Linux, Git, LaTeX
</div>
<div class="clear2"></div>
</div>
<?php
	sidebar();
	footer();
?>
