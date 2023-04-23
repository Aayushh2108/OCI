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
    <title>ICC Team ODI Ranking</title>
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
  <h1 class="title">ICC Team ODI Ranking</h1>
 
  <h1>ICC ODI Team Rankings</h1>

  <p>New Zealand is ranked first in the ICC ODI Team Rankings 2022, followed by England at second place, Australia at the third place and India at the fourth place.&nbsp;</p>

  <div class="table-box"><table class="table" style="width: 100%; height: 553px;"> 
        <thead> 
         <tr class="table-head" style="height: 50px; background-color: #3598db;"> 
          <th class="table-head__cell u-text-right" style="width: 14.9584%; height: 50px; text-align: center;"><strong>Rank</strong></th> 
          <th class="table-head__cell rankings-table__team" style="width: 34.2105%; height: 50px; text-align: center;"><strong>Team</strong></th> 
          <th class="table-head__cell u-center-text" style="width: 27.9778%; height: 50px; text-align: center;"><strong><span class="u-hide-mobile">Matches/ Points&nbsp;</span></strong></th> 
          <th class="table-head__cell u-text-right rating" style="width: 22.8532%; height: 50px; text-align: center;"><strong>Rating</strong></th> 
         </tr> 
        </thead> 
        <tbody> 
         <tr class="rankings-block__banner" style="height: 50px;"> 
          <td class="rankings-block__banner--pos" style="width: 14.9584%; height: 50px; text-align: center;">1</td> 
          <td class="rankings-block__banner--team-name" style="width: 34.2105%; height: 50px; text-align: center;"><span class="u-hide-phablet">New Zealand</span></td> 
          <td class="rankings-block__banner--matches" style="width: 27.9778%; height: 50px; text-align: center;">12/ 1505</td> 
          <td class="rankings-block__banner--rating u-text-right" style="width: 22.8532%; height: 50px; text-align: center;">125</td> 
         </tr> 
         <tr class="table-body" style="height: 50px;" data-team-id="11"> 
          <td class="table-body__cell table-body__cell--position u-text-right" style="width: 14.9584%; height: 50px; text-align: center;">2</td> 
          <td class="table-body__cell rankings-table__team" style="width: 34.2105%; height: 50px; text-align: center;">&nbsp;<span class="u-hide-phablet">England</span></td> 
          <td class="table-body__cell u-center-text" style="width: 27.9778%; height: 50px; text-align: center;">19/ 2353</td> 
          <td class="table-body__cell u-text-right rating" style="width: 22.8532%; height: 50px; text-align: center;">124</td> 
         </tr> 
         <tr class="table-body" style="height: 50px;" data-team-id="15"> 
          <td class="table-body__cell table-body__cell--position u-text-right" style="width: 14.9584%; height: 50px; text-align: center;">3</td> 
          <td class="table-body__cell rankings-table__team" style="width: 34.2105%; height: 50px; text-align: center;">&nbsp;<span class="u-hide-phablet">Australia</span></td> 
          <td class="table-body__cell u-center-text" style="width: 27.9778%; height: 50px; text-align: center;">18/ 1929</td> 
          <td class="table-body__cell u-text-right rating" style="width: 22.8532%; height: 50px; text-align: center;">107</td> 
         </tr> 
         <tr class="table-body" style="height: 50px;" data-team-id="14"> 
          <td class="table-body__cell table-body__cell--position u-text-right" style="width: 14.9584%; height: 50px; text-align: center;">4</td> 
          <td class="table-body__cell rankings-table__team" style="width: 34.2105%; height: 50px; text-align: center;">&nbsp;<span class="u-hide-phablet">India</span></td> 
          <td class="table-body__cell u-center-text" style="width: 27.9778%; height: 50px; text-align: center;">22/2304</td> 
          <td class="table-body__cell u-text-right rating" style="width: 22.8532%; height: 50px; text-align: center;">105</td> 
         </tr> 
         <tr class="table-body" style="height: 50px;" data-team-id="19"> 
          <td class="table-body__cell table-body__cell--position u-text-right" style="width: 14.9584%; height: 50px; text-align: center;">5</td> 
          <td class="table-body__cell rankings-table__team" style="width: 34.2105%; height: 50px; text-align: center;">Pakistan</td> 
          <td class="table-body__cell u-center-text" style="width: 27.9778%; height: 50px; text-align: center;">16/1635</td> 
          <td class="table-body__cell u-text-right rating" style="width: 22.8532%; height: 50px; text-align: center;">102</td> 
         </tr> 
         <tr class="table-body" style="height: 50px;" data-team-id="20"> 
          <td class="table-body__cell table-body__cell--position u-text-right" style="width: 14.9584%; height: 50px; text-align: center;">6</td> 
          <td class="table-body__cell rankings-table__team" style="width: 34.2105%; height: 50px; text-align: center;">&nbsp;<span class="u-hide-phablet">South Africa</span></td> 
          <td class="table-body__cell u-center-text" style="width: 27.9778%; height: 50px; text-align: center;">19/ 1872</td> 
          <td class="table-body__cell u-text-right rating" style="width: 22.8532%; height: 50px; text-align: center;">99</td> 
         </tr> 
         <tr class="table-body" style="height: 50px;" data-team-id="22"> 
          <td class="table-body__cell table-body__cell--position u-text-right" style="width: 14.9584%; height: 50px; text-align: center;">7</td> 
          <td class="table-body__cell rankings-table__team" style="width: 34.2105%; height: 50px; text-align: center;">&nbsp;<span class="u-hide-phablet">Bangladesh</span></td> 
          <td class="table-body__cell u-center-text" style="width: 27.9778%; height: 50px; text-align: center;">24/ 2275</td> 
          <td class="table-body__cell u-text-right rating" style="width: 22.8532%; height: 50px; text-align: center;">95</td> 
         </tr> 
         <tr class="table-body" style="height: 50px;" data-team-id="21"> 
          <td class="table-body__cell table-body__cell--position u-text-right" style="width: 14.9584%; height: 50px; text-align: center;">8</td> 
          <td class="table-body__cell rankings-table__team" style="width: 34.2105%; height: 50px; text-align: center;">&nbsp;<span class="u-hide-phablet">Sri Lanka</span></td> 
          <td class="table-body__cell u-center-text" style="width: 27.9778%; height: 50px; text-align: center;">24/2086</td> 
          <td class="table-body__cell u-text-right rating" style="width: 22.8532%; height: 50px; text-align: center;">87</td> 
         </tr> 
         <tr class="table-body" style="height: 53px;" data-team-id="13"> 
          <td class="table-body__cell table-body__cell--position u-text-right" style="width: 14.9584%; height: 53px; text-align: center;">9</td> 
          <td class="table-body__cell rankings-table__team" style="width: 34.2105%; height: 53px; text-align: center;"> <p><span class="u-hide-phablet">&nbsp;West Indies</span></p> </td> 
          <td class="table-body__cell u-center-text" style="width: 27.9778%; height: 53px; text-align: center;">26/ 1885</td> 
          <td class="table-body__cell u-text-right rating" style="width: 22.8532%; height: 53px; text-align: center;">73</td> 
         </tr> 
         <tr class="table-body" style="height: 50px;" data-team-id="17"> 
          <td class="table-body__cell table-body__cell--position u-text-right" style="width: 14.9584%; height: 50px; text-align: center;">10</td> 
          <td class="table-body__cell rankings-table__team" style="width: 34.2105%; height: 50px; text-align: center;">&nbsp;<span class="u-hide-phablet">Afghanistan</span></td> 
          <td class="table-body__cell u-center-text" style="width: 27.9778%; height: 50px; text-align: center;">15/ 986</td> 
          <td class="table-body__cell u-text-right rating" style="width: 22.8532%; height: 50px; text-align: center;">66</td> 
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
