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
    <title>Bowler Ranking</title>
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
  <h1 class="title">Bowler Ranking</h1>

<div id="app" class="container">


<a href="bowlertest.php">
<card data-image="https://th.bing.com/th/id/OIP.h1KzD_Jssp30Xy_uf3koWQHaIF?w=155&h=180&c=7&r=0&o=5&dpr=1.25&pid=1.7">
  <h1 slot="header">Test Ranking</h1>
  <p slot="content">Bowler Test Ranking</p>
</card>
</a>

<a href="bowlerodi.php">
<card data-image="https://th.bing.com/th/id/OIP.zJWepzwnm7g1JtkDqoNeAgAAAA?w=136&h=180&c=7&r=0&o=5&dpr=1.25&pid=1.7">
  <h1 slot="header">ODI Ranking</h1>
  <p slot="content">Bowler ODI Ranking</p>
</card>
</a>


<a href="bowlert-20.php">
<card data-image="https://th.bing.com/th/id/OIP.evlf6xx19TWeoknsO3QZhwAAAA?w=169&h=180&c=7&r=0&o=5&dpr=1.25&pid=1.7">
  <h1 slot="header">T-20 Ranking</h1>
  <p slot="content">Bowler T-20 Ranking</p>
</card>
</a>


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
