<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Login</title>
</head>
<body class="register">
    <form action="" class="container" method="post">
        <img class="img" src="braindance_logo.png"/>
        <div class="credentials" id="error">
            <!-- Username/E-mail -->
            <div class="label">Username/E-mail</div>
            <div class="credential">
                <label for="" class="symbol"><span class="material-symbols-outlined">person</span></label>
                <input type="text" name="email-user" class="text"/>
            </div>
            <!-- Password -->
            <div class="label">Password</div>
            <div class="credential">
                <label for="" class="symbol"><span class="material-symbols-outlined">key</span></label>
                <input type="password" name="password" class="text"/>
            </div>
        </div>
        <!-- Button -->
        <div class="button">
            <input type="submit" name="submit" class="submit" value="LOGIN"/>
        </div>
        <!-- Extra -->
        <div class="extra">
            <label for="" class="label">Non hai un account?</label>
            <a class="redirect" href="signin.php">Registrati qui</a>
        </div>
    </form>
<?php
if(isset($_POST['submit'])) {

    //Crea la connessione
    $conn = null;
    $conn = new PDO("mysql:host=localhost;dbname=my_claudiomarchesini", 'claudiomarchesini', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    //Controllo dell'esistenza
    $check = "SELECT username, email, password FROM gpo_users";
    $cmd = $conn->prepare($check);
    $cmd->execute();
    
    $rows = $cmd->fetchAll(PDO::FETCH_NUM); //Prende le righe del db
    foreach($rows as $row) {
        if($_POST['email-user'] == $row[0] || $_POST['email-user'] == $row[1]) {
            if($_POST['password'] == $row[2]) {
                $_SESSION['logged'] = true;
                $_SESSION['username'] = $row[0];
                header("Location: profile/profile.php", true, 303);
                exit();
            }
        }
    }
    echo '<script>
            var parent = document.getElementById("error");
            var container = document.createElement("div");
            container.setAttribute("class", "w-box red");
            var paragraph = document.createElement("p");
            paragraph.setAttribute("class", "w-text");
            paragraph.innerHTML = "Credenziali non trovate";
            container.appendChild(paragraph);
            parent.prepend(container);
          </script>';
}
?>
</body>
</html>