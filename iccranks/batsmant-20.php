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
    <title>Batsman T-20 Ranking</title>
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
  <h1 class="title">Batsman T-20 Ranking</h1>

  <h1>ICC T20I Player Rankings</h1>

  <table class="table rankings-card-table" style="width: 100%; height: 549px;"> 
     <thead> 
      <tr style="height: 33px; background-color: #c99dcb;"> 
       <th style="width: 100%; height: 33px; text-align: center;" colspan="4"><strong>ICC T20I Batting Rankings 2022</strong></th> 
      </tr> 
      <tr class="table-head" style="height: 33px; background-color: #c99dcb;"> 
       <th class="table-head__cell u-text-center" style="width: 13.5734%; height: 33px; text-align: center;"><strong>Rank</strong></th> 
       <th class="table-head__cell" style="width: 48.1994%; height: 33px; text-align: center;"><strong>Player</strong></th> 
       <th class="table-head__cell" style="width: 17.313%; height: 33px; text-align: center;"><strong>Team&nbsp;</strong></th> 
       <th class="table-head__cell u-text-right" style="width: 20.9141%; height: 33px; text-align: center;"><strong>Rating</strong></th> 
      </tr> 
     </thead> 
     <tbody> 
      <tr style="height: 33px;"> 
       <td style="width: 13.5734%; height: 33px; text-align: center;"> 
        <div class="rankings-table__pos-container"> 
         <span class="rankings-table__pos-number">1</span> 
        </div> </td> 
       <td style="width: 48.1994%; height: 33px; text-align: center;">Babar Azam</td> 
       <td style="width: 17.313%; height: 33px; text-align: center;">PAK</td> 
       <td style="width: 20.9141%; height: 33px; text-align: center;">818</td> 
      </tr> 
      <tr class="table-body" style="height: 50px;"> 
       <td class="table-body__cell table-body__cell--position u-text-right" style="width: 13.5734%; height: 50px; text-align: center;"> 
        <div class="rankings-table__pos-container"> 
         <span class="rankings-table__pos-number">2</span> 
        </div> </td> 
       <td class="table-body__cell name" style="width: 48.1994%; height: 50px; text-align: center;">Aiden Markram</td> 
       <td class="table-body__cell nationality-logo" style="width: 17.313%; height: 50px; text-align: center;">&nbsp;SA</td> 
       <td class="table-body__cell u-text-right rating" style="width: 20.9141%; height: 50px; text-align: center;">796</td> 
      </tr> 
      <tr class="table-body" style="height: 50px;"> 
       <td class="table-body__cell table-body__cell--position u-text-right" style="width: 13.5734%; height: 50px; text-align: center;"> 
        <div class="rankings-table__pos-container"> 
         <span class="rankings-table__pos-number">3</span> 
        </div> </td> 
       <td class="table-body__cell name" style="width: 48.1994%; height: 50px; text-align: center;">Mohammad Rizwan</td> 
       <td class="table-body__cell nationality-logo" style="width: 17.313%; height: 50px; text-align: center;">&nbsp;<span class="table-body__logo-text">PAK</span></td> 
       <td class="table-body__cell u-text-right rating" style="width: 20.9141%; height: 50px; text-align: center;">794</td> 
      </tr> 
      <tr class="table-body" style="height: 50px;"> 
       <td class="table-body__cell table-body__cell--position u-text-right" style="width: 13.5734%; height: 50px; text-align: center;"> 
        <div class="rankings-table__pos-container"> 
         <span class="rankings-table__pos-number">4</span> 
        </div> </td> 
       <td class="table-body__cell name" style="width: 48.1994%; height: 50px; text-align: center;">Dawid Malan</td> 
       <td class="table-body__cell nationality-logo" style="width: 17.313%; height: 50px; text-align: center;">ENG</td> 
       <td class="table-body__cell u-text-right rating" style="width: 20.9141%; height: 50px; text-align: center;">728</td> 
      </tr> 
      <tr class="table-body" style="height: 50px;"> 
       <td class="table-body__cell table-body__cell--position u-text-right" style="width: 13.5734%; height: 50px; text-align: center;"> 
        <div class="rankings-table__pos-container"> 
         <span class="rankings-table__pos-number">5</span> 
        </div> </td> 
       <td class="table-body__cell name" style="width: 48.1994%; height: 50px; text-align: center;">Devon Conway</td> 
       <td class="table-body__cell nationality-logo" style="width: 17.313%; height: 50px; text-align: center;">&nbsp;NZ</td> 
       <td class="table-body__cell u-text-right rating" style="width: 20.9141%; height: 50px; text-align: center;">703</td> 
      </tr> 
      <tr class="table-body" style="height: 50px;"> 
       <td class="table-body__cell table-body__cell--position u-text-right" style="width: 13.5734%; height: 50px; text-align: center;"> 
        <div class="rankings-table__pos-container"> 
         <span class="rankings-table__pos-number">6</span> 
        </div> </td> 
       <td class="table-body__cell name" style="width: 48.1994%; height: 50px; text-align: center;">Aaron Finch</td> 
       <td class="table-body__cell nationality-logo" style="width: 17.313%; height: 50px; text-align: center;">&nbsp;<span class="table-body__logo-text">AUS</span></td> 
       <td class="table-body__cell u-text-right rating" style="width: 20.9141%; height: 50px; text-align: center;">692</td> 
      </tr> 
      <tr class="table-body" style="height: 50px;"> 
       <td class="table-body__cell table-body__cell--position u-text-right" style="width: 13.5734%; height: 50px; text-align: center;"> 
        <div class="rankings-table__pos-container"> 
         <span class="rankings-table__pos-number">7</span> 
        </div> </td> 
       <td class="table-body__cell name" style="width: 48.1994%; height: 50px; text-align: center;">Rassie van der Dussen</td> 
       <td class="table-body__cell nationality-logo" style="width: 17.313%; height: 50px; text-align: center;">&nbsp;<span class="table-body__logo-text">SA</span></td> 
       <td class="table-body__cell u-text-right rating" style="width: 20.9141%; height: 50px; text-align: center;">669</td> 
      </tr> 
      <tr class="table-body" style="height: 50px;"> 
       <td class="table-body__cell table-body__cell--position u-text-right" style="width: 13.5734%; height: 50px; text-align: center;"> 
        <div class="rankings-table__pos-container"> 
         <span class="rankings-table__pos-number">8</span> 
        </div> </td> 
       <td class="table-body__cell name" style="width: 48.1994%; height: 50px; text-align: center;">Martin Guptill</td> 
       <td class="table-body__cell nationality-logo" style="width: 17.313%; height: 50px; text-align: center;">&nbsp;<span class="table-body__logo-text">NZ</span></td> 
       <td class="table-body__cell u-text-right rating" style="width: 20.9141%; height: 50px; text-align: center;">658</td> 
      </tr> 
      <tr class="table-body" style="height: 50px;"> 
       <td class="table-body__cell table-body__cell--position u-text-right" style="width: 13.5734%; height: 50px; text-align: center;"> 
        <div class="rankings-table__pos-container"> 
         <span class="rankings-table__pos-number">9</span> 
        </div> </td> 
       <td class="table-body__cell name" style="width: 48.1994%; height: 50px; text-align: center;">Pathum Nissanka</td> 
       <td class="table-body__cell nationality-logo" style="width: 17.313%; height: 50px; text-align: center;">&nbsp;SL</td> 
       <td class="table-body__cell u-text-right rating" style="width: 20.9141%; height: 50px; text-align: center;">654</td> 
      </tr> 
      <tr> 
       <td style="width: 13.5734%; text-align: center;"> 
        <div class="rankings-table__pos-container"> 
         <span class="rankings-table__pos-number">10</span> 
        </div> </td> 
       <td style="width: 48.1994%; text-align: center;">Lokesh Rahul</td> 
       <td style="width: 17.313%; text-align: center;">IND</td> 
       <td style="width: 20.9141%; text-align: center;">646</td> 
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
