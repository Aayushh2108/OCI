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
    <title>ODI Matches</title>
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
  <h1 class="title">ODI Matches</h1>
  <h1>Cricket World Cup Winners List</h1>
  <p>In 2007 Australia became the first team to win three consecutive World Cup tournaments.
    There are 12 World Cup tournaments being held till date. Australia is the most successful
    country which won 5 World Cups. India & West Indies are the only two countries which have won
    the world cup 2 times each. India won the World Cup in 1983 and 2011,
     while West Indies won in 1975 and 1979. The last world Cup held in 2019 was won by England.
  <br> Here is the list of Men's ODI Cricket World Cup winners from 1975 to 2021 with winners,
  runner-up, host country, total scores and final result for One Day International (ODI).  </p>
  <table>
    <tbody>
      <tr>
        <th colspan="7">Cricket World Cup Winners List (ODI)</th>
      </tr>
      <tr>
        <th><strong>Year</strong></th>
        <th><strong>Host</strong></th>
        <th><strong>Winner</strong></th>
        <th><strong>Score</strong></th>
        <th><strong>Runner-up</strong></th>
        <th><strong>Score</strong></th>
        <th><strong>Result</strong></th>
      </tr>
      <tr>
        <td>1975</td>
        <td>England</td>
        <td>West Indies</td>
        <td>291–8</td>
        <td>Australia</td>
        <td>274</td>
        <td>West Indies won by 17 runs</td>
      </tr>
      <tr>
        <td>1979</td>
        <td>England</td>
        <td>West Indies</td>
        <td>286–9</td>
        <td>England</td>
        <td>194</td>
        <td>West Indies won by 92 runs</td>
      </tr>
      <tr>
        <td>1983</td>
        <td>England</td>
        <td>India</td>
        <td>183</td>
        <td>West Indies</td>
        <td>140</td>
        <td>India won by 43 runs</td>
      </tr>
      <tr>
        <td>1987</td>
        <td>India and Pakistan</td>
        <td>Australia</td>
        <td>253–5</td>
        <td>England</td>
        <td>246–8</td>
        <td>Australia won by 7 runs</td>
      </tr>
      <tr>
        <td>1992</td>
        <td>Australia and New Zealand</td>
        <td>Pakistan</td>
        <td>249–6</td>
        <td>England</td>
        <td>227</td>
        <td>Pakistan won by 22 runs</td>
      </tr>
      <tr>
        <td>1996</td>
        <td>Pakistan and India</td>
        <td>Sri Lanka</td>
        <td>245–3</td>
        <td>Australia</td>
        <td>241</td>
        <td>Sri Lanka won by 7 wickets</td>
      </tr>
      <tr>
        <td>1999</td>
        <td>England</td>
        <td>Australia</td>
        <td>133–2</td>
        <td>Pakistan</td>
        <td>132</td>
        <td>Australia won by 8 wickets</td>
      </tr>
      <tr>
        <td>2003</td>
        <td>Soutd Africa</td>
        <td>Australia</td>
        <td>359–2</td>
        <td>India</td>
        <td>234</td>
        <td>Australia won by 125 runs</td>
      </tr>
      <tr>
        <td>2007</td>
        <td>West Indies</td>
        <td>Australia</td>
        <td>281–4</td>
        <td>Sri Lanka</td>
        <td>215–8</td>
        <td>Australia won by 53 runs</td>
      </tr>
      <tr>
        <td>2011</td>
        <td>India and Bangladesh</td>
        <td>India</td>
        <td>277–4</td>
        <td>Sri Lanka</td>
        <td>274–6</td>
        <td>India won by 6 wickets</td>
      </tr>
      <tr>
        <td>2015</td>
        <td>Australia and New Zealand</td>
        <td>Australia</td>
        <td>186–3</td>
        <td>New Zealand</td>
        <td>183</td>
        <td>Australia won by 7 wickets</td>
      </tr>
      <tr>
        <td>2019</td>
        <td>England and Wales</td>
        <td>England</td>
        <td>241</td>
        <td>New Zealand</td>
        <td>241–8</td>
        <td>Match tied after regular play and super over; England won on boundary count</td>
      </tr>
      <tr>
        <td>2023</td>
        <td>India</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
      </tr>
    </tbody>
  </table><br><br>
  <h1>Cricket World Cup Winners List: Results by Country</h1>
  <p>Australia is the most successful team in the ICC ODI World Cup which has been won
    the World Cup 5 times and finished as the runner-up 2 times. After Australia,
     India and West Indies won the Worl Cup title 2 times. The last ICC ODI Men World Cup
     2019 was held in England and Wales and this world cup was won by the hosting country
      England for the first time.  Here is the list of ODI Cricket World Cup winners country-wise.</p>
      <table>
        <tbody>
          <tr>
            <td><strong>Team</strong></td>
            <td><strong>Final&nbsp;Appearances</strong></td>
            <td><strong>Winners</strong></td>
            <td><strong>Runners</strong></td>
            <td><strong>Years Won</strong></td>
            <td><strong>Years Runners</strong></td>
          </tr>
          <tr>
            <td>Australia</td>
            <td>7</td>
            <td>5</td>
            <td>2</td>
            <td>1987, 1999, 2003, 2007, 2015</td>
            <td>1975, 1996</td>
          </tr>
          <tr>
            <td>England</td>
            <td>4</td>
            <td>1</td>
            <td>3</td>
            <td>2019</td>
            <td>1979, 1987, 1992</td>
          </tr>
          <tr>
            <td>India</td>
            <td>3</td>
            <td>2</td>
            <td>1</td>
            <td>1983, 2011</td>
            <td>2003</td>
          </tr>
          <tr>
            <td>New Zealand</td>
            <td>1</td>
            <td>0</td>
            <td>1</td>
            <td>-</td>
            <td>2015</td>
          </tr>
          <tr>
            <td>Pakistan</td>
            <td>2</td>
            <td>1</td>
            <td>1</td>
            <td>1992</td>
            <td>1999</td>
          </tr>
          <tr>
            <td>Sri Lanka</td>
            <td>3</td>
            <td>1</td>
            <td>2</td>
            <td>1996</td>
            <td>2007, 2011</td>
          </tr>
          <tr>
            <td>West Indies</td>
            <td>3</td><td>2</td><td>1</td><td>1975, 1979</td><td>1983</td></tr></tbody></table>


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
