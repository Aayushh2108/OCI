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
    <title>World Cup</title>
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
  <h1 class="title">Welcome to the Online Cricket Information</h1>

<div id="app" class="container">


<a href="odi.php">
<card data-image="https://th.bing.com/th/id/OIP._8ax8LZfTP7vfctc2iUSbQAAAA?w=169&h=180&c=7&r=0&o=5&dpr=1.25&pid=1.7">
  <h1 slot="header">ODI</h1>
  <p slot="content">ODI Matches</p>
</card>
</a>

<a href="t-20.php">
<card data-image="https://th.bing.com/th/id/OIP.3ThrWgiOTVCazH24m6-mvQHaI1?w=140&h=182&c=7&r=0&o=5&dpr=1.25&pid=1.7">
  <h1 slot="header">T-20</h1>
  <p slot="content">T-20 Matches</p>
</card>
</a>

</div>


<script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.0.1/vue.min.js'></script><script  src="../script.js"></script>
</body>
</html>
