<!--Projet de Atrid GNINOFOUN & Lydie NGARDOLEGOM-->

<?php require_once ('connexion.php'); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="application_style.css" />
    

</head>
<body>
<div id="container">

    <form action="" method="post" class="formulaire">
        <h1>Connexion</h1>
        <label><b>Nom d'utilisateur :</b></label>
        <input type="text" placeholder="Entrer le nom d'utilisateur " name="login" required class="zonetext">

        <label><b>Mot de passe : </b></label>
        <input type="password" placeholder="Entrer le mot de passe " name="password" required class="zonetext">

        <input type="submit" name="btlogin" value="LOGIN" id="submit" class="submit">
    
        <?php
        if(isset($_POST['btlogin'])){
            $req="select * from users where login='".$_POST['login']."' and password='".$_POST['password']."'";
        

            if($resultat = mysqli_query($connexionappli,$req)){
                $ligne=mysqli_fetch_assoc($resultat);
                if($ligne!=0){
                    session_start();
                    $_SESSION['monLogin']=$_POST['login'];
                    header("location:acceuil.php");
                }else{
                echo "<font color='#F0001D'>Login ou mot de passe invalide</font>"; 
                }
        }
    }

        ?>
    
    </form>


</div>





</body>
</html>