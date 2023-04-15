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
    <title>Stadium</title>
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
  <h1 class="title">Stadium</h1>

  <table>
    <thead class="b_tHeader">
        <tr>
        <th style="width:38px;" scope="col">RANK</th>
        <th style="width:341px;" scope="col">GROUND</th>
        <th style="width:68px;" scope="col">CAPACITY</th>
        <th scope="col">CITY</th>
        </tr>
    </thead>
    <tbody>
        <tr data-exp-noani="1">
            <td style="">1</td>
            <td style="">Narendra Modi Stadium</td>
            <td style="">132,000</td>
            <td style="">Ahmedabad</td>
        </tr>
        <tr data-exp-noani="1">
            <td style="">2</td>
            <td style="">Melbourne Cricket Ground</td>
            <td style="">100,024</td>
            <td style="">Melbourne</td>
        </tr>
        <tr data-exp-noani="1">
            <td style="">3</td>
            <td style="">Eden Gardens</td>
            <td style="">68,000</td>
            <td style="">Kolkata</td>
        </tr>
        <tr data-exp-noani="1">
            <td style="">4</td>
            <td style="">
                <span title="Shaheed Veer Narayan Singh International Cricket Stadium">Shaheed Veer Narayan Singh International Cricket St…</span>
            </td>
            <td style="">65,400</td>
            <td style="">Raipur</td>
        </tr>
        <tr data-exp-noani="1">
            <td style="">5</td>
            <td style="">Perth Stadium</td>
            <td style="">61,266</td>
            <td style="">Perth</td>
        </tr>
        <tr data-exp-noani="1">
            <td style="">6</td>
            <td style="">Rajiv Gandhi International Cricket Stadium</td>
            <td style="">55,000</td>
            <td style="">Hyderabad</td>
        </tr>
        <tr data-exp-noani="1">
            <td style="">6</td>
            <td style="">Greenfield International Stadium</td>
            <td style="">55,000</td>
            <td style="">Thiruvananthapuram</td>
        </tr>
        <tr data-exp-noani="1">
            <td style="">7</td>
            <td style="">Adelaide Oval</td>
            <td style="">53,583</td>
            <td style="">Adelaide</td>
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
