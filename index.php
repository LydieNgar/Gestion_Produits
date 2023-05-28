<!--Projet de Atrid GNINOFOUN & Lydie NGARDOLEGOM-->

<?php require_once ('connexion.php'); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application de gestion de produits</title>
    <link rel="stylesheet" href="application_style.css" />
    

</head>
<body>

<div id="entete">

<a href="login.php" class="login">Login</a>

    <img src=images/parfum.jpg class="image_entete">


    <p class="nomapp">Gestion de produits</p>
    <div id="formprod">
        <form name="formprod" method="post" action="">
            <input id="motcle" type="text" name="motcle" placeholder="  Recherche par nom..." />
            <input class="btfind" type="submit" name="btsubmit" value="Recherche" />
    </div>

</div>

<?php include_once('header.php'); ?>
<div id="entete">
<a href="acceuil2.php" class="acceuil">Acceuil</a>

<div id="articles">

<table width="100%" border="1">
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

if(isset($_POST['btsubmit'])){
    $mc=$_POST['motcle'];
    $reqSelect = "select * from produit where nom like '%$mc%'";
}
else{
    $reqSelect="select * from produit";
    }
    

    $resultat = mysqli_query($connexionappli, $reqSelect);
    $nbr=mysqli_num_rows($resultat);
    echo "<p><b>".$nbr." </b> Resultat(s) de votre recherche...</p>";

?>

<?php

    while($ligne=mysqli_fetch_assoc($resultat)){
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
    <a href="#" class="btn btn-primary">Haut de Page</a>

</div>

       <?php
    

    ?>

    

<?php include_once('pied_de_page.php'); ?>



</body>
</html>