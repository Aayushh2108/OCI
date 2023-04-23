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
    <title>ICC Team Test Ranking</title>
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
  <h1 class="title">ICC Team Test Ranking</h1>

  <h1>ICC Test Team Rankings</h1>

  <div class="articleSummery"> 
        <p>Australia solidified its place in the first position in the ICC Test Team Rankings 2022, followed by India at the second place and New Zealand at the third place.&nbsp;</p><div class="btf mob-ads" id="target-3"></div> 
        <div class="table-box"><table class="table" style="width: 100%; height: 533px;"> 
         <thead> 
          <tr class="table-head" style="height: 50px; background-color: #3598db;"> 
           <th class="table-head__cell u-text-right" style="width: 14.8199%; height: 50px; text-align: center;"><strong>Rank</strong></th> 
           <th class="table-head__cell rankings-table__team" style="width: 34.2105%; height: 50px; text-align: center;"><strong>Team</strong></th> 
           <th class="table-head__cell u-center-text" style="width: 27.8393%; height: 50px; text-align: center;"><strong><span class="u-hide-mobile">Matches/ Points&nbsp;</span></strong></th> 
           <th class="table-head__cell u-text-right rating" style="width: 23.1302%; height: 50px; text-align: center;"><strong>Rating</strong></th> 
          </tr> 
         </thead> 
         <tbody> 
          <tr class="rankings-block__banner" style="height: 50px;"> 
           <td class="rankings-block__banner--pos" style="width: 14.8199%; height: 50px; text-align: center;">1</td> 
           <td class="rankings-block__banner--team-name" style="width: 34.2105%; height: 50px; text-align: center;"><span class="u-hide-phablet">Australia</span></td> 
           <td class="rankings-block__banner--matches" style="width: 27.8393%; height: 50px; text-align: center;">19/2439</td> 
           <td class="rankings-block__banner--rating u-text-right" style="width: 23.1302%; height: 50px; text-align: center;">128</td> 
          </tr> 
          <tr class="table-body" style="height: 50px;" data-team-id="16"> 
           <td class="table-body__cell table-body__cell--position u-text-right" style="width: 14.8199%; height: 50px; text-align: center;">2</td> 
           <td class="table-body__cell rankings-table__team" style="width: 34.2105%; height: 50px; text-align: center;">India</td> 
           <td class="table-body__cell u-center-text" style="width: 27.8393%; height: 50px; text-align: center;">23/ 2736</td> 
           <td class="table-body__cell u-text-right rating" style="width: 23.1302%; height: 50px; text-align: center;">119</td> 
          </tr> 
          <tr class="table-body" style="height: 50px;" data-team-id="14"> 
           <td class="table-body__cell table-body__cell--position u-text-right" style="width: 14.8199%; height: 50px; text-align: center;">3</td> 
           <td class="table-body__cell rankings-table__team" style="width: 34.2105%; height: 50px; text-align: center;">New Zealand&nbsp;</td> 
           <td class="table-body__cell u-center-text" style="width: 27.8393%; height: 50px; text-align: center;">23/2552</td> 
           <td class="table-body__cell u-text-right rating" style="width: 23.1302%; height: 50px; text-align: center;">111</td> 
          </tr> 
          <tr class="table-body" style="height: 50px;" data-team-id="11"> 
           <td class="table-body__cell table-body__cell--position u-text-right" style="width: 14.8199%; height: 50px; text-align: center;">4</td> 
           <td class="table-body__cell rankings-table__team" style="width: 34.2105%; height: 50px; text-align: center;">&nbsp;<span class="u-hide-phablet">South Africa</span></td> 
           <td class="table-body__cell u-center-text" style="width: 27.8393%; height: 50px; text-align: center;">21/ 2306</td> 
           <td class="table-body__cell u-text-right rating" style="width: 23.1302%; height: 50px; text-align: center;">110</td> 
          </tr> 
          <tr class="table-body" style="height: 50px;" data-team-id="19"> 
           <td class="table-body__cell table-body__cell--position u-text-right" style="width: 14.8199%; height: 50px; text-align: center;">5</td> 
           <td class="table-body__cell rankings-table__team" style="width: 34.2105%; height: 50px; text-align: center;">&nbsp;Pakistan&nbsp;</td> 
           <td class="table-body__cell u-center-text" style="width: 27.8393%; height: 50px; text-align: center;">20/ 1865</td> 
           <td class="table-body__cell u-text-right rating" style="width: 23.1302%; height: 50px; text-align: center;">93</td> 
          </tr> 
          <tr class="table-body" style="height: 50px;" data-team-id="20"> 
           <td class="table-body__cell table-body__cell--position u-text-right" style="width: 14.8199%; height: 50px; text-align: center;">6</td> 
           <td class="table-body__cell rankings-table__team" style="width: 34.2105%; height: 50px; text-align: center;">&nbsp;England&nbsp;</td> 
           <td class="table-body__cell u-center-text" style="width: 27.8393%; height: 50px; text-align: center;">29/ 2551</td> 
           <td class="table-body__cell u-text-right rating" style="width: 23.1302%; height: 50px; text-align: center;">88</td> 
          </tr> 
          <tr class="table-body" style="height: 50px;" data-team-id="13"> 
           <td class="table-body__cell table-body__cell--position u-text-right" style="width: 14.8199%; height: 50px; text-align: center;">7</td> 
           <td class="table-body__cell rankings-table__team" style="width: 34.2105%; height: 50px; text-align: center;">&nbsp;<span class="u-hide-phablet">Sri Lanka</span></td> 
           <td class="table-body__cell u-center-text" style="width: 27.8393%; height: 50px; text-align: center;">17/ 1384</td> 
           <td class="table-body__cell u-text-right rating" style="width: 23.1302%; height: 50px; text-align: center;">81</td> 
          </tr> 
          <tr class="table-body" style="height: 50px;" data-team-id="21"> 
           <td class="table-body__cell table-body__cell--position u-text-right" style="width: 14.8199%; height: 50px; text-align: center;">8</td> 
           <td class="table-body__cell rankings-table__team" style="width: 34.2105%; height: 50px; text-align: center;">&nbsp;<span class="u-hide-phablet">West Indies</span></td> 
           <td class="table-body__cell u-center-text" style="width: 27.8393%; height: 50px; text-align: center;">22/1685</td> 
           <td class="table-body__cell u-text-right rating" style="width: 23.1302%; height: 50px; text-align: center;">77</td> 
          </tr> 
          <tr class="table-body" style="height: 50px;" data-team-id="22"> 
           <td class="table-body__cell table-body__cell--position u-text-right" style="width: 14.8199%; height: 50px; text-align: center;">9</td> 
           <td class="table-body__cell rankings-table__team" style="width: 34.2105%; height: 50px; text-align: center;">&nbsp;<span class="u-hide-phablet">Bangladesh</span></td> 
           <td class="table-body__cell u-center-text" style="width: 27.8393%; height: 50px; text-align: center;">16/ 823</td> 
           <td class="table-body__cell u-text-right rating" style="width: 23.1302%; height: 50px; text-align: center;">51</td> 
          </tr> 
          <tr class="table-body" style="height: 33px;" data-team-id="18"> 
           <td class="table-body__cell table-body__cell--position u-text-right" style="width: 14.8199%; height: 33px; text-align: center;">10</td> 
           <td class="table-body__cell rankings-table__team" style="width: 34.2105%; height: 33px; text-align: center;">&nbsp;<span class="u-hide-phablet">Zimbabwe</span></td> 
           <td class="table-body__cell u-center-text" style="width: 27.8393%; height: 33px; text-align: center;">6/ 148</td> 
           <td class="table-body__cell u-text-right rating" style="width: 23.1302%; height: 33px; text-align: center;">25</td> 
          </tr> 
         </tbody> 
        </table></div> 
       </div>

       
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
