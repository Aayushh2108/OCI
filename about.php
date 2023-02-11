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
    <title>About</title>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat:400,700'><link rel="stylesheet" href="style2.css">
</head>
<body>
    <header class="header">
		<h1 class="logo"><a href="#">OCI</a></h1>
      <ul class="main-nav">
          <li><a href="welcome.php">Home</a></li>
          <li><a href="contact.php">Contact Us</a></li>
          <li><a href="about.php">About Us</a></li>
          <li><a href="logout.php">Logout</a></li>
      </ul>
	</header>
    <h1 class="title">About us</h1>

    <p class="para">OCI is an Indian cricket news website owned by Aayush. It features, news, articles and information coverage of cricket matches and stadium, player information and  rankings.</p>

    <p class="para">All materials provided on this site, including but not limited to all information, materials, functions text, logos, designs, images,  
         documents, services (collectively, the "Materials"), and the selection, arrangement and display thereof, are the copyrighted works of the Company/or its vendors or suppliers.</p>

         <footer class="page-footer">
    <div class="footer-copyright">
      <div class="container">
        <span>Copyright © 2022 <a class="grey-text text-lighten-4" href="#" target="_blank">OCI</a> All rights reserved.</span>
        <span class="right"> Design and Developed by <a class="grey-text text-lighten-4" href="#">OCI</a></span>
        </div>
    </div>
  </footer>
</body>
</html>
