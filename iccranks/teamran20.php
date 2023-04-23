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
    <title>ICC Team T-20 Ranking</title>
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
  <h1 class="title">ICC Team T-20 Ranking</h1>

  <h1>ICC T-20 Team Rankings</h1>

  <strong>India continues to retain its top spot on the ICC T20 Team Rankings 2022 with 270 rating, followed by England and <span class="u-hide-phablet">Pakistan.</span></strong>

  <div class="table-box"><table class="table" style="width: 100%; height: 425.938px;"> 
   <thead> 
    <tr class="table-head" style="height: 33px; background-color: #3598db;"> 
     <th class="table-head__cell u-text-right" style="width: 15.651%; height: 33px; text-align: center;"><strong>Rank</strong></th> 
     <th class="table-head__cell rankings-table__team" style="width: 36.0111%; height: 33px; text-align: center;"><strong>Team</strong></th> 
     <th class="table-head__cell u-center-text" style="width: 27.9778%; height: 33px; text-align: center;"><strong><span class="u-hide-mobile">Matches/ Points&nbsp;</span></strong></th> 
     <th class="table-head__cell u-text-right rating" style="width: 20.3601%; height: 33px; text-align: center;"><strong>Rating</strong></th> 
    </tr> 
   </thead> 
   <tbody> 
    <tr class="rankings-block__banner" style="height: 37.75px;"> 
     <td class="rankings-block__banner--pos" style="width: 15.651%; height: 37.75px; text-align: center;">1</td> 
     <td class="rankings-block__banner--team-name" style="width: 36.0111%; height: 37.75px; text-align: center;"><span class="u-hide-phablet">India</span></td> 
     <td class="rankings-block__banner--points" style="width: 27.9778%; height: 37.75px; text-align: center;">30/ 8093</td> 
     <td class="rankings-block__banner--rating u-text-right" style="width: 20.3601%; height: 37.75px; text-align: center;">270</td> 
    </tr> 
    <tr class="table-body" style="height: 37.75px;" data-team-id="14"> 
     <td class="table-body__cell table-body__cell--position u-text-right" style="width: 15.651%; height: 37.75px; text-align: center;">2</td> 
     <td class="table-body__cell rankings-table__team" style="width: 36.0111%; height: 37.75px; text-align: center;">&nbsp;England</td> 
     <td class="table-body__cell u-center-text" style="width: 27.9778%; height: 37.75px; text-align: center;">28/ 7432</td> 
     <td class="table-body__cell u-text-right rating" style="width: 20.3601%; height: 37.75px; text-align: center;">265</td> 
    </tr> 
    <tr class="table-body" style="height: 38.75px;" data-team-id="20"> 
     <td class="table-body__cell table-body__cell--position u-text-right" style="width: 15.651%; height: 38.75px; text-align: center;">3</td> 
     <td class="table-body__cell rankings-table__team" style="width: 36.0111%; height: 38.75px; text-align: center;">&nbsp;<span class="u-hide-phablet">Pakistan</span></td> 
     <td class="table-body__cell u-center-text" style="width: 27.9778%; height: 38.75px; text-align: center;">30/ 7826</td> 
     <td class="table-body__cell u-text-right rating" style="width: 20.3601%; height: 38.75px; text-align: center;">261</td> 
    </tr> 
    <tr class="table-body" style="height: 37.75px;" data-team-id="16"> 
     <td class="table-body__cell table-body__cell--position u-text-right" style="width: 15.651%; height: 37.75px; text-align: center;">4</td> 
     <td class="table-body__cell rankings-table__team" style="width: 36.0111%; height: 37.75px; text-align: center;">South Africa</td> 
     <td class="table-body__cell u-center-text" style="width: 27.9778%; height: 37.75px; text-align: center;">25/ 6336</td> 
     <td class="table-body__cell u-text-right rating" style="width: 20.3601%; height: 37.75px; text-align: center;">253</td> 
    </tr> 
    <tr class="table-body" style="height: 37.75px;" data-team-id="19"> 
     <td class="table-body__cell table-body__cell--position u-text-right" style="width: 15.651%; height: 37.75px; text-align: center;">5</td> 
     <td class="table-body__cell rankings-table__team" style="width: 36.0111%; height: 37.75px; text-align: center;">&nbsp;Australia</td> 
     <td class="table-body__cell u-center-text" style="width: 27.9778%; height: 37.75px; text-align: center;">33/8270</td> 
     <td class="table-body__cell u-text-right rating" style="width: 20.3601%; height: 37.75px; text-align: center;">251</td> 
    </tr> 
    <tr class="table-body" style="height: 37.75px;" data-team-id="15"> 
     <td class="table-body__cell table-body__cell--position u-text-right" style="width: 15.651%; height: 37.75px; text-align: center;">6</td> 
     <td class="table-body__cell rankings-table__team" style="width: 36.0111%; height: 37.75px; text-align: center;">&nbsp;New Zealand</td> 
     <td class="table-body__cell u-center-text" style="width: 27.9778%; text-align: center; height: 37.75px;">28/ 6996</td> 
     <td class="table-body__cell u-text-right rating" style="width: 20.3601%; height: 37.75px; text-align: center;">250</td> 
    </tr> 
    <tr class="table-body" style="height: 37.75px;" data-team-id="17"> 
     <td class="table-body__cell table-body__cell--position u-text-right" style="width: 15.651%; height: 37.75px; text-align: center;">7</td> 
     <td class="table-body__cell rankings-table__team" style="width: 36.0111%; height: 37.75px; text-align: center;">&nbsp;<span class="u-hide-phablet">West Indies</span></td> 
     <td class="table-body__cell u-center-text" style="width: 27.9778%; height: 37.75px; text-align: center;">36/ 8622</td> 
     <td class="table-body__cell u-text-right rating" style="width: 20.3601%; height: 37.75px; text-align: center;">240</td> 
    </tr> 
    <tr style="height: 34.5px;"> 
     <td style="width: 15.651%; text-align: center; height: 34.5px;">8</td> 
     <td style="width: 36.0111%; text-align: center; height: 34.5px;">Bangladesh&nbsp;</td> 
     <td style="width: 27.9778%; text-align: center; height: 34.5px;">33/ 7680</td> 
     <td style="width: 20.3601%; text-align: center; height: 34.5px;">233</td> 
    </tr> 
    <tr class="table-body" style="height: 37.75px;" data-team-id="13"> 
     <td class="table-body__cell table-body__cell--position u-text-right" style="width: 15.651%; height: 37.75px; text-align: center;">9</td> 
     <td class="table-body__cell rankings-table__team" style="width: 36.0111%; height: 37.75px; text-align: center;">Sri Lanka</td> 
     <td class="table-body__cell u-center-text" style="width: 27.9778%; height: 37.75px; text-align: center;">33/ 7606</td> 
     <td class="table-body__cell u-text-right rating" style="width: 20.3601%; height: 37.75px; text-align: center;">230</td> 
    </tr> 
    <tr class="table-body" style="height: 55.4375px;" data-team-id="22"> 
     <td class="table-body__cell table-body__cell--position u-text-right" style="width: 15.651%; height: 55.4375px; text-align: center;">10</td> 
     <td class="table-body__cell rankings-table__team" style="width: 36.0111%; height: 55.4375px; text-align: center;"> <p><span class="u-hide-phablet">&nbsp;Afghanistan</span></p> </td> 
     <td class="table-body__cell u-center-text" style="width: 27.9778%; height: 55.4375px; text-align: center;">14/ 3167</td> 
     <td class="table-body__cell u-text-right rating" style="width: 20.3601%; height: 55.4375px; text-align: center;">226</td> 
    </tr> 
   </tbody> 
  </table></div> 

  <footer class="page-footer">
    <div class="footer-copyright">
      <div class="container">
        <span>Copyright © 2022 <a class="grey-text text-lighten-4" href="#" target="_blank">OCI</a> All rights reserved. Design and Developed by <a class="grey-text text-lighten-4" href="#">OCI</a></span>
        
      </div>
    </div>
</footer>

<!-- partial -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.0.1/vue.min.js'></script><script  src="../script.js"></script>
</body>
</html>
