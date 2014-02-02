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
</p>
<h2>Work Experience</h2>
<h3>Lab Instructor - September 2013 - Present</h3>
<h4>Digital Logic Design</h4>
<br>
<ul>
	<li>Instruct students on lab material including programming an FPGA using Verilog.</li>
	<li>Provide support for students working on lab projects.</li>
</ul>
<br>
<h3>Altair Engineering - May 2013 - August 2013</h3>
<h4>Software Engineering Intern</h4>
<br>
<ul>
	<li>Designed and implemented a new input reader for the Ensight Gold Case-file format.</li>
	<li>Ran timing benchmarks and made changes to improve memory and time efficiency.</li>
	<li>Part of the design process of a new API, as well as doing much of the implementation work.</li>
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
<h3>Self-Balancing Robot</h3>
<ul>
	<li>Built a two wheeled self-balancing robot as part of a team using an ARM Cortex M-3 Processor and onboard FPGA.</li>
	<li>Wrote code to update LCD graphics display over a wireless communication.</li>
	<li>Programmed a feedback control system using a gyroscope and accelerometer for angle measurements.</li>
</ul>
<br>
<h2>Projects</h2>
<h3>Personal Website</h3>
<ul>
	<li>Developed personal website using HTML/CSS for design and layout, built off of a basic template.</li>
	<li>Wrote a registration and login system using a PHP and MySQL back-end with a front-end JavaScript validation system.</li>
	<li>Developed user features such as a file upload/management system and an administrator control panel for approving/denying new account requests.</li>
</ul>
<p>More details on my projects can be found on my <a href="projects.php">Projects</a> page.</p>
<br>
<h3>Familiar Technologies</h3>
<p><strong>Languages (experienced): </strong>C, C++
<br>
<strong>Languages (familiar): </strong>Verilog, Python, PHP, Arm Assembly
<br>
<strong>Languages (exposed to): </strong>LabVIEW, HTML/CSS, Javascript
<br>
<strong>Other: </strong>Windows, Linux, Git, Perforce, Visual Studio
</div>
<div class="clear2"></div>
</div>
<?php
	sidebar();
	footer();
?>
