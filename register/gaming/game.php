<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if(!isset($_SESSION['logged']) || $_SESSION['logged'] != true) {
	header("Location: ../login.php", true, 303);
}
?>

<?php
$dsn = "mysql:host=localhost; dbname=my_michaelmontanari";
$dbhost = "localhost";
$dbname = "my_michaelmontanari";
$dbuser = "mmichaelmontanari";
$dbpassword = "";

try {
  $pdo = new PDO( $dsn, "michaelmontanari","" );
  $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
} catch ( PDOException $ex ) {
  
};


$sql2 = "SELECT * FROM gpo_categoria";

try {

  $cmd = $pdo->prepare($sql2);
  $cmd->execute();
  $rows = $cmd->fetchAll(PDO::FETCH_NUM);

} catch (PDOException $ex) {
    $ex->getMessage();
};

$categorie = array();

foreach ( $rows as $row ){

    $categorie[] = $row[1];
    
}


?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleGame.css">
    <script src="gaming.js"></script>
    <title>BRAIN DANCE</title>
</head>
<body>
    <center>
    <h1>Welcome to Braindance</h1>
    
    <h2> Scegli una categoria!</h2>
	
    <div id="bottoni">
    <button class="button" id= "musica" name = "musica" style="--clr:#0FF0FC"><span><?php echo $categorie[1] ?></span><i></i></button>
    <button class="button" id="videogiochi" name = "videogiochi" style="--clr:#8A2BE2" ><span><?php echo $categorie[2] ?></span><i></i> </button> 
    <button class="button" id="cinema" name = "cinema" style="--clr:#0FF0FC"><span><?php echo $categorie[3] ?></span><i></i></button>
    <button class="button" id="sport" name = "sport" style="--clr:#8A2BE2" ><span><?php echo $categorie[0] ?></span><i></i></button>
    
</div>
<br>
<form action="" method="post" class="esci">
	<input id="disconnect" type="submit" name="disconnect" class="exit" value="ESCI"/>
</form>
</center>
</body>
<?php
if(isset($_POST['disconnect'])) {
	$_SESSION['logged'] = false;
	session_destroy();
	header("Location: ../login.php", true, 303);
}
?>
</html>
