<!--Projet de Atrid GNINOFOUN & Lydie NGARDOLEGOM-->

<?php require_once ('connexion.php'); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des produits</title>

    <link rel="stylesheet" href="application_style.css" />
    

</head>
<body>

<div id="container">
    <form name="formInfo" class="formulaire">
    <?php include_once('header.php'); ?>

    <h2 align="left">Liste des produits</h2>

    <?php
        $reqSelect="select * from produit";
        $resultat=mysqli_query($connexionappli,$reqSelect);

        $nbr=mysqli_num_rows($resultat);
        echo "<p> Total <b>".$nbr."</b> Produits...</p>";

    ?>
    </p>

    <table width="100%" border="1">
        <tr>
            <th>Nom</th>
            <th>Prix</th>
            <th>Details</th>
            <th>Modifier</th>
            <th>Supprimer</th>
           
        </tr>

    <?php
    while($ligne=mysqli_fetch_assoc($resultat))
    {

    ?>

    <tr>
        <td><?php echo $ligne['nom'];?></td>
        <td><?php echo $ligne['prix'];?></td>
        <td><a href="details.php?infoprod=<?php echo $ligne['id'];?>"><img src="images/details.jpg" width="50px" height="50px"></a></td>
        <td><a href="modifier.php?modif=<?php echo $ligne['id'];?>"><img src="images/edit.png" width="50px" height="50px"></a></td>
        <td><a href="supprimer.php?supprod=<?php echo $ligne['id'];?>"><img src="images/delete.jpg" width="50px" height="50px"></a></td>

    </tr>

    <?php
    }
    ?>

    </table>
    <p><a href="acceuil.php" class="submit">Tableau de Bord</a></p><br>
    <p><a href="ajouter.php" class="submit">Ajouter un nouveau produit</a></p>

    <a href="#" class="btn btn-primary">Haut de Page</a>

    </form>
</div>


</body>
</html>
