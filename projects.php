<?php
	require 'common.php';
	session_start();

	init( 'projects' );
?>

<div id="content">

<div id="left">
<div id="breadcrumb"><a href="index.php">Home</a> >> Projects</div>
<div class="post"> <h2>Projects</h2> 
<br>
I post almost all of my code onto <a href="https://github.com/rwooster">my GitHub</a>, so feel free
to take a look.</a>
<br><br>
<h3>Self Balancing Robot</h3>
<p>For my Embedded Systems Design class (EECS 373), I worked as part of a group of four to develop a self
balancing robot. This was a two wheeled robot with an onboard Actel Smartfusion board, which contains an ARM Cortex-M3
and an FPGA. The wheels were powered by two continuous rotation servos and feedback control was done using the input from the
Interial Measuring Unit (IMU), which had a 3 axis accelerometer and 3 axis gyroscope. The robot could also be wirelessly controlled 
from our base station using two Xbee modules. A Gamecube controller was connected to a second Smartfusion board on our base station. 
This base station also had an LCD graphics display which shows the current angle the robot is balancing at. </p>


<br><br>
<h3>This Website</h3>
<p>The initial HTML/CSS is based off of a template (link at the bottom
of each page) which I modified a bit for the general design and rewrote completely for most of the forms on
the site (e.g. the contact page, login page, etc). The website contains a contact form written in PHP
with Javascript validation, registration/login system written in PHP with MySQL and different features for different
user levels. Currently all approved users have access to a file upload system, where files can be uploaded/downloaded/
deleted in a DropBox like system and a basic chat-room with jQuery front-end and PHP/MySQL back-end. Also, admin accounts 
have access to a list of accounts waiting to be approved, with approve/deny buttons built to automatically update the user 
database. Other features are continually under construction.</p>
<br><br>

<h3>Nand2Tetris</h3>
<p><a href="http://nand2tetris.org/">Nand2Tetris</a> is an online, project focused book about learning 
about computers from First Principles. The book starts with a Nand logic gate, and covers topics 
through combinational and sequential logic, assembly programming, compiler and 
operating system construction. Projects involve processor design, an assembler and a compiler for 
toy language built specifically to work with the book. The eventual goal is to a have a basic 
compter that is functionally complete. There are 13 chapters in total, each focusing on a specific 
topic and with a related project that builds towards the finished computer. A suite of testing and
simulation software is available for no extra charge to help write and test each of the projects.
<br><br>
Currently, I have only finished through chapter 4, which means I've written all the different chips
used by the processor as well as some simple assembly programs. The next step for me is connecting
those chips in the processor, then writing an assembler. I plan to use the assembler as an
opportunity to begin learning Java. Unforunately, with school work, I haven't been able to make much
progress lately. You can see all of my code on my
<a href="https://github.com/rwooster/PersonalStuff/tree/master/nand2tetris">GitHub.</a>
</p>
<br><br>
<h3>Arduino</h3>
<p>The Arduino is an open-source microcontroller platform, designed to make set-up and loading 
 programs simple. I have an <a href="http://arduino.cc/en/Main/arduinoBoardUno">Arduino Uno</a>, 
 along with some LEDs and different sensors I've been playing with. I have been following an 
 <a href="http://dlnmh9ip6v2uc.cloudfront.net/datasheets/Kits/SFE03-0012-SIK.Guide-300dpi-01.pdf">
 introductory guide</a> provided by SparkFun to get a handle on some of the basics. Time is an issue
 again, so I haven't done as much as I would like, but you can see what I have written 
 <a href="https://github.com/rwooster/PersonalStuff/tree/master/ArduinoLearning">
 on my GitHub</a>. Most of this code is based of that provided in the guide, but edited by me for
 different functionality.
 </p>
</div>
<div class="clear2"></div>
</div>
<?php
	sidebar();
	footer();
?>
