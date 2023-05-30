<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if(!isset($_SESSION['logged']) || $_SESSION['logged'] != true) {
	header("Location: ../../login.php", true, 303);
}

$id = $_GET['cat'];

if ($id == "sport")
{
	$id_categoria = 1;
}
if ($id == "cinema")
{
	$id_categoria = 4;
}
if ($id == "videogiochi")
{
	$id_categoria = 3;
}
if ($id == "musica")
{
	$id_categoria = 2;
}


$dsn = "mysql:host=localhost; dbname=my_michaelmontanari";
$dbhost = "localhost";
$dbname = "my_michaelmontanari";
$dbuser = "michaelmontanari";
$dbpassword = "";

try {
  $pdo = new PDO( $dsn, "michaelmontanari","" );
  $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
} catch ( PDOException $ex ) {
  
};


$sql2 = "SELECT * FROM gpo_domanda WHERE id_categoria = $id_categoria";

try {

  $cmd = $pdo->prepare($sql2);
  $cmd->execute();
  $rows = $cmd->fetchAll(PDO::FETCH_NUM);

} catch (PDOException $ex) {
    $ex->getMessage();
};

$domande = array();
$risposta = array();
$id_domande = array();

foreach ( $rows as $row ){

	$id_domande[] = $row[0];
    $domande[] = $row[2];
    $risposta[] = $row[3];
    
}

$sql3 = "SELECT * FROM gpo_risposte_sbagliate WHERE id_domanda = $id_domande[0]";


try {

  $cmd = $pdo->prepare($sql3);
  $cmd->execute();
  $rows1 = $cmd->fetchAll(PDO::FETCH_NUM);

} catch (PDOException $ex) {
    $ex->getMessage();
};

$risposte_sbagliate = array();

foreach ( $rows1 as $row1 ){

	$risposte_sbagliate[] = $row1[2];
}

?>



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GAME IS ONNNN</title>
     <script src="inGame.js"></script>
     <link rel="stylesheet" href="inGame.css">
</head>
<body>

<center>

<h1><?php echo $_GET["cat"];?></h1>

<h2> <?php echo $domande[0]; ?> </h2>

<div id="bottoni_risp">
 	<button id="err" name = "musica" class = "risposta" ><span><?php echo $risposte_sbagliate[0] ?></span><i></i></button>
    <button id="err" name = "videogiochi" class = "risposta"  ><span><?php echo $risposte_sbagliate[1] ?></span><i></i> </button> 
    <button id="err" name = "cinema" class = "risposta" ><span><?php echo $risposte_sbagliate[2] ?></span><i></i></button>
    <button id="giust" name = "sport" class = "risposta" ><span><?php echo $risposta[0] ?></span><i></i></button>
</div>

</center>

</body>
</html>

<?php


?>