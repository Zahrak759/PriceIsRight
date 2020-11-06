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
Can you guess how much this watch costs?
<p> <img src = "watch.jpg" height = "50%" width = "40%" align = "center"> </p>
</div>

<p>
<form action = "level1.php" method= "post" style="color:white">
Price Guess: <input type="text" name= "guess">
</p>

<div class="sponsor">
Sponsored by GSU</div>

</body>
</html>
