<!DOCTYPE html>
<html lang="en">
<?php

session_start();

?>

<?php
$dsn = "mysql:host=localhost; dbname=my_dommorgb";
$dbhost = "localhost";
$dbname = "my_dommorgb";
$dbuser = "dommorgb";
$dbpassword = "";

try {
  $pdo = new PDO( $dsn, "dommorgb","" );
  $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
} catch ( PDOException $ex ) {
  
};


$sql2 = "SELECT * FROM categorie";

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
    <form action = "POST"> 
    <button id= "musica" name = "musica" style="--clr:#0FF0FC"><span><?php echo $categorie[0] ?></span><i></i></button>
    <button type="button" id="videogiochi" name = "videogiochi" style="--clr:#8A2BE2" ><span><?php echo $categorie[1] ?></span><i></i> </button> 
    <button type="button" id="cinema" name = "cinema" style="--clr:#0FF0FC"><span><?php echo $categorie[2] ?></span><i></i></button>
    <button type="button" id="sport" name = "sport" style="--clr:#8A2BE2" ><span><?php echo $categorie[3] ?></span><i></i></button>
    </form>

</div>
</center>

</body>
</html>

<?php



?>