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
    <title>Bowler Test Ranking</title>
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
  <h1 class="title">Bowler Test Ranking</h1>

  <h1>ICC Test Player Rankings </h1>

  <table class="table rankings-card-table" style=" height: 549px; width: 107.113%;"> 
            <thead> 
             <tr style="background-color: #b96ad9; height: 33px;"> 
              <th style="width: 99.8219%; text-align: center; height: 33px;" colspan="4"><strong>ICC Test Bowling Rankings 2022</strong></th> 
             </tr> 
             <tr class="table-head" style="height: 33px; background-color: #b96ad9;"> 
              <th class="table-head__cell u-text-center" style="width: 18.471%; height: 33px; text-align: center;"><strong>Rank</strong></th> 
              <th class="table-head__cell" style="width: 39.3%; height: 33px; text-align: center;"><strong>Player</strong></th> 
              <th class="table-head__cell" style="width: 20.436%; height: 33px; text-align: center;"><strong>Team&nbsp;</strong></th> 
              <th class="table-head__cell u-text-right" style="width: 21.615%; height: 33px; text-align: center;"><strong>Rating</strong></th> 
             </tr> 
            </thead> 
            <tbody> 
             <tr style="height: 33px;"> 
              <td style="width: 18.471%; height: 33px; text-align: center;"><span class="rankings-table__pos-number">1</span></td> 
              <td style="width: 39.3%; height: 33px; text-align: center;">Pat Cummins</td> 
              <td style="width: 20.436%; height: 33px; text-align: center;">AUS</td> 
              <td style="width: 21.615%; height: 33px; text-align: center;">901</td> 
             </tr> 
             <tr class="table-body" style="height: 50px;"> 
              <td class="table-body__cell table-body__cell--position u-text-right" style="width: 18.471%; height: 50px; text-align: center;"><span class="rankings-table__pos-number">2</span></td> 
              <td class="table-body__cell name" style="width: 39.3%; height: 50px; text-align: center;">Ravichandran Ashwin</td> 
              <td class="table-body__cell nationality-logo" style="width: 20.436%; height: 50px; text-align: center;">&nbsp;<span class="table-body__logo-text">IND</span></td> 
              <td class="table-body__cell u-text-right rating" style="width: 21.615%; height: 50px; text-align: center;">850</td> 
             </tr> 
             <tr class="table-body" style="height: 50px;"> 
              <td class="table-body__cell table-body__cell--position u-text-right" style="width: 18.471%; height: 50px; text-align: center;"><span class="rankings-table__pos-number">3</span></td> 
              <td class="table-body__cell name" style="width: 39.3%; height: 50px; text-align: center;">Jasprit Bumrah</td> 
              <td class="table-body__cell nationality-logo" style="width: 20.436%; height: 50px; text-align: center;">&nbsp;<span class="table-body__logo-text">IND</span></td> 
              <td class="table-body__cell u-text-right rating" style="width: 21.615%; height: 50px; text-align: center;">830</td> 
             </tr> 
             <tr class="table-body" style="height: 50px;"> 
              <td class="table-body__cell table-body__cell--position u-text-right" style="width: 18.471%; height: 50px; text-align: center;"><span class="rankings-table__pos-number">4</span></td> 
              <td class="table-body__cell name" style="width: 39.3%; height: 50px; text-align: center;">Shaheen Afridi</td> 
              <td class="table-body__cell nationality-logo" style="width: 20.436%; height: 50px; text-align: center;">&nbsp;<span class="table-body__logo-text">PAK&nbsp;</span></td> 
              <td class="table-body__cell u-text-right rating" style="width: 21.615%; height: 50px; text-align: center;">827</td> 
             </tr> 
             <tr class="table-body" style="height: 50px;"> 
              <td class="table-body__cell table-body__cell--position u-text-right" style="width: 18.471%; height: 50px; text-align: center;"><span class="rankings-table__pos-number">5</span></td> 
              <td class="table-body__cell name" style="width: 39.3%; height: 50px; text-align: center;">Kyle Jamieson</td> 
              <td class="table-body__cell nationality-logo" style="width: 20.436%; height: 50px; text-align: center;"><span class="table-body__logo-text">NZ</span></td> 
              <td class="table-body__cell u-text-right rating" style="width: 21.615%; height: 50px; text-align: center;">820</td> 
             </tr> 
             <tr class="table-body" style="height: 50px;"> 
              <td class="table-body__cell table-body__cell--position u-text-right" style="width: 18.471%; height: 50px; text-align: center;"><span class="rankings-table__pos-number">6</span></td> 
              <td class="table-body__cell name" style="width: 39.3%; height: 50px; text-align: center;">Kagiso Rabada</td> 
              <td class="table-body__cell nationality-logo" style="width: 20.436%; height: 50px; text-align: center;">&nbsp;SA</td> 
              <td class="table-body__cell u-text-right rating" style="width: 21.615%; height: 50px; text-align: center;">818</td> 
             </tr> 
             <tr class="table-body" style="height: 50px;"> 
              <td class="table-body__cell table-body__cell--position u-text-right" style="width: 18.471%; height: 50px; text-align: center;"><span class="rankings-table__pos-number">7</span></td> 
              <td class="table-body__cell name" style="width: 39.3%; height: 50px; text-align: center;">Tim Southee</td> 
              <td class="table-body__cell nationality-logo" style="width: 20.436%; height: 50px; text-align: center;">&nbsp;NZ</td> 
              <td class="table-body__cell u-text-right rating" style="width: 21.615%; height: 50px; text-align: center;">790</td> 
             </tr> 
             <tr class="table-body" style="height: 50px;"> 
              <td class="table-body__cell table-body__cell--position u-text-right" style="width: 18.471%; height: 50px; text-align: center;"><span class="rankings-table__pos-number">8</span></td> 
              <td class="table-body__cell name" style="width: 39.3%; height: 50px; text-align: center;">Neil Wagner</td> 
              <td class="table-body__cell nationality-logo" style="width: 20.436%; height: 50px; text-align: center;">NZ</td> 
              <td class="table-body__cell u-text-right rating" style="width: 21.615%; height: 50px; text-align: center;">777</td> 
             </tr> 
             <tr class="table-body" style="height: 50px;"> 
              <td class="table-body__cell table-body__cell--position u-text-right" style="width: 18.471%; height: 50px; text-align: center;"><span class="rankings-table__pos-number">9</span></td> 
              <td class="table-body__cell name" style="width: 39.3%; height: 50px; text-align: center;">James Anderson</td> 
              <td class="table-body__cell nationality-logo" style="width: 20.436%; height: 50px; text-align: center;">&nbsp;ENG</td> 
              <td class="table-body__cell u-text-right rating" style="width: 21.615%; height: 50px; text-align: center;">765</td> 
             </tr> 
             <tr class="table-body" style="height: 50px;"> 
              <td class="table-body__cell table-body__cell--position u-text-right" style="width: 18.471%; height: 50px; text-align: center;"><span class="rankings-table__pos-number">10</span> 
               <div class="ranking-pos no-change">
                 &nbsp; 
               </div> </td> 
              <td class="table-body__cell name" style="width: 39.3%; height: 50px; text-align: center;">Josh Hazlewood</td> 
              <td class="table-body__cell nationality-logo" style="width: 20.436%; height: 50px; text-align: center;">AUS</td> 
              <td class="table-body__cell u-text-right rating" style="width: 21.615%; height: 50px; text-align: center;">752</td> 
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

<!-- partial -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.0.1/vue.min.js'></script><script  src="../script.js"></script>
</body>
</html>
