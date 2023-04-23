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
    <title>All-Rounder T-20 Ranking</title>
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
  <h1 class="title">All-Rounder T-20 Ranking</h1>

  <h1>ICC T20I Player Rankings </h1>

  <table class="table rankings-card-table" style="font-family: Lato; font-size: 14px; width: 100%; height: 482px;"> 
       <thead> 
        <tr style="background-color: #c99dcb; height: 33px;"> 
         <th style="width: 100%; text-align: center; height: 33px;" colspan="4"><strong>ICC T20I All-Rounder Rankings 2022</strong></th> 
        </tr> 
        <tr class="table-head" style="background-color: #c99dcb; height: 33px;"> 
         <th class="table-head__cell u-text-center" style="width: 14.1274%; height: 33px; text-align: center;"><strong>Rank</strong></th> 
         <th class="table-head__cell" style="width: 48.1994%; height: 33px; text-align: center;"><strong>Player</strong></th> 
         <th class="table-head__cell" style="width: 18.0055%; height: 33px; text-align: center;"><strong>Team&nbsp;</strong></th> 
         <th class="table-head__cell u-text-right" style="width: 19.6676%; height: 33px; text-align: center;"><strong>Rating</strong></th> 
        </tr> 
       </thead> 
       <tbody> 
        <tr style="height: 50px;"> 
         <td style="width: 14.1274%; text-align: center; height: 50px;"><span class="rankings-table__pos-number">1</span></td> 
         <td style="width: 48.1994%; text-align: center; height: 50px;">Mohammad Nabi</td> 
         <td style="width: 18.0055%; text-align: center; height: 50px;">AFG</td> 
         <td style="width: 19.6676%; text-align: center; height: 50px;">276</td> 
        </tr> 
        <tr class="table-body" style="height: 50px;"> 
         <td class="table-body__cell table-body__cell--position u-text-right" style="width: 14.1274%; text-align: center; height: 50px;"><span class="rankings-table__pos-number">2</span></td> 
         <td class="table-body__cell name" style="width: 48.1994%; text-align: center; height: 50px;">Shakib Al Hasan</td> 
         <td class="table-body__cell nationality-logo" style="width: 18.0055%; text-align: center; height: 50px;">&nbsp;<span class="table-body__logo-text">BAN</span></td> 
         <td class="table-body__cell u-text-right rating" style="width: 19.6676%; text-align: center; height: 50px;">232</td> 
        </tr> 
        <tr style="height: 33px;"> 
         <td style="width: 14.1274%; text-align: center; height: 33px;"><span class="rankings-table__pos-number">3</span></td> 
         <td style="width: 48.1994%; text-align: center; height: 33px;">Moeen Ali</td> 
         <td style="width: 18.0055%; text-align: center; height: 33px;">ENG</td> 
         <td style="width: 19.6676%; text-align: center; height: 33px;">205</td> 
        </tr> 
        <tr class="table-body" style="height: 50px;"> 
         <td class="table-body__cell table-body__cell--position u-text-right" style="width: 14.1274%; text-align: center; height: 50px;"><span class="rankings-table__pos-number">4</span></td> 
         <td class="table-body__cell name" style="width: 48.1994%; text-align: center; height: 50px;">JJ Smit</td> 
         <td class="table-body__cell nationality-logo" style="width: 18.0055%; text-align: center; height: 50px;">&nbsp;<span class="table-body__logo-text">NAM</span></td> 
         <td class="table-body__cell u-text-right rating" style="width: 19.6676%; text-align: center; height: 50px;">177</td> 
        </tr> 
        <tr class="table-body" style="height: 50px;"> 
         <td class="table-body__cell table-body__cell--position u-text-right" style="width: 14.1274%; text-align: center; height: 50px;"><span class="rankings-table__pos-number">5</span></td> 
         <td class="table-body__cell name" style="width: 48.1994%; text-align: center; height: 50px;">Liam Livingstone</td> 
         <td class="table-body__cell nationality-logo" style="width: 18.0055%; text-align: center; height: 50px;">&nbsp;<span class="table-body__logo-text">ENG</span></td> 
         <td class="table-body__cell u-text-right rating" style="width: 19.6676%; text-align: center; height: 50px;">171</td> 
        </tr> 
        <tr style="height: 50px;"> 
         <td style="width: 14.1274%; text-align: center; height: 50px;"><span class="rankings-table__pos-number">6</span></td> 
         <td style="width: 48.1994%; text-align: center; height: 50px;">Rohan Mustafa</td> 
         <td style="width: 18.0055%; text-align: center; height: 50px;">UAE</td> 
         <td style="width: 19.6676%; text-align: center; height: 50px;">169</td> 
        </tr> 
        <tr class="table-body" style="height: 33px;"> 
         <td class="table-body__cell table-body__cell--position u-text-right" style="width: 14.1274%; text-align: center; height: 33px;"><span class="rankings-table__pos-number">7</span></td> 
         <td class="table-body__cell name" style="width: 48.1994%; text-align: center; height: 33px;">Glen Maxwell</td> 
         <td class="table-body__cell nationality-logo" style="width: 18.0055%; text-align: center; height: 33px;">AUS</td> 
         <td class="table-body__cell u-text-right rating" style="width: 19.6676%; text-align: center; height: 33px;">167</td> 
        </tr> 
        <tr class="table-body" style="height: 50px;"> 
         <td class="table-body__cell table-body__cell--position u-text-right" style="width: 14.1274%; text-align: center; height: 50px;"><span class="rankings-table__pos-number">8</span></td> 
         <td class="table-body__cell name" style="width: 48.1994%; text-align: center; height: 50px;">Zeeshan Maqsood</td> 
         <td class="table-body__cell nationality-logo" style="width: 18.0055%; text-align: center; height: 50px;">OMA</td> 
         <td class="table-body__cell u-text-right rating" style="width: 19.6676%; text-align: center; height: 50px;">158</td> 
        </tr> 
        <tr class="table-body" style="height: 50px;"> 
         <td class="table-body__cell table-body__cell--position u-text-right" style="width: 14.1274%; text-align: center; height: 50px;"><span class="rankings-table__pos-number">9</span></td> 
         <td class="table-body__cell name" style="width: 48.1994%; text-align: center; height: 50px;">Aiden Markram</td> 
         <td class="table-body__cell nationality-logo" style="width: 18.0055%; text-align: center; height: 50px;">&nbsp;SA</td> 
         <td class="table-body__cell u-text-right rating" style="width: 19.6676%; text-align: center; height: 50px;">156</td> 
        </tr> 
        <tr> 
         <td style="width: 14.1274%; text-align: center;"><span class="rankings-table__pos-number">10</span></td> 
         <td style="width: 48.1994%; text-align: center;">Dipendra Airee</td> 
         <td style="width: 18.0055%; text-align: center;">NEP</td> 
         <td style="width: 19.6676%; text-align: center;">152</td> 
        </tr> 
       </tbody> 
      </table>

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
