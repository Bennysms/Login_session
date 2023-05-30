<?php
session_start();

if (isset($_POST['submit'])) {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $login = $_POST['login'];
    $pass = $_POST['pwd'];
    if(isset($nom) && isset($email) && isset($login) && isset($pass) && !empty($nom) && !empty($email) && !empty($login) && !empty($pass)){

        if($_SESSION['login'] == $login){

            $error ="Login déjà pris, veuillez changer";
        }
        else{
            $_SESSION['login'] = $login;
            $_SESSION['nom'] = $nom;
            $_SESSION['email'] = $email;
            $_SESSION['pass'] = $pass;
            $_SESSION['auth'] = false;
            $success = "Compte crée avec success";

            
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
    <title>Inscription</title>
</head>
<body>
    <main>
        <h1>S'enregistrer</h1>
        <form action="" method="POST">
            <p class="<?php echo (isset($error)) ? 'erreur' : 'success' ;?>"><?php echo (isset($error)) ? $error : $success;?> </p>
            <input type="text" name="nom" placeholder="Nom complet">
            <input type="email" name="email" placeholder="Adresse email">
            <input type="text" name="login" placeholder="Username">
            <input type="password" name="pwd" placeholder="Mot de passe">
            <input type="submit" value="Créer un compte" class="submit" name="submit">
            <p>Déjà membre ? <a href="login.php">connectez-vous !</a></p>
        </form>
    </main>
</body>
</html>