<!DOCTYPE html>
<?php
session_start();
if(isset($_SESSION['logged']) && $_SESSION['logged'] == true) {
    header("Location: gaming/game.php", true, 303);
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Signin</title>
</head>
<body class="register">
    <form action="" class="container" method="post">
        <img class="img" src="braindance_logo.png"/>
        <div class="credentials">
            <!-- Username -->
            <div class="label">Username</div>
            <div class="credential">
                <label for="" class="symbol"><span class="material-symbols-outlined">person</span></label>
                <input type="text" name="username" id="username" class="text" required/>
            </div>
            <!-- E-mail -->
            <div class="label">E-mail</div>
            <div class="credential">
                <label for="" class="symbol"><span class="material-symbols-outlined">mail</span></label>
                <input type="email" name="email" id="email" class="text" required/>
            </div>
            <!-- Password -->
            <div class="label">Password</div>
            <div class="credential">
                <label for="" class="symbol"><span class="material-symbols-outlined">key</span></label>
                <input type="password" name="password" id="password" class="text" required/>
            </div>
        </div>
        <!-- Button -->
        <div class="button">
            <input type="submit" name="submit" class="submit" value="SIGNIN"/>
        </div>
        <!-- Extra -->
        <div class="extra">
            <label for="" class="label">Hai già un account?</label>
            <a class="redirect" href="login.php">Accedi qui</a>
        </div>
    </form>
</body>
<?php
//SCRITTURA NEL DATABASE
if(isset($_POST['submit'])) {
    try {
        //Crea la connessione
        $conn = null;
        $conn = new PDO("mysql:host=localhost;dbname=my_michaelmontanari", 'michaelmontanari', '');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //Controlla se 'username' e 'email' sono già usati
        $check = "SELECT username, email FROM gpo_users";
        $cmd = $conn->prepare($check);
        $cmd->execute();
        $rows = $cmd->fetchAll(PDO::FETCH_NUM); //Prende le righe del db
        foreach($rows as $row) { //Cicla le righe del db
            if($_POST['username'] == $row[0] || $_POST['email'] == $row[1]) {
                if($_POST['username'] == $row[0]) {
                    echo '<script>
                            var parent = document.getElementById("username");
                            var container = document.createElement("div");
                            container.setAttribute("class", "w-box red");
                            var paragraph = document.createElement("p");
                            paragraph.setAttribute("class", "w-text");
                            paragraph.innerHTML = "Username già in uso";
                            container.appendChild(paragraph);
                            parent.parentNode.insertBefore(container, parent.nextSibling);
                          </script>';
                }
                if($_POST['email'] == $row[1]) {
                    echo '<script>
                            var parent = document.getElementById("email");
                            var container = document.createElement("div");
                            container.setAttribute("class", "w-box red");
                            var paragraph = document.createElement("p");
                            paragraph.setAttribute("class", "w-text");
                            paragraph.innerHTML = "E-Mail già in uso";
                            container.appendChild(paragraph);
                            parent.parentNode.insertBefore(container, parent.nextSibling);
                          </script>';
                }
                exit();
            }
        }
        $sql = "INSERT INTO gpo_users (username, email, password) VALUES ('" . $_POST['username'] . "', '" . $_POST['email'] . "', '" . $_POST['password'] . "')";
        $conn->exec($sql);
        $_SESSION['logged'] = true;
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['error'] = "";
    } catch(PDOException $e) {
        echo("Database Error: " . $ex->getMessage());
    }
    header("Location: gaming/game.php", true, 303);
}
?>
</html>