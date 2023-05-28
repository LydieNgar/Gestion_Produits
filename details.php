<!--Projet de Atrid GNINOFOUN & Lydie NGARDOLEGOM-->

<?php require_once ('connexion.php'); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informations sur le produit</title>

    <link rel="stylesheet" href="application_style.css" />
    

</head>
<body>

<div id="container">
    <form name="formInfo" class="details">
    <?php include_once('header.php'); ?>

    <h2 align="left">Informations sur le produit</h2>

    <?php

        if(isset($_GET['infoprod'])){
            $info=$_GET['infoprod'];
            $reqInfo="select * from produit where id='$info'";
            $resultat=mysqli_query($connexionappli,$reqInfo);
        }


    ?>

    <table width="100%" border="1" class="detailstab">
         <tr>
            <th>Identifiant</th>
            <th>Nom</th>
            <th>Prix</th>
            <th>Quantite</th>
            <th>Date d'ajout</th>
            <th>Description</th>
            <th>Photo</th>
         </tr>

         <?php

            while($ligne=mysqli_fetch_assoc($resultat))
            {

            ?>
            <tr>
                <td><?php echo $ligne['id'];?></td>
                <td><?php echo $ligne['nom'];?></td>
                <td><?php echo $ligne['prix'];?></td>
                <td><?php echo $ligne['quantite'];?></td>
                <td><?php echo $ligne['date'];?></td>
                <td><?php echo $ligne['description'];?></td>
                <td><img src='<?php echo $ligne['photo'];?>' class="photoprod" ></td>

            </tr>

            <?php
            }
        ?>


    </table>
    

    <p><a href="acceuil.php" class="submit">Tableau de Bord</a></p><br>
    <p><a href="liste.php" class="submit">Retour a la liste</a></p>

        
    </form>
</div>



</body>
</html>
