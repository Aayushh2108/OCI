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
    <title>Bowler Odi Ranking</title>
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
  <h1 class="title">Bowler Odi Ranking</h1>

  <h1>ICC ODI Player Rankings </h1>

  <table class="table rankings-card-table" style="width: 100%; height: 555px;"> 
          <thead> 
           <tr style="height: 33px; background-color: #807be9;"> 
            <th style="height: 33px; width: 100%; text-align: center;" colspan="4"><strong>ICC ODI Bowling Rankings 2022</strong></th> 
           </tr> 
           <tr class="table-head" style="height: 33px; background-color: #807be9;"> 
            <th class="table-head__cell u-text-center" style="width: 13.5734%; height: 33px; text-align: center;"><strong>Rank</strong></th> 
            <th class="table-head__cell" style="width: 48.1994%; height: 33px; text-align: center;"><strong>Player</strong></th> 
            <th class="table-head__cell" style="width: 17.1745%; height: 33px; text-align: center;"><strong>Team&nbsp;</strong></th> 
            <th class="table-head__cell u-text-right" style="width: 21.0526%; height: 33px; text-align: center;"><strong>Rating</strong></th> 
           </tr> 
          </thead> 
          <tbody> 
           <tr style="height: 39px;"> 
            <td style="width: 13.5734%; height: 39px; text-align: center;"> 
             <div class="rankings-table__pos-container"> 
              <span class="rankings-table__pos-number">1</span> 
             </div> </td> 
            <td style="width: 48.1994%; height: 39px; text-align: center;">Trent Boult</td> 
            <td style="width: 17.1745%; height: 39px; text-align: center;">NZ</td> 
            <td style="width: 21.0526%; height: 39px; text-align: center;">726</td> 
           </tr> 
           <tr class="table-body" style="height: 50px;"> 
            <td class="table-body__cell table-body__cell--position u-text-right" style="width: 13.5734%; height: 50px; text-align: center;"> 
             <div class="rankings-table__pos-container"> 
              <span class="rankings-table__pos-number">2</span> 
             </div> </td> 
            <td class="table-body__cell name" style="width: 48.1994%; height: 50px; text-align: center;">Chris Woakes</td> 
            <td class="table-body__cell nationality-logo" style="width: 17.1745%; height: 50px; text-align: center;">&nbsp;<span class="table-body__logo-text">ENG</span></td> 
            <td class="table-body__cell u-text-right rating" style="width: 21.0526%; height: 50px; text-align: center;">700</td> 
           </tr> 
           <tr class="table-body" style="height: 50px;"> 
            <td class="table-body__cell table-body__cell--position u-text-right" style="width: 13.5734%; height: 50px; text-align: center;"> 
             <div class="rankings-table__pos-container"> 
              <span class="rankings-table__pos-number">3</span> 
             </div> </td> 
            <td class="table-body__cell name" style="width: 48.1994%; height: 50px; text-align: center;">Josh Hazlewood</td> 
            <td class="table-body__cell nationality-logo" style="width: 17.1745%; height: 50px; text-align: center;">&nbsp;<span class="table-body__logo-text">AUS</span></td> 
            <td class="table-body__cell u-text-right rating" style="width: 21.0526%; height: 50px; text-align: center;">698</td> 
           </tr> 
           <tr> 
            <td style="width: 13.5734%; text-align: center;"> 
             <div class="rankings-table__pos-container"> 
              <span class="rankings-table__pos-number">4</span> 
             </div> </td> 
            <td style="width: 48.1994%; text-align: center;">Matt Henry</td> 
            <td style="width: 17.1745%; text-align: center;">NZ</td> 
            <td style="width: 21.0526%; text-align: center;">681</td> 
           </tr> 
           <tr class="table-body" style="height: 50px;"> 
            <td class="table-body__cell table-body__cell--position u-text-right" style="width: 13.5734%; height: 50px; text-align: center;"> 
             <div class="rankings-table__pos-container"> 
              <span class="rankings-table__pos-number">5</span> 
              <div class="ranking-pos down">
                &nbsp; 
              </div> 
             </div> </td> 
            <td class="table-body__cell name" style="width: 48.1994%; height: 50px; text-align: center;">Mujeeb Ur Rahman</td> 
            <td class="table-body__cell nationality-logo" style="width: 17.1745%; height: 50px; text-align: center;">&nbsp;<span class="table-body__logo-text">AFG</span></td> 
            <td class="table-body__cell u-text-right rating" style="width: 21.0526%; height: 50px; text-align: center;">679</td> 
           </tr> 
           <tr> 
            <td style="width: 13.5734%; text-align: center;"> 
             <div class="rankings-table__pos-container"> 
              <span class="rankings-table__pos-number">6</span> 
             </div> </td> 
            <td style="width: 48.1994%; text-align: center;">Jasprit Bumrah</td> 
            <td style="width: 17.1745%; text-align: center;">IND&nbsp;</td> 
            <td style="width: 21.0526%; text-align: center;">671</td> 
           </tr> 
           <tr class="table-body" style="height: 50px;"> 
            <td class="table-body__cell table-body__cell--position u-text-right" style="width: 13.5734%; height: 50px; text-align: center;"> 
             <div class="rankings-table__pos-container"> 
              <span class="rankings-table__pos-number">7</span> 
             </div> </td> 
            <td class="table-body__cell name" style="width: 48.1994%; height: 50px; text-align: center;">Shaheen Afridi</td> 
            <td class="table-body__cell nationality-logo" style="width: 17.1745%; height: 50px; text-align: center;">&nbsp;PAK</td> 
            <td class="table-body__cell u-text-right rating" style="width: 21.0526%; height: 50px; text-align: center;">661</td> 
           </tr> 
           <tr class="table-body" style="height: 50px;"> 
            <td class="table-body__cell table-body__cell--position u-text-right" style="width: 13.5734%; height: 50px; text-align: center;"> 
             <div class="rankings-table__pos-container"> 
              <span class="rankings-table__pos-number">8</span> 
             </div> </td> 
            <td class="table-body__cell name" style="width: 48.1994%; height: 50px; text-align: center;">Mehedi Hasan</td> 
            <td class="table-body__cell nationality-logo" style="width: 17.1745%; height: 50px; text-align: center;">&nbsp;<span class="table-body__logo-text">BAN</span></td> 
            <td class="table-body__cell u-text-right rating" style="width: 21.0526%; height: 50px; text-align: center;">657</td> 
           </tr> 
           <tr class="table-body" style="height: 50px;"> 
            <td class="table-body__cell table-body__cell--position u-text-right" style="width: 13.5734%; height: 50px; text-align: center;"> 
             <div class="rankings-table__pos-container"> 
              <span class="rankings-table__pos-number">9</span> 
             </div> </td> 
            <td class="table-body__cell name" style="width: 48.1994%; height: 50px; text-align: center;">Shakib Al Hasan</td> 
            <td class="table-body__cell nationality-logo" style="width: 17.1745%; height: 50px; text-align: center;"><span class="table-body__logo-text">BAN</span></td> 
            <td class="table-body__cell u-text-right rating" style="width: 21.0526%; height: 50px; text-align: center;">650</td> 
           </tr> 
           <tr class="table-body" style="height: 50px;"> 
            <td class="table-body__cell table-body__cell--position u-text-right" style="width: 13.5734%; height: 50px; text-align: center;"> 
             <div class="rankings-table__pos-container"> 
              <span class="rankings-table__pos-number">10</span> 
             </div> </td> 
            <td class="table-body__cell name" style="width: 48.1994%; height: 50px; text-align: center;">Rashid Khan</td> 
            <td class="table-body__cell nationality-logo" style="width: 17.1745%; height: 50px; text-align: center;">&nbsp;&nbsp;AFG</td> 
            <td class="table-body__cell u-text-right rating" style="width: 21.0526%; height: 50px; text-align: center;">646</td> 
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
