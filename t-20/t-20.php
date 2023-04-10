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
    <title>T-20</title>
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
  <h1 class="title">T-20 Information</h1>
  <h1> Twenty20 International</h1>
  <p>Twenty20 (T20) is a shortened game format of cricket. At the professional level, it was introduced by the England and Wales Cricket Board (ECB) in 2003 for the inter-county competition. 
    In a Twenty20 game, the two teams have a single innings each, which is restricted to a maximum of 20 overs.</p> 

    <p>A Twenty20 International (T20I) is a form of cricket, played between two of the international members of the International Cricket Council (ICC), in which each team faces a maximum of twenty overs.
         The matches have top-class status and are the highest T20 standard. The game is played under the rules of Twenty20 cricket. 
         Starting from the format's inception in 2005, T20I status only applied to Full Members and some Associate Member teams. However, in April 2018,
          the ICC announced that it would grant T20I status to all its 105 members from 1 January 2019.</p>

          <h1>Twenty20 International teams</h1>
<ol>
    <li> Australia (17 February 2005)</li>
    <li> New Zealand (17 February 2005)</li>
    <li> England (13 June 2005)</li>
    <li> South Africa (21 October 2005)c</li>
    <li> West Indies (16 February 2006)</li>
    <li> Sri Lanka (15 June 2006)</li>
    <li> Pakistan (28 August 2006)</li>
    <li> Bangladesh (28 November 2006)</li>
    <li> Zimbabwe (28 November 2006) </li>
    <li> India (1 December 2006) </li>
</ol>
<h1>T20 Cricket Rules </h1>
<p>These are general rules for T20 cricket. The rules have change dsince playing this format first began, and chnages will continue as they format develops. </p>

<ol>
<li>There are twenty overs only per side.</li>
<li>Each bowlers is restricted to a maximum of four overs.</li>
<li>Fielding restrictions in the first six overs - two fielders outside
circle with a minimum of two stationary fielders.</li>
<li>Fielding restrictions for overs 7-20 - maximum five fielders
allowed outside of circle.</li>
<li>A 'no-ball' is worth 2 runs, and the batsman gets a free hit
after a no-ball.</li>
<li>Each side has just 80 minutes to get through their 20 overs.
There is 15 minutes between innings.</li>
<li>There are run penalties for each over which hasn't been bowled
in the allocated time.</li>
<li>The next batsman has 90 second after the fall of a wicket to
get to the crease.</li>
</ol>

<h1>Popular T20 Cricket Leagues in The World</h1>
<ol>
    <li>Indian Premier League (IPL)</li>
    <li>Tamil Nadu Premier League (TNPL)</li>
    <li>Karnataka Premier League (KPL) </li>
    <li> Big Bash League (BBL)</li>
    <li> Caribbean Premier League (CPL)</li>
    <li> Mzansi Super League (MSL)</li>
</ol>

<h1>T20 Records</h1>
<p>Delhi batsman Mohit Ahlawat scores 300 runs in T20, hits 14 fours and 39 sixes</p> 
<p>David Warner holds the record for scoring the most fifties in the Indian T20 League. 
    He is followed by Delhi's Shikhar Dhawan. Virat Kohli, Rohit Sharma and AB de Villiers - all have 40 or more half-centuries each.</p>

    <p> <b>cricketer Subodh Bhati</b> 
Delhi cricketer Subodh Bhati creates history, becomes first player to score double century in T20 cricket. Delhi cricketer Subodh Bhati creates history, becomes first player to score double century in T20 cricket-</p>

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
