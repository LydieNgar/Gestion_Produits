<!--Projet de Atrid GNINOFOUN & Lydie NGARDOLEGOM-->

<?php require_once ('connexion.php'); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceuil</title>
    <style>
        .myphoto{
             width: 100px;
             height : 100px;
             border: 50%;
             border: 1px solid;
        }
    </style>
    <link rel="stylesheet" href="application_style.css" />
    

</head>
<body>


<div id="global">
    <div id="profil">
        <?php
            session_start();
            echo "Bonjour et Bienvenue ".$_SESSION['monLogin']."<br>";

            $req="select * from users where login='".$_SESSION['monLogin']."'";
            $resultat=mysqli_query($connexionappli,$req);

            $ligne=mysqli_fetch_assoc($resultat);


        ?>

        <img src="<?php echo $ligne['photo'];?>" class="myphoto">
        <br>
        <a href="deconnecter.php">Deconnexion</a>

    </div>

    
    <div id="tableaubord">
        <?php include("tableaubord.php")
        ?>

    </div>




</body>
</html>
