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
    <title>Contact</title>
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
    <h1 class="title">Contact us</h1>
<p class="para">Phone :- 9876543210</p>

<p class="para">Email :- oci@gmail.com</p>

<footer class="page-footer">
    <div class="footer-copyright">
      <div class="container">
        <span>Copyright © 2022 <a class="grey-text text-lighten-4" href="#" target="_blank">OCI</a> All rights reserved.    </span>
        <span class="right"> Design and Developed by <a class="grey-text text-lighten-4" href="#">OCI</a></span>
        </div>
    </div>
  </footer>

</body>
</html>