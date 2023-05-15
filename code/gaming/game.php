<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
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
    <input type="button" id="sport" name = "sport" style="--clr:#0FF0FC"><span>SPORT</span><i></i></button>
    <input type="button" id="games" name = "games" style="--clr:#8A2BE2"><span>VIDEOGIOCHI</span><i></i> </button> 
    <input type="button" id="cinema" name = "cinema" style="--clr:#0FF0FC"><span>CINEMA</span><i></i></button>
    <input type="button" id="musica" name = "musica" style="--clr:#8A2BE2"><span>MUSIC</span><i></i></button>
    </form>

</div>
</center>

</body>
</html>

<?php

if(isset($_POST['sport'])) {
    $_SESSION["categoria"] = "sport";
}

if(isset($_POST['games'])) {
    $_SESSION["categoria"] = "games";
}

if(isset($_POST['cinema'])) {
    $_SESSION["categoria"] = "cinema";
}

if(isset($_POST['musica'])) {
    $_SESSION["categoria"] = "musica";
}




?>