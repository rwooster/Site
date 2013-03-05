<?php
	require 'common.php';
	session_start();

	init('home');
?>
<div id="content">

<div id="left">
<div id="breadcrumb">Home</div>
<div class="post"> <h2>About Me</h2> 
  <ul>
	<li>I'm a student studying Computer Science at the University of Michigan in Ann 
	Arbor. I'm minoring in mathematics, particularly focusing on discrete math topics such as 
	combinatorics, probability and graph theory.</li>
	<li>Currently I am a sophomore, taking Linear Algebra, Probability and Computer Organization 
	(Math 214, Math/Stats 425, EECS 370). Previously, I've taken up through multi-variable calculus, 
	Data Structures and Algorithms and Digital Logic Design (Math 215, EECS 281, EECS 270).</li>
	<li>I'm very interested in robotics and embedded programming. Generally, I'm right on the line 
	between hardware and software, almost more computer engineering than computer science. But I 
	like the variety offered by a CS degree, and am definitely interested in exploring new fields.
	</li>
	<li>In the future, I plan on taking Operating Systems, Networks, Microprocessor Systems Design,
	Embedded Control Systems, Computer Architecture Databases and Autonomous Robotics Lab while 
	filling in the rest with other EECS/Math classes I find interesting at the time.</li>
  </ul>
  </div>
  <div class="columns">
 <div class="col1">
 <h3 class="subhead">Resume</h3> 
 <p>Take a look at my resume for more specific information on some of my skills and past work
 experience.
 <br>
 <a href="resume.php">Resume</a></p>
 </div>
 <div class="col3">
<h3 class="subhead">Contact Me</h3>
  <p>Feel free to get in contact with me.
  <br>
  <a href="contact.php">Contact</a></p>
</div>
<div class="col2">
<h3 class="subhead">Projects</h3>
  <p>Look at some of the personal projects that I've worked on outside of class. All source code is
  posted to GitHub.
  <br>
  <a href="projects.php">Projects</a>
  </p>
</div>
</div>
<div class="clear2"></div>
 </div>
<?php
	sidebar();	
	footer();
?>
