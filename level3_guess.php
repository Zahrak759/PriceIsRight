<?php
session_start();
$_SESSION["counter"] = 0;
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

<div class ="dialog2">
Can you guess how much this TV costs? 
<p> <img src = "tv.jpg" height = "60%" width = "60%" align = "center"> </p>
</div>

<p>
<form action = "level3.php" method= "post">
Price Guess: <input type="text" name= "guess">
</p>

<div class="sponsor">
Sponsored by GSU</div>

</body>
</html>
