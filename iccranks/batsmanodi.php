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
    <title>Batsman ODI Ranking</title>
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
  <h1 class="title">Batsman ODI Ranking</h1>
  
  <h1>ICC ODI Player Rankings </h1>

  <table class="table rankings-card-table" style="width: 100%; height: 391px;"> 
          <thead> 
           <tr style="background-color: #807be9; height: 33px;"> 
            <th style="width: 100%; text-align: center; height: 33px;" colspan="4"><strong>ICC ODI Batting Rankings</strong></th> 
           </tr> 
           <tr class="table-head" style="background-color: #807be9; height: 33px;"> 
            <th class="table-head__cell u-text-center" style="width: 13.5734%; height: 33px; text-align: center;"><strong>Rank</strong></th> 
            <th class="table-head__cell" style="width: 48.0609%; height: 33px; text-align: center;"><strong>Player</strong></th> 
            <th class="table-head__cell" style="width: 17.313%; height: 33px; text-align: center;"><strong>Team&nbsp;</strong></th> 
            <th class="table-head__cell u-text-right" style="width: 21.0526%; height: 33px; text-align: center;"><strong>Rating</strong></th> 
           </tr> 
          </thead> 
          <tbody> 
           <tr style="height: 33px;"> 
            <td style="width: 13.5734%; text-align: center; height: 33px;"> 
             <div class="rankings-table__pos-container"> 
              <span class="rankings-table__pos-number">1</span> 
             </div> </td> 
            <td style="width: 48.0609%; text-align: center; height: 33px;">Babar Azam</td> 
            <td style="width: 17.313%; text-align: center; height: 33px;">PAK</td> 
            <td style="width: 21.0526%; text-align: center; height: 33px;">891</td> 
           </tr> 
           <tr class="table-body" style="height: 28px;"> 
            <td class="table-body__cell table-body__cell--position u-text-right" style="width: 13.5734%; text-align: center; height: 28px;"> 
             <div class="rankings-table__pos-container"> 
              <span class="rankings-table__pos-number">2</span> 
             </div> </td> 
            <td class="table-body__cell name" style="width: 48.0609%; text-align: center; height: 28px;">Virat Kohli</td> 
            <td class="table-body__cell nationality-logo" style="width: 17.313%; text-align: center; height: 28px;">&nbsp;<span class="table-body__logo-text">IND</span></td> 
            <td class="table-body__cell u-text-right rating" style="width: 21.0526%; text-align: center; height: 28px;">811</td> 
           </tr> 
           <tr class="table-body" style="height: 33px;"> 
            <td class="table-body__cell table-body__cell--position u-text-right" style="width: 13.5734%; text-align: center; height: 33px;"> 
             <div class="rankings-table__pos-container"> 
              <span class="rankings-table__pos-number">3</span> 
             </div> </td> 
            <td class="table-body__cell name" style="width: 48.0609%; text-align: center; height: 33px;">Imam-ul-Haq</td> 
            <td class="table-body__cell nationality-logo" style="width: 17.313%; text-align: center; height: 33px;">&nbsp;PAK</td> 
            <td class="table-body__cell u-text-right rating" style="width: 21.0526%; text-align: center; height: 33px;">795</td> 
           </tr> 
           <tr class="table-body" style="height: 33px;"> 
            <td class="table-body__cell table-body__cell--position u-text-right" style="width: 13.5734%; text-align: center; height: 33px;"> 
             <div class="rankings-table__pos-container"> 
              <span class="rankings-table__pos-number">4</span> 
             </div> </td> 
            <td class="table-body__cell name" style="width: 48.0609%; text-align: center; height: 33px;">Rohit Sharma</td> 
            <td class="table-body__cell nationality-logo" style="width: 17.313%; text-align: center; height: 33px;"><span class="table-body__logo-text">IND</span></td> 
            <td class="table-body__cell u-text-right rating" style="width: 21.0526%; text-align: center; height: 33px;">791</td> 
           </tr> 
           <tr class="table-body" style="height: 33px;"> 
            <td class="table-body__cell table-body__cell--position u-text-right" style="width: 13.5734%; text-align: center; height: 33px;"> 
             <div class="rankings-table__pos-container"> 
              <span class="rankings-table__pos-number">5</span> 
             </div> </td> 
            <td class="table-body__cell name" style="width: 48.0609%; text-align: center; height: 33px;">Quinton de Kock</td> 
            <td class="table-body__cell nationality-logo" style="width: 17.313%; text-align: center; height: 33px;">SA</td> 
            <td class="table-body__cell u-text-right rating" style="width: 21.0526%; text-align: center; height: 33px;">789</td> 
           </tr> 
           <tr class="table-body" style="height: 33px;"> 
            <td class="table-body__cell table-body__cell--position u-text-right" style="width: 13.5734%; text-align: center; height: 33px;"> 
             <div class="rankings-table__pos-container"> 
              <span class="rankings-table__pos-number">6</span> 
             </div> </td> 
            <td class="table-body__cell name" style="width: 48.0609%; text-align: center; height: 33px;">Jonny Bairstow</td> 
            <td class="table-body__cell nationality-logo" style="width: 17.313%; text-align: center; height: 33px;">&nbsp;<span class="table-body__logo-text">ENG</span></td> 
            <td class="table-body__cell u-text-right rating" style="width: 21.0526%; text-align: center; height: 33px;">775</td> 
           </tr> 
           <tr class="table-body" style="height: 33px;"> 
            <td class="table-body__cell table-body__cell--position u-text-right" style="width: 13.5734%; text-align: center; height: 33px;"> 
             <div class="rankings-table__pos-container"> 
              <span class="rankings-table__pos-number">7</span> 
             </div> </td> 
            <td class="table-body__cell name" style="width: 48.0609%; text-align: center; height: 33px;">Ross Taylor</td> 
            <td class="table-body__cell nationality-logo" style="width: 17.313%; text-align: center; height: 33px;">&nbsp;<span class="table-body__logo-text">NZ</span></td> 
            <td class="table-body__cell u-text-right rating" style="width: 21.0526%; text-align: center; height: 33px;">775</td> 
           </tr> 
           <tr class="table-body" style="height: 33px;"> 
            <td class="table-body__cell table-body__cell--position u-text-right" style="width: 13.5734%; text-align: center; height: 33px;"> 
             <div class="rankings-table__pos-container"> 
              <span class="rankings-table__pos-number">8</span> 
             </div> </td> 
            <td class="table-body__cell name" style="width: 48.0609%; text-align: center; height: 33px;">Rassie van der Dussen</td> 
            <td class="table-body__cell nationality-logo" style="width: 17.313%; text-align: center; height: 33px;">&nbsp;<span class="table-body__logo-text">SA</span></td> 
            <td class="table-body__cell u-text-right rating" style="width: 21.0526%; text-align: center; height: 33px;">769</td> 
           </tr> 
           <tr style="height: 33px;"> 
            <td style="width: 13.5734%; text-align: center; height: 33px;">9</td> 
            <td style="width: 48.0609%; text-align: center; height: 33px;">David Warner</td> 
            <td style="width: 17.313%; text-align: center; height: 33px;">AUS</td> 
            <td style="width: 21.0526%; text-align: center; height: 33px;">750</td> 
           </tr> 
           <tr style="height: 33px;"> 
            <td style="width: 13.5734%; text-align: center; height: 33px;"> 
             <div class="rankings-table__pos-container"> 
              <span class="rankings-table__pos-number">10</span> 
             </div> </td> 
            <td style="width: 48.0609%; text-align: center; height: 33px;">Aaron Finch</td> 
            <td style="width: 17.313%; text-align: center; height: 33px;">AUS</td> 
            <td style="width: 21.0526%; text-align: center; height: 33px;">745</td> 
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
