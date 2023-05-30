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
  <title>BRAINDANCE - Hai perso</title>
</head>
<body class="sheet">
  <h1 class="text">HAI</h1>
  <h1 class="lose">PERSO</h1>
  <h2 class="subtext">La risposta era sbagliata!</h2>
</body>
</html>
