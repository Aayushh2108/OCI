
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
    <title>ODI</title>
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
  <h1 class="title">ODI Information</h1>

  <h1>One Day Internationals</h1>

  <p>A One Day International (ODI) is a form of limited overs cricket, played between two teams with international status,
     in which each team faces a fixed number of overs, currently 50, with the game lasting up to 9 hours. 
    The Cricket World Cup, generally held every four years, is played in this format.</p>

  <p>The international one-day game is a late twentieth-century development. 
        The first ODI was played on 5 January 1971 between Australia and England at the Melbourne Cricket Ground.
         When the first three days of the third Test were washed out officials decided to abandon the match and, instead, play a one-off one day game consisting of 40 eight-ball overs per side.
          Australia won the game by 5 wickets.</p>
  <p>In the late 1970s, Kerry Packer established the rival World Series Cricket (WSC) competition, and it introduced many of the features of One Day International cricket that are now commonplace,
     including coloured uniforms, matches played at night under floodlights with a white ball and dark sight screens, and,
      for television broadcasts, multiple camera angles, effects microphones to capture sounds from the players on the pitch, and on-screen graphics. 
      The first of the matches with coloured uniforms was the WSC Australians in wattle gold versus WSC West Indians in coral pink, played at VFL Park in Melbourne on 17 January 1979.
     Kerry Parker was credited with making cricket a more professional sport.</p>

     <h1>Rules</h1>
<p>In the main the Laws of cricket apply. However, in ODIs, each team gets to bat only a fixed number of overs. In the early days of ODI cricket, 
    the number of overs was generally 60 overs per side, and matches were also played with 40, 45 or 55 overs per side, but now it has been uniformly fixed at 50 overs.</p>

    <h5>Simply stated, the game works as follows:</h5>

    <ol><li>An ODI is contested by 2 teams of 11 players each.</li>
<li>The Captain of the side winning the toss chooses to either bat or bowl (field) first.</li>
<li>The team batting first sets the target score in a single innings.  The innings lasts until the batting side is "all out" (i.e., 10 of the 11 batting players are "out") or all of the first side's allotted overs are used up.</li>
<li>Each bowler is restricted to bowling a maximum of 10 overs (fewer in the case of rain-reduced matches and in any event generally no more than one fifth or 20% of the total overs per innings).</li>
<li>The team batting second tries to score more than the target score in order to win the match.  Similarly, the side bowling second tries to bowl out the second team for less than the target score in order to win.</li>
<li>If the number of runs scored by both teams is equal when the second team loses all of its wickets or exhausts all its overs, then the game is declared a <i>tie</i> (regardless of the number of wickets lost by either team).</li></ol>


<h1>Teams with ODI status</h1>
<p>The International Cricket Council (ICC) determines which teams have ODI status (meaning that any match played between two such teams under standard one-day rules is classified as an ODI). <br><br>


The ten Test-playing nations (which are also the ten full members of the ICC) have permanent ODI status. The nations are listed below with the date of each nation's ODI debut shown in brackets:</p>

<ol>
    <li>Australia (5 January 1971)</li>
    <li> England (5 January 1971)</li>
    <li> New Zealand (11 February 1973)</li>
    <li> Pakistan(11 February 1973)</li>
    <li> West Indies (5 September 1973)</li>
    <li> India (13 July 1974)</li>
    <li> Sri Lanka (7 June 1975)</li>
    <li> Zimbabwe (9 June 1983)</li>
    <li> Bangladesh (31 March 1986)</li>
    <li> South Africa (10 November 1991)</li>
</ol>

<h1>Tournaments</h1>
<p>Most ODI cricket takes place in a stand-alone series between two nations, immediately before or after a test series. <br> Triangular series or quadrangular series are also common. <br><br>

There are two major ODI tournaments which feature most or all permanent ODI teams, and often also associate members:</p>

<ol><li>Cricket World Cup, played every four years since 1975</li>
    <li>ICC Champions Trophy, played every two years since 1998</li>
</ol>

<h1>One Day International records</h1>
<p>The record for the highest innings total in any List A limited overs match is 443 for nine by Sri Lanka against Netherlands in their One Day International 50-overs match at Amstelveen on July 4, 2006. 
    The lowest team total is 35 all out by Zimbabwe against Sri Lanka in Harare, 2004.
</p> 

<p>The most runs scored by both sides in any List A limited overs match is 872: Australia, batting first, scored 434 for four in 50 overs, 
    and yet were beaten by South Africa who scored 438 for nine with a ball to spare during their One Day International at Johannesburg in 2006.</p>

    <p>The best bowling figures are 8-19 by Chaminda Vaas for Sri Lanka v Zimbabwe in Colombo, 2001-02 - he is the only player to take eight wickets in a One Day international.
         The best batting performance is a knock of 219 runs by Indian Virender Sehwag against the West Indies on 8 December 2011.
          He's the first captain and the second person so far to score a double century in One Day Internationals with the other being Indian batsman Sachin Tendulkar on 24 Feb 2010
           who made the first ever one day double century off 147 balls against South Africa.
        </p>

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
