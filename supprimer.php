<!--Projet de Atrid GNINOFOUN & Lydie NGARDOLEGOM-->

<?php require_once ('connexion.php'); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supprimer le produit</title>
    <link rel="stylesheet" href="application_style.css" />
    

</head>
<body>

<div id="container">
    <form name="formDel" class="formulaire">
    <p><a href="acceuil.php" class="submit">Tableau de Bord</a></p><br>
    <p><a href="liste.php" class="submit">Retour a la liste</a></p>

    <?php

        if(isset($_GET['supprod'])){
            $sup=$_GET['supprod'];
            $reqDel="DELETE from produit where id='$sup'";
            $resultat=mysqli_query($connexionappli,$reqDel);
        }

        if($resultat)
        {
            echo "<label style='text-align: center; color: #960406;'> La suppression a ete correctement effectuee.</label>";
        }else{
            echo "<label style='text-align: center; color: #960406;'> La suppression a echoue.</label>";
        }


    ?>
    </form>
</div>


</body>
</html>