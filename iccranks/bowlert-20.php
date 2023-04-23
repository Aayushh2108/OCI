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
    <title>Bowler T-20 Ranking</title>
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
  <h1 class="title">Bowler T-20 Ranking</h1>

  <h1>ICC T20I Player Rankings </h1>

  <div class="col-4 col-12-desk touch-scroll-list__element"> 
   <div class="rankings-block__container " data-cricket-role="bowling" data-cricket-scope="t20i" data-page-size="10" data-link-to="/rankings/mens/player-rankings/t20i/bowling" data-title="T20I Bowling Rankings" data-player-rankings-card=""> 
    <div class="rankings-block__banner"> 
     <div class="rankings-block__title-container"> 
      <div class="rankings-block__type t-t20i">
        &nbsp; 
      </div> 
     </div> 
    </div> 
    <div class="table-box"><table class="table rankings-card-table" style="width: 100%; height: 550px;"> 
     <thead> 
      <tr style="height: 33px; background-color: #c99dcb;"> 
       <th style="width: 100%; height: 33px; text-align: center;" colspan="4"><strong>ICC T20I Bowling Rankings 2022</strong></th> 
      </tr> 
      <tr class="table-head" style="height: 33px; background-color: #c99dcb;"> 
       <th class="table-head__cell u-text-center" style="width: 14.1274%; height: 33px; text-align: center;"><strong>Rank</strong></th> 
       <th class="table-head__cell" style="width: 48.1994%; height: 33px; text-align: center;"><strong>Player</strong></th> 
       <th class="table-head__cell" style="width: 18.0055%; height: 33px; text-align: center;"><strong>Team&nbsp;</strong></th> 
       <th class="table-head__cell u-text-right" style="width: 19.6676%; height: 33px; text-align: center;"><strong>Rating</strong></th> 
      </tr> 
     </thead> 
     <tbody> 
      <tr style="height: 50px;"> 
       <td style="width: 14.1274%; height: 50px; text-align: center;"> 
        <div class="rankings-table__pos-container"> 
         <span class="rankings-table__pos-number">1</span> 
        </div> </td> 
       <td style="width: 48.1994%; height: 50px; text-align: center;">Tabraiz Shamsi</td> 
       <td style="width: 18.0055%; height: 50px; text-align: center;"><span class="table-body__logo-text">SA</span></td> 
       <td style="width: 19.6676%; height: 50px; text-align: center;">784</td> 
      </tr> 
      <tr style="height: 50px;"> 
       <td style="width: 14.1274%; text-align: center; height: 50px;"> 
        <div class="rankings-table__pos-container"> 
         <span class="rankings-table__pos-number">2&nbsp;</span> 
        </div> </td> 
       <td style="width: 48.1994%; text-align: center; height: 50px;">Adil Rashid</td> 
       <td style="width: 18.0055%; text-align: center; height: 50px;"><span class="table-body__logo-text">ENG</span></td> 
       <td style="width: 19.6676%; text-align: center; height: 50px;">746</td> 
      </tr> 
      <tr class="table-body" style="height: 33px;"> 
       <td class="table-body__cell table-body__cell--position u-text-right" style="width: 14.1274%; height: 33px; text-align: center;"> 
        <div class="rankings-table__pos-container"> 
         <span class="rankings-table__pos-number">3</span> 
        </div> </td> 
       <td class="table-body__cell name" style="width: 48.1994%; height: 33px; text-align: center;">Josh Hazlewood</td> 
       <td class="table-body__cell nationality-logo" style="width: 18.0055%; height: 33px; text-align: center;">&nbsp;<span class="table-body__logo-text">AUS</span></td> 
       <td class="table-body__cell u-text-right rating" style="width: 19.6676%; height: 33px; text-align: center;">737</td> 
      </tr> 
      <tr class="table-body" style="height: 50px;"> 
       <td class="table-body__cell table-body__cell--position u-text-right" style="width: 14.1274%; height: 50px; text-align: center;"> 
        <div class="rankings-table__pos-container"> 
         <span class="rankings-table__pos-number">4</span> 
        </div> </td> 
       <td class="table-body__cell name" style="width: 48.1994%; height: 50px; text-align: center;">Adam Zampa</td> 
       <td class="table-body__cell nationality-logo" style="width: 18.0055%; height: 50px; text-align: center;">&nbsp;<span class="table-body__logo-text">AUS</span></td> 
       <td class="table-body__cell u-text-right rating" style="width: 19.6676%; height: 50px; text-align: center;">719</td> 
      </tr> 
      <tr class="table-body" style="height: 50px;"> 
       <td class="table-body__cell table-body__cell--position u-text-right" style="width: 14.1274%; height: 50px; text-align: center;"> 
        <div class="rankings-table__pos-container"> 
         <span class="rankings-table__pos-number">5</span> 
        </div> </td> 
       <td class="table-body__cell name" style="width: 48.1994%; height: 50px; text-align: center;">Rashid Khan</td> 
       <td class="table-body__cell nationality-logo" style="width: 18.0055%; height: 50px; text-align: center;">&nbsp;<span class="table-body__logo-text">AFG</span></td> 
       <td class="table-body__cell u-text-right rating" style="width: 19.6676%; height: 50px; text-align: center;">714</td> 
      </tr> 
      <tr style="height: 50px;"> 
       <td style="width: 14.1274%; text-align: center; height: 50px;"> 
        <div class="rankings-table__pos-container"> 
         <span class="rankings-table__pos-number">6</span> 
        </div> </td> 
       <td style="width: 48.1994%; text-align: center; height: 50px;">Wanindu Hasaranga</td> 
       <td style="width: 18.0055%; text-align: center; height: 50px;">SL</td> 
       <td style="width: 19.6676%; text-align: center; height: 50px;">687</td> 
      </tr> 
      <tr class="table-body" style="height: 50px;"> 
       <td class="table-body__cell table-body__cell--position u-text-right" style="width: 14.1274%; height: 50px; text-align: center;"> 
        <div class="rankings-table__pos-container"> 
         <span class="rankings-table__pos-number">7</span> 
        </div> </td> 
       <td class="table-body__cell name" style="width: 48.1994%; height: 50px; text-align: center;">Anrich Nortje</td> 
       <td class="table-body__cell nationality-logo" style="width: 18.0055%; height: 50px; text-align: center;">&nbsp;SA</td> 
       <td class="table-body__cell u-text-right rating" style="width: 19.6676%; height: 50px; text-align: center;">655</td> 
      </tr> 
      <tr class="table-body" style="height: 50px;"> 
       <td class="table-body__cell table-body__cell--position u-text-right" style="width: 14.1274%; height: 50px; text-align: center;"> 
        <div class="rankings-table__pos-container"> 
         <span class="rankings-table__pos-number">8</span> 
        </div> </td> 
       <td class="table-body__cell name" style="width: 48.1994%; height: 50px; text-align: center;">Mujeeb Ur Rahman</td> 
       <td class="table-body__cell nationality-logo" style="width: 18.0055%; height: 50px; text-align: center;">&nbsp;AFG</td> 
       <td class="table-body__cell u-text-right rating" style="width: 19.6676%; height: 50px; text-align: center;">654</td> 
      </tr> 
      <tr class="table-body" style="height: 51px;"> 
       <td class="table-body__cell table-body__cell--position u-text-right" style="width: 14.1274%; height: 51px; text-align: center;"> 
        <div class="rankings-table__pos-container"> 
         <span class="rankings-table__pos-number">9</span> 
        </div> </td> 
       <td class="table-body__cell name" style="width: 48.1994%; height: 51px; text-align: center;">Nasum Ahmed</td> 
       <td class="table-body__cell nationality-logo" style="width: 18.0055%; height: 51px; text-align: center;">BAN</td> 
       <td class="table-body__cell u-text-right rating" style="width: 19.6676%; height: 51px; text-align: center;">637</td> 
      </tr> 
      <tr class="table-body" style="height: 50px;"> 
       <td class="table-body__cell table-body__cell--position u-text-right" style="width: 14.1274%; height: 50px; text-align: center;"> 
        <div class="rankings-table__pos-container"> 
         <span class="rankings-table__pos-number">10</span> 
        </div> </td> 
       <td class="table-body__cell name" style="width: 48.1994%; height: 50px; text-align: center;">Shaheen Afridi</td> 
       <td class="table-body__cell nationality-logo" style="width: 18.0055%; height: 50px; text-align: center;">&nbsp;<span class="table-body__logo-text">PAK</span></td> 
       <td class="table-body__cell u-text-right rating" style="width: 19.6676%; height: 50px; text-align: center;">634</td> 
      </tr> 
     </tbody> 
    </table></div> 
   </div> 
  </div>

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
