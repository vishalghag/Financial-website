<?php
	session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" type="text/css" href="_assets/css/style.css" />
</head>

<body>
<div id="header"></div>

<div class="menubar">
<ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="about_us.php">About Us</a></li>
  <li><a href="login.php">Login</a></li>
  <li><a href="procedure.php">Procedure</a></li>
  <li><a href="our_recruiters.php">Our Recruiters</a></li>
  <li><a href="stats.php">Statistics</a></li>
  <li><a href="contact_us.php">Contact Us</a></li>
</ul>
</div>

<div id="collegepic"></div>

<div id="section">
<div id="statusbar">
<div class="welcome-text">Welcome <?php
	if(isset($_SESSION['username']))
	{
    echo "<span>" .$_SESSION['username']. "</span>";
	}
	else
	{
		echo "<span>Guest</span>";
	}
	?></div></div>
<div id="innersection">
<h2 style="text-align:center">Login</h2>
<table border="0" style="margin-left:auto; margin-right:auto">
  <tbody>
    <tr>
      <td><a href="admin_login.php"><img src="_assets/images/admin-login.png" /></a></td>
      <td><a href="student_login.php"><img src="_assets/images/student-login.png" /></a></td>
      <td><a href="recruiter_login.php"><img src="_assets/images/recruiter-login.png" /></a></td>
    </tr>
  </tbody>
</table>
<table border="0" align="center">
<tr>
<td><?php
          if(isset($_GET['msg']))
          {
              $message = $_GET['msg'];
			  if($message == 1)
			  echo "<span class='success'>Your entry has been added successfully! Please login now.</span>";
			  if($message == 2)
			  echo "<span class='failed'>Invalid Username or Password!</span>";
			  if($message == 5)
			  echo "<span class='failed'>You are logged out successfully!</span>";
			  if($message == 6)
			  echo "<span class='failed'>Session timeout!</span>";
          }
      ?></td>
</tr>
</table>
</div>
</div>

<div class="footer">
<a href="index.php">Home</a> | <a href="about_us">About Us</a> | <a href="login.php">Login</a> | <a href="procedure.php">Procedure</a> | <a href="our_recruiters.php">Our Recruiters</a> | <a href="stats.php">Statistics</a> | <a href="contact_us.php">Contact Us</a><br />
Copyright ©2015 | All rights reserved. 
</div>
</body>
</html>