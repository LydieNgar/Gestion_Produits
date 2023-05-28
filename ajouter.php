<!--Projet de Atrid GNINOFOUN & Lydie NGARDOLEGOM-->

<?php require_once ('connexion.php'); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un produit</title>
    <link rel="stylesheet" href="application_style.css" />
    

</head>
<body>

<div id="container">
    <form name="formAdd" action="ajouter.php" method="post" class="formulaire" enctype="multipart/form-data">
    <?php include_once('header.php'); ?>

        <h2 align="left">Ajouter un nouveau produit</h2>

        <label><b>Identifiant :</b></label>
        <input type="text" name="id" class="zonetext" placeholder="Entrer l'identifiant" required>

        <label><b>Nom :</b></label>
        <input type="text" name="nom" class="zonetext" placeholder="Entrer le nom" required>

        <label><b>Prix :</b></label>
        <input type="number" name="prix" class="zonetext" placeholder="Entrer le prix" required>
    
        <label><b>Quantite en stock :</b></label>
        <input type="number" name="quantite" class="zonetext" placeholder="Entrer la quantite en stock" required>
    
        <label><b>Photo :</b></label>
        <input type="file" name="photo" class="zonetext" placeholder="choisir une image" required>

        <label><b>Date d'ajout :</b></label>
        <input type="date" name="date" class="zonetext" placeholder="Entrer la date d'ajout" required>

        <label><b>Description :</b></label>
        <input type="text" name="description" class="zonetext" placeholder="Decrire" required>
    
        <input type="submit" name="btadd" value="Ajouter" class="submit">
    
        <p><a href="acceuil.php" class="submit">Tableau de Bord</a></p><br>
    
        <label style="text-align: center; color: #960406;">
            <?php

                if(isset($_POST['btadd'])){
                    $id=$_POST['id'];
                    $nom=$_POST['nom'];
                    $prix=$_POST['prix'];
                    $qty=$_POST['quantite'];
                    $image=$_FILES['photo']['tmp_name'];

                    $trajet="images/".$_FILES['photo']['name'];
                    move_uploaded_file($image,$trajet);
                    $date=$_POST['date'];
                    $descript=$_POST['description'];
                    
                    $reqAdd="insert into produit(nom, prix,quantite,photo,date, 
                    description) values ('$nom','$prix','$qty','$trajet','$date','$descript')";
                    
                    $resultat=mysqli_query($connexionappli,$reqAdd);
                    if($resultat){
                        echo "Insertion des donnees validee";
                    }else{
                        echo "Echec d'insertion des donnees";
                    }

                }
            ?>
        </label>
        <p><a href="liste.php" class="submit">Liste des produits</a></p>
        <a href="#" class="btn btn-primary">Haut de Page</a>

    </form>

</div>


</body>
</html>
