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
    <title>All-Rounder ODI Ranking</title>
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
  <h1 class="title">All-Rounder ODI Ranking</h1>

  <h1>ICC All-Rounder ODI Player Rankings </h1>

  <table class="table rankings-card-table" style="font-family: Lato; font-size: 14px; height: 617.985px; width: 100%;"> 
            <thead> 
             <tr style="height: 46.7969px; background-color: #807be9;"> 
              <th style="width: 100%; height: 46.7969px; text-align: center;" colspan="4"><strong>ICC ODI All-Rounder Rankings 2022</strong></th> 
             </tr> 
             <tr class="table-head" style="height: 46.7969px; background-color: #807be9;"> 
              <th class="table-head__cell u-text-center" style="width: 13.5734%; height: 33px; text-align: center;"><strong>Rank</strong></th> 
              <th class="table-head__cell" style="width: 48.1994%; height: 33px; text-align: center;"><strong>Player</strong></th> 
              <th class="table-head__cell" style="width: 17.1745%; height: 33px; text-align: center;"><strong>Team&nbsp;</strong></th> 
              <th class="table-head__cell u-text-right" style="width: 21.0526%; height: 33px; text-align: center;"><strong>Rating</strong></th> 
             </tr> 
            </thead> 
            <tbody> 
             <tr style="height: 46.7969px;"> 
              <td style="width: 13.5734%; height: 46.7969px; text-align: center;"><span class="rankings-table__pos-number">1</span></td> 
              <td style="width: 48.1994%; height: 46.7969px; text-align: center;">Shakib Al Hasan</td> 
              <td style="width: 17.1745%; height: 46.7969px; text-align: center;">BAN</td> 
              <td style="width: 21.0526%; height: 46.7969px; text-align: center;">419</td> 
             </tr> 
             <tr class="table-body" style="height: 50px;"> 
              <td class="table-body__cell table-body__cell--position u-text-right" style="width: 13.5734%; height: 50px; text-align: center;"><span class="rankings-table__pos-number">2</span></td> 
              <td class="table-body__cell name" style="width: 48.1994%; height: 50px; text-align: center;">Mohammad Nabi</td> 
              <td class="table-body__cell nationality-logo" style="width: 17.1745%; height: 50px; text-align: center;">&nbsp;<span class="table-body__logo-text">AFG</span></td> 
              <td class="table-body__cell u-text-right rating" style="width: 21.0526%; height: 50px; text-align: center;">295</td> 
             </tr> 
             <tr class="table-body" style="height: 50px;"> 
              <td class="table-body__cell table-body__cell--position u-text-right" style="width: 13.5734%; height: 50px; text-align: center;"><span class="rankings-table__pos-number">3</span></td> 
              <td class="table-body__cell name" style="width: 48.1994%; height: 50px; text-align: center;">Chris Woakes</td> 
              <td class="table-body__cell nationality-logo" style="width: 17.1745%; height: 50px; text-align: center;">&nbsp;<span class="table-body__logo-text">ENG</span></td> 
              <td class="table-body__cell u-text-right rating" style="width: 21.0526%; height: 50px; text-align: center;">282</td> 
             </tr> 
             <tr class="table-body" style="height: 50px;"> 
              <td class="table-body__cell table-body__cell--position u-text-right" style="width: 13.5734%; height: 50px; text-align: center;"><span class="rankings-table__pos-number">4</span></td> 
              <td class="table-body__cell name" style="width: 48.1994%; height: 50px; text-align: center;">Rashid Khan</td> 
              <td class="table-body__cell nationality-logo" style="width: 17.1745%; height: 50px; text-align: center;">&nbsp;<span class="table-body__logo-text">AFG</span></td> 
              <td class="table-body__cell u-text-right rating" style="width: 21.0526%; height: 50px; text-align: center;">282</td> 
             </tr> 
             <tr class="table-body" style="height: 50px;"> 
              <td class="table-body__cell table-body__cell--position u-text-right" style="width: 13.5734%; height: 50px; text-align: center;"><span class="rankings-table__pos-number">5</span></td> 
              <td class="table-body__cell name" style="width: 48.1994%; height: 50px; text-align: center;">Ben Stokes</td> 
              <td class="table-body__cell nationality-logo" style="width: 17.1745%; height: 50px; text-align: center;">&nbsp;<span class="table-body__logo-text">ENG</span></td> 
              <td class="table-body__cell u-text-right rating" style="width: 21.0526%; height: 50px; text-align: center;">276</td> 
             </tr> 
             <tr class="table-body" style="height: 50px;"> 
              <td class="table-body__cell table-body__cell--position u-text-right" style="width: 13.5734%; height: 50px; text-align: center;"><span class="rankings-table__pos-number">6</span></td> 
              <td class="table-body__cell name" style="width: 48.1994%; height: 50px; text-align: center;">Colin de Grandhomme</td> 
              <td class="table-body__cell nationality-logo" style="width: 17.1745%; height: 50px; text-align: center;">&nbsp;NZ</td> 
              <td class="table-body__cell u-text-right rating" style="width: 21.0526%; height: 50px; text-align: center;">262</td> 
             </tr> 
             <tr class="table-body" style="height: 50px;"> 
              <td class="table-body__cell table-body__cell--position u-text-right" style="width: 13.5734%; height: 50px; text-align: center;"><span class="rankings-table__pos-number">7</span></td> 
              <td class="table-body__cell name" style="width: 48.1994%; height: 50px; text-align: center;">Mitchell Santner</td> 
              <td class="table-body__cell nationality-logo" style="width: 17.1745%; height: 50px; text-align: center;">&nbsp;NZ</td> 
              <td class="table-body__cell u-text-right rating" style="width: 21.0526%; height: 50px; text-align: center;">260</td> 
             </tr> 
             <tr class="table-body" style="height: 50px;"> 
              <td class="table-body__cell table-body__cell--position u-text-right" style="width: 13.5734%; height: 50px; text-align: center;"><span class="rankings-table__pos-number">8</span></td> 
              <td class="table-body__cell name" style="width: 48.1994%; height: 50px; text-align: center;">Imad Wasim</td> 
              <td class="table-body__cell nationality-logo" style="width: 17.1745%; height: 50px; text-align: center;"><span class="table-body__logo-text">PAK</span></td> 
              <td class="table-body__cell u-text-right rating" style="width: 21.0526%; height: 50px; text-align: center;">248</td> 
             </tr> 
             <tr class="table-body" style="height: 77.5938px;"> 
              <td class="table-body__cell table-body__cell--position u-text-right" style="width: 13.5734%; height: 77.5938px; text-align: center;"><span class="rankings-table__pos-number">9</span></td> 
              <td class="table-body__cell name" style="width: 48.1994%; height: 77.5938px; text-align: center;">Mehedi Hasan</td> 
              <td class="table-body__cell nationality-logo" style="width: 17.1745%; height: 77.5938px; text-align: center;">&nbsp;BAN</td> 
              <td class="table-body__cell u-text-right rating" style="width: 21.0526%; height: 77.5938px; text-align: center;">233</td> 
             </tr> 
             <tr> 
              <td style="width: 13.5734%; text-align: center;"><span class="rankings-table__pos-number">10</span></td> 
              <td style="width: 48.1994%; text-align: center;">Ravindra Jadeja</td> 
              <td style="width: 17.1745%; text-align: center;">IND</td> 
              <td style="width: 21.0526%; text-align: center;">224</td> 
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
