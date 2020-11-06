<?php
session_start();
?>
<html>
<head>
    <link rel="stylesheet" href="style.css" />
</head>

<style>
body {
  background-image: url('bg.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>

<body>

<div class="tiledBackground"> </div>

<?php

echo $_SESSION["counter"];
$price = "8100";
$count = $_SESSION["counter"];
if ($_POST["guess"] == $price)
	{#correct guess
	 header( "Location: winner1.html" );
	 exit ;
	}
$_SESSION["counter"]++;
if ($count >= 2)
	{
	 header( "Location: loser.html" );
	 
	 exit ;

	}


?> 
<div class ="dialog2">
That was incorrect please Guess again.
<p> <img src = "watch.jpg" height = "50%" width = "40%" align = "center"> </p>
</div>

<p>
<form action = "level1.php" method= "post">
Price Guess: <input type="text" name= "guess">
</p>

<div class="sponsor">
Sponsored by GSU</div>
</body>
</html>
