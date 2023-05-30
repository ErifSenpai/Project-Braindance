<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION['logged']) && $_SESSION['logged'] != true) {
    header("Location: ../../../login.php", true, 303);
}
?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="generator" content="AlterVista - Editor HTML"/>
  <link rel="stylesheet" href="style.css">
  <title>BRAINDANCE - Hai vinto</title>
</head>
<body>
  <h1 class="text">HAI</h1>
  <h1 class="win">VINTO</h1>
  <h2 class="subtext">La risposta è giusta!</h2>
</body>
</html>
