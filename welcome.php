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
    <title>Welcome</title>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat:400,700'>

    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <header class="header">
		<h1 class="logo"><a href="welcome.php">OCI</a></h1>
      <ul class="main-nav">
          <li><a href="welcome.php">Home</a></li>
          <li><a href="contact.php">Contact Us</a></li>
          <li><a href="about.php">About Us</a></li>
          <li><a href="logout.php">Logout</a></li>
      </ul>
	</header>
  <h1 class="title">Welcome to the Online Cricket Information</h1>

<div id="app" class="container">



  <a href="worldcup/wlchome.php">
<card data-image="https://th.bing.com/th/id/OIP.rZY6LhW9W23y1LOAWsaJLgHaJG?w=168&h=207&c=7&r=0&o=5&dpr=1.25&pid=1.7">
  <h1 slot="header">World Cup</h1>
  <p slot="content">World Cup Information</p>
</card>
</a>



<a href="ipl/ipl.php">
<card data-image="https://images.thequint.com/thequint/2018-05/09739c09-50c6-4604-847e-e9d9c61de9b9/csk_photo.jpg?rect=0%2C0%2C4800%2C2700&auto=format%2Ccompress&fmt=webp">
  <h1 slot="header">IPL</h1>
  <p slot="content">IPL Information</p>
</card>
</a>

<a href="champ/champ.php">
  <card data-image="https://th.bing.com/th/id/OIP.zB3OPbeXa8t9a0QdPztvTwHaJ4?w=131&h=180&c=7&r=0&o=5&dpr=1.25&pid=1.7">
    <h1 slot="header">Champions Trophy</h1>
    <p slot="content">Champions Trophy Information</p>
  </card>
</a>
<a href="odi/odi.php">
  <card data-image="https://th.bing.com/th/id/OIP._8ax8LZfTP7vfctc2iUSbQAAAA?w=169&h=180&c=7&r=0&o=5&dpr=1.25&pid=1.7">
    <h1 slot="header">ODI</h1>
    <p slot="content">ODI Information</p>
  </card>
</a>

<a href="t-20/t-20.php">
  <card data-image="https://th.bing.com/th/id/OIP.3ThrWgiOTVCazH24m6-mvQHaI1?w=140&h=182&c=7&r=0&o=5&dpr=1.25&pid=1.7">
    <h1 slot="header">T-20</h1>
    <p slot="content">T-20 Information</p>
  </card>
</a>


<a href="test/test.php">
  <card data-image="https://th.bing.com/th/id/OIP.p2bGbDELClVrGD997RRK5QHaFf?w=239&h=180&c=7&r=0&o=5&dpr=1.25&pid=1.7">
    <h1 slot="header">Test</h1>
    <p slot="content">Test Information</p>
  </card>
</a>



<a href="iccranks/iccranks.php">
  <card data-image="https://th.bing.com/th/id/OIP.sTBRJxkfzA6XPAfJllxFTwHaFj?w=205&h=180&c=7&r=0&o=5&dpr=1.25&pid=1.7">
    <h1 slot="header">ICC Ranking</h1>
    <p slot="content">ICC Ranking</p>
  </card>
</a>



  <a href="std/std.php">
  <card data-image="https://th.bing.com/th/id/OIP.nAEymQ6MmJiVCzBA_dENbQHaED?w=330&h=180&c=7&r=0&o=5&dpr=1.25&pid=1.7">
    <h1 slot="header">Stadiam</h1>
    <p slot="content">Stadiams Information</p>
  </card>
  </a>


  <a href="news/news.php">
    <card data-image="https://www.bing.com/th?id=OIP.Fgqjbm4OLAoy-3SNbeotVQHaFf&w=290&h=215&c=8&rs=1&qlt=90&o=6&dpr=1.25&pid=3.1&rm=2">
      <h1 slot="header">News</h1>
      <p slot="content">Latest News</p>
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
<script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.0.1/vue.min.js'></script><script  src="script.js"></script>
</body>
</html>
