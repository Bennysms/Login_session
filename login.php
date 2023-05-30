<?php 
    session_start();
    ini_set('display_errors',1);

    if (isset($_POST['submit'])) {
        $login = $_POST['login'];
        $pass = $_POST['password'];
        if(isset($login) && isset($pass) && !empty($login) && !empty($pass)){
            if(($login == $_SESSION['login']) && ($pass == $_SESSION['pass'])){
                    $_SESSION['auth'] = true;
                    header('Location:compte.php');       
            }
            elseif(($login == $_SESSION['login']) || ($pass == $_SESSION['pass'])){

                $error ="login ou mot de passe incorrect !";
            } 
            else{
                $error ="Aucun compte trouvé !";
            }   
        }
        else{
            $error ="Veuillez remplir tous les champs";
        }
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Connexion</title>
</head>
<body>
    <main>
        <h1>Connexion</h1>
        <form action="" method="POST">
            <p class="erreur"><?php if(isset($error))echo $error;?> </p>
            <input type="text" name="login" placeholder="Username">
            <input type="password" name="password" placeholder="Mot de passe">
            <input type="submit" value="Créer un compte" class="submit" name="submit">
            <p>Pas encore membre ? <a href="index.php">créer un compte !</a></p>
        </form>
    </main>
</body>
</html>