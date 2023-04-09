<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat:400,700'>

    <link rel="stylesheet" href="../style2.css">
</head>
<body>
<header class="header">
		<h1 class="logo"><a href="../welcome.php">OCI</a></h1>
      <ul class="main-nav">
          <li><a href="../welcome.php">Home</a></li>
          <li><a href="../about.php">About</a></li>
          <li><a href="../contact.php">Contact</a></li>
          <li><a href="../logout.php">Logout</a></li>
      </ul>
	</header>
  <h1 class="title">Test Information</h1>
  <h1 class="page-header__title" id="firstHeading">Test cricket</h1>

  <p><b>Test cricket</b> is the longest form of the sport of cricket.
   Test matches are played between national representative teams with "Test status", as determined by the International Cricket Council (ICC).
    The two teams of 11 players play a four-innings match, which nowadays lasts up to five days. 
    It is generally considered the most complete examination of teams' playing ability and endurance. 
    The origin of the name Test stems from the long, gruelling match being a "test" of the relative strength of the two sides.
</p>

<p>The first officially recognised Test match began on 15 March 1877, between England and Australia at the Melbourne Cricket Ground (MCG), where Australia won by 45 runs.
     A Test match to celebrate 100 years of Test cricket was held in Melbourne from 12 to 17 March 1977, in which Australia beat England by 45 runs—the same margin as that first Test.
</p>
<p>In October 2012, the International Cricket Council recast the playing conditions for Test matches, permitting day/night Test matches.</p>

<h1>Test Cricket playing teams</h1>
<ol>
    <li>Australia</li>
    <li> England </li>
    <li> New Zealand </li>
    <li> Pakistan</li>
    <li> West Indies </li>
    <li> India </li>
    <li> Sri Lanka </li>
    <li> Zimbabwe </li>
    <li> Bangladesh </li>
    <li> South Africa</li>
</ol>
<h1>Rules</h1>
<ul><li>Test cricket is when two teams of 11 players face off across five days. These five days are called a Test, and there are five Tests in the Ashes.</li> <br>
    <li>The winner of the coin toss on day one of a Test decides if they want to bat or bowl first.</li><br>
    <li>The batters will try to get as many runs (points) as possible and the bowlers will try to get a wicket (get the batter out).</li><br>
</ul>

<footer class="page-footer">
    <div class="footer-copyright">
      <div class="container">
        <span>Copyright © 2022 <a class="grey-text text-lighten-4" href="#" target="_blank">OCI</a> All rights reserved. Design and Developed by <a class="grey-text text-lighten-4" href="#">OCI</a></span>
        
      </div>
    </div>
</footer>

<script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.0.1/vue.min.js'></script><script  src="../script.js"></script>
</body>
</html>
