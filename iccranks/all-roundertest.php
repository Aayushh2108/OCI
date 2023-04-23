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
    <title>All-Rounder Test Ranking</title>
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
  <h1 class="title">All-Rounder Test Ranking</h1>

  <h1>ICC All-Rounder Test Player Rankings </h1>

  <table class="table rankings-card-table" style="width: 100%; height: 729.656px;"> 
          <thead> 
           <tr style="height: 51.7969px; background-color: #b96ad9;"> 
            <th style="width: 99.7238%; height: 51.7969px;" colspan="4"><strong><span>ICC Test All-Rounder Rankings 2022</span></strong></th> 
           </tr> 
           <tr class="table-head" style="height: 33px; background-color: #b96ad9;"> 
            <th class="table-head__cell u-text-center" style="width: 13.5273%; height: 33px; text-align: center;"><strong>Rank</strong></th> 
            <th class="table-head__cell" style="width: 48.008%; height: 33px; text-align: center;"><strong>Player</strong></th> 
            <th class="table-head__cell" style="width: 17.1746%; height: 33px; text-align: center;"><strong>Team&nbsp;</strong></th> 
            <th class="table-head__cell u-text-right" style="width: 21.014%; height: 33px; text-align: center;"><strong>Rating</strong></th> 
           </tr> 
          </thead> 
          <tbody> 
           <tr style="height: 49.25px;"> 
            <td style="width: 13.5273%; height: 49.25px; text-align: center;"> 
             <div class="rankings-table__pos-container"> 
              <span class="rankings-table__pos-number">1</span> 
             </div> </td> 
            <td style="width: 48.008%; height: 49.25px; text-align: center;"> <p>Ravindra Jadeja</p> </td> 
            <td style="width: 17.1746%; height: 49.25px; text-align: center;"><span class="table-body__logo-text">IND</span></td> 
            <td style="width: 21.014%; height: 49.25px; text-align: center;">385</td> 
           </tr> 
           <tr class="table-body" style="height: 74.625px;"> 
            <td class="table-body__cell table-body__cell--position u-text-right" style="width: 13.5273%; height: 74.625px; text-align: center;"> 
             <div class="rankings-table__pos-container"> 
              <span class="rankings-table__pos-number">2</span> 
              <div class="ranking-pos no-change">
                &nbsp; 
              </div> 
             </div> </td> 
            <td class="table-body__cell name" style="width: 48.008%; height: 74.625px; text-align: center;">Ravichandran Ashwin</td> 
            <td class="table-body__cell nationality-logo" style="width: 17.1746%; height: 74.625px; text-align: center;"><span class="table-body__logo-text">IND</span></td> 
            <td class="table-body__cell u-text-right rating" style="width: 21.014%; height: 74.625px; text-align: center;">341</td> 
           </tr> 
           <tr class="table-body" style="height: 49.25px;"> 
            <td class="table-body__cell table-body__cell--position u-text-right" style="width: 13.5273%; height: 49.25px; text-align: center;"> 
             <div class="rankings-table__pos-container"> 
              <span class="rankings-table__pos-number">3</span> 
             </div> </td> 
            <td class="table-body__cell name" style="width: 48.008%; height: 49.25px; text-align: center;">Jason Holder</td> 
            <td class="table-body__cell nationality-logo" style="width: 17.1746%; height: 49.25px; text-align: center;">WI</td> 
            <td class="table-body__cell u-text-right rating" style="width: 21.014%; height: 49.25px; text-align: center;">336</td> 
           </tr> 
           <tr class="table-body" style="height: 49.25px;"> 
            <td class="table-body__cell table-body__cell--position u-text-right" style="width: 13.5273%; height: 49.25px; text-align: center;"> 
             <div class="rankings-table__pos-container"> 
              <span class="rankings-table__pos-number">4</span> 
             </div> </td> 
            <td class="table-body__cell name" style="width: 48.008%; height: 49.25px; text-align: center;">Shakib Al Hasan</td> 
            <td class="table-body__cell nationality-logo" style="width: 17.1746%; height: 49.25px; text-align: center;">&nbsp;<span class="table-body__logo-text">BAN</span></td> 
            <td class="table-body__cell u-text-right rating" style="width: 21.014%; height: 49.25px; text-align: center;">311</td> 
           </tr> 
           <tr class="table-body" style="height: 74.625px;"> 
            <td class="table-body__cell table-body__cell--position u-text-right" style="width: 13.5273%; height: 74.625px; text-align: center;"> 
             <div class="rankings-table__pos-container"> 
              <span class="rankings-table__pos-number">5</span> 
             </div> </td> 
            <td class="table-body__cell name" style="width: 48.008%; height: 74.625px; text-align: center;">Ben Stokes</td> 
            <td class="table-body__cell nationality-logo" style="width: 17.1746%; height: 74.625px; text-align: center;">ENG</td> 
            <td class="table-body__cell u-text-right rating" style="width: 21.014%; height: 74.625px; text-align: center;">298</td> 
           </tr> 
           <tr class="table-body" style="height: 74.625px;"> 
            <td class="table-body__cell table-body__cell--position u-text-right" style="width: 13.5273%; height: 74.625px; text-align: center;"> 
             <div class="rankings-table__pos-container"> 
              <span class="rankings-table__pos-number">6</span> 
             </div> </td> 
            <td class="table-body__cell name" style="width: 48.008%; height: 74.625px; text-align: center;">Mitchell Starc</td> 
            <td class="table-body__cell nationality-logo" style="width: 17.1746%; height: 74.625px; text-align: center;">&nbsp; AUS</td> 
            <td class="table-body__cell u-text-right rating" style="width: 21.014%; height: 74.625px; text-align: center;">291</td> 
           </tr> 
           <tr class="table-body" style="height: 74.625px;"> 
            <td class="table-body__cell table-body__cell--position u-text-right" style="width: 13.5273%; height: 74.625px; text-align: center;"> 
             <div class="rankings-table__pos-container"> 
              <span class="rankings-table__pos-number">7</span> 
             </div> </td> 
            <td class="table-body__cell name" style="width: 48.008%; height: 74.625px; text-align: center;">Kyle Jamieson</td> 
            <td class="table-body__cell nationality-logo" style="width: 17.1746%; height: 74.625px; text-align: center;"><span class="table-body__logo-text">NZ</span></td> 
            <td class="table-body__cell u-text-right rating" style="width: 21.014%; height: 74.625px; text-align: center;">274</td> 
           </tr> 
           <tr class="table-body" style="height: 74.625px;"> 
            <td class="table-body__cell table-body__cell--position u-text-right" style="width: 13.5273%; height: 74.625px; text-align: center;"> 
             <div class="rankings-table__pos-container"> 
              <span class="rankings-table__pos-number">8</span> 
             </div> </td> 
            <td class="table-body__cell name" style="width: 48.008%; height: 74.625px; text-align: center;">Pat Cummins</td> 
            <td class="table-body__cell nationality-logo" style="width: 17.1746%; height: 74.625px; text-align: center;">&nbsp;<span class="table-body__logo-text">AUS</span></td> 
            <td class="table-body__cell u-text-right rating" style="width: 21.014%; height: 74.625px; text-align: center;">263</td> 
           </tr> 
           <tr class="table-body" style="height: 74.625px;"> 
            <td class="table-body__cell table-body__cell--position u-text-right" style="width: 13.5273%; height: 74.625px; text-align: center;"> 
             <div class="rankings-table__pos-container"> 
              <span class="rankings-table__pos-number">9</span> 
             </div> </td> 
            <td class="table-body__cell name" style="width: 48.008%; height: 74.625px; text-align: center;">Colin de Grandhomme</td> 
            <td class="table-body__cell nationality-logo" style="width: 17.1746%; height: 74.625px; text-align: center;"><span class="table-body__logo-text">NZ</span></td> 
            <td class="table-body__cell u-text-right rating" style="width: 21.014%; height: 74.625px; text-align: center;">245</td> 
           </tr> 
           <tr style="height: 49.3594px;"> 
            <td style="width: 13.5273%; height: 49.3594px; text-align: center;"> 
             <div class="rankings-table__pos-container"> 
              <span class="rankings-table__pos-number">10</span> 
             </div> </td> 
            <td style="width: 48.008%; height: 49.3594px; text-align: center;">Chris Woakes</td> 
            <td style="width: 17.1746%; height: 49.3594px; text-align: center;"><span class="table-body__logo-text">&nbsp;ENG</span></td> 
            <td style="width: 21.014%; height: 49.3594px; text-align: center;">239</td> 
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
