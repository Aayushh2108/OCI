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
    <title>Batsman Test Ranking</title>
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
  <h1 class="title">Batsman Test Ranking</h1>

  <h1>ICC Test Player Rankings </h1>

  <table class="table rankings-card-table" style="width: 100%; height: 547px;"> 
          <thead> 
           <tr style="height: 33px; background-color: #b96ad9;"> 
            <th style="width: 100%; height: 33px; text-align: center;" colspan="4"><strong>ICC Test Batting Rankings</strong></th> 
           </tr> 
           <tr class="table-head" style="height: 33px; background-color: #b96ad9;"> 
            <th class="table-head__cell u-text-center" style="width: 13.8504%; height: 33px; text-align: center;"><strong>Rank</strong></th> 
            <th class="table-head__cell" style="width: 48.0609%; height: 33px; text-align: center;"><strong>Player</strong></th> 
            <th class="table-head__cell" style="width: 17.59%; height: 33px; text-align: center;"><strong>Team&nbsp;</strong></th> 
            <th class="table-head__cell u-text-right" style="width: 20.4986%; height: 33px; text-align: center;"><strong>Rating</strong></th> 
           </tr> 
          </thead> 
          <tbody> 
           <tr style="height: 33px;"> 
            <td style="width: 13.8504%; height: 33px; text-align: center;"> 
             <div class="rankings-table__pos-container"> 
              <span class="rankings-table__pos-number">1</span> 
             </div> </td> 
            <td style="width: 48.0609%; height: 33px; text-align: center;">Marnus Labuschagne</td> 
            <td style="width: 17.59%; height: 33px; text-align: center;">AUS</td> 
            <td style="width: 20.4986%; height: 33px; text-align: center;">845</td> 
           </tr> 
           <tr class="table-body" style="height: 50px;"> 
            <td class="table-body__cell table-body__cell--position u-text-right" style="width: 13.8504%; height: 50px; text-align: center;"> 
             <div class="rankings-table__pos-container"> 
              <span class="rankings-table__pos-number">2</span> 
             </div> </td> 
            <td class="table-body__cell name" style="width: 48.0609%; height: 50px; text-align: center;">Steve Smith&nbsp;</td> 
            <td class="table-body__cell nationality-logo" style="width: 17.59%; height: 50px; text-align: center;">&nbsp;AUS</td> 
            <td class="table-body__cell u-text-right rating" style="width: 20.4986%; height: 50px; text-align: center;">844</td> 
           </tr> 
           <tr style="height: 45px;"> 
            <td style="width: 13.8504%; text-align: center; height: 45px;"> 
             <div class="rankings-table__pos-container"> 
              <span class="rankings-table__pos-number">3</span> 
             </div> </td> 
            <td style="width: 48.0609%; text-align: center; height: 45px;">Kane Williamson</td> 
            <td style="width: 17.59%; text-align: center; height: 45px;"><span class="table-body__logo-text">NZ</span></td> 
            <td style="width: 20.4986%; text-align: center; height: 45px;">843</td> 
           </tr> 
           <tr class="table-body" style="height: 50px;"> 
            <td class="table-body__cell table-body__cell--position u-text-right" style="width: 13.8504%; height: 50px; text-align: center;"> 
             <div class="rankings-table__pos-container"> 
              <span class="rankings-table__pos-number">4</span> 
             </div> </td> 
            <td class="table-body__cell name" style="width: 48.0609%; height: 50px; text-align: center;">Joe Root</td> 
            <td class="table-body__cell nationality-logo" style="width: 17.59%; height: 50px; text-align: center;">&nbsp;ENG</td> 
            <td class="table-body__cell u-text-right rating" style="width: 20.4986%; height: 50px; text-align: center;">815</td> 
           </tr> 
           <tr class="table-body" style="height: 53px;"> 
            <td class="table-body__cell table-body__cell--position u-text-right" style="width: 13.8504%; height: 53px; text-align: center;"> 
             <div class="rankings-table__pos-container"> 
              <span class="rankings-table__pos-number">5</span> 
             </div> </td> 
            <td class="table-body__cell name" style="width: 48.0609%; height: 53px; text-align: center;"> <p>Babar Azam</p> </td> 
            <td class="table-body__cell nationality-logo" style="width: 17.59%; height: 53px; text-align: center;">&nbsp;PAK</td> 
            <td class="table-body__cell u-text-right rating" style="width: 20.4986%; height: 53px; text-align: center;">781</td> 
           </tr> 
           <tr class="table-body" style="height: 50px;"> 
            <td class="table-body__cell table-body__cell--position u-text-right" style="width: 13.8504%; height: 50px; text-align: center;"> 
             <div class="rankings-table__pos-container"> 
              <span class="rankings-table__pos-number">6</span> 
             </div> </td> 
            <td class="table-body__cell name" style="width: 48.0609%; height: 50px; text-align: center;">Dimuth Karunaratne</td> 
            <td class="table-body__cell nationality-logo" style="width: 17.59%; height: 50px; text-align: center;">&nbsp;SL</td> 
            <td class="table-body__cell u-text-right rating" style="width: 20.4986%; height: 50px; text-align: center;">757</td> 
           </tr> 
           <tr class="table-body" style="height: 50px;"> 
            <td class="table-body__cell table-body__cell--position u-text-right" style="width: 13.8504%; height: 50px; text-align: center;"> 
             <div class="rankings-table__pos-container"> 
              <span class="rankings-table__pos-number">7</span> 
             </div> </td> 
            <td class="table-body__cell name" style="width: 48.0609%; height: 50px; text-align: center;">Usman Khawaja</td> 
            <td class="table-body__cell nationality-logo" style="width: 17.59%; height: 50px; text-align: center;"><span class="table-body__logo-text">AUS</span></td> 
            <td class="table-body__cell u-text-right rating" style="width: 20.4986%; height: 50px; text-align: center;">754</td> 
           </tr> 
           <tr class="table-body" style="height: 50px;"> 
            <td class="table-body__cell table-body__cell--position u-text-right" style="width: 13.8504%; height: 50px; text-align: center;"> 
             <div class="rankings-table__pos-container"> 
              <span class="rankings-table__pos-number">8</span> 
             </div> </td> 
            <td class="table-body__cell name" style="width: 48.0609%; height: 50px; text-align: center;">Rohit Sharma</td> 
            <td class="table-body__cell nationality-logo" style="width: 17.59%; height: 50px; text-align: center;">IND</td> 
            <td class="table-body__cell u-text-right rating" style="width: 20.4986%; height: 50px; text-align: center;">754</td> 
           </tr> 
           <tr class="table-body" style="height: 50px;"> 
            <td class="table-body__cell table-body__cell--position u-text-right" style="width: 13.8504%; height: 50px; text-align: center;"> 
             <div class="rankings-table__pos-container"> 
              <span class="rankings-table__pos-number">9</span> 
             </div> </td> 
            <td class="table-body__cell name" style="width: 48.0609%; height: 50px; text-align: center;">Travis Head</td> 
            <td class="table-body__cell nationality-logo" style="width: 17.59%; height: 50px; text-align: center;">AUS</td> 
            <td class="table-body__cell u-text-right rating" style="width: 20.4986%; height: 50px; text-align: center;">744</td> 
           </tr> 
           <tr class="table-body" style="height: 50px;"> 
            <td class="table-body__cell table-body__cell--position u-text-right" style="width: 13.8504%; height: 50px; text-align: center;"> 
             <div class="rankings-table__pos-container"> 
              <span class="rankings-table__pos-number">10</span> 
             </div> </td> 
            <td class="table-body__cell name" style="width: 48.0609%; height: 50px; text-align: center;">Virat Kohli</td> 
            <td class="table-body__cell nationality-logo" style="width: 17.59%; height: 50px; text-align: center;">&nbsp;IND</td> 
            <td class="table-body__cell u-text-right rating" style="width: 20.4986%; height: 50px; text-align: center;">742</td> 
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
