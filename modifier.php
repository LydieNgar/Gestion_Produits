<!--Projet de Atrid GNINOFOUN & Lydie NGARDOLEGOM-->

<?php require_once ('connexion.php'); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier les informations d'un produit</title>
    <link rel="stylesheet" href="application_style.css" />
    

</head>
<body>

<div id="container">
    
    <form name="formUpdate" method="post" action="" class="formulaire" enctype="multipart/form-data">
        <?php include_once('header.php'); ?>

        <h2 align="left">Mettre a jour un produit</h2>
        <label><b>Identifiant</b></label>
        <input type="text" name="id" class="zonetext" value="<?php echo $_GET['modif']?>" readonly>

        <label><b>Nom</b></label>
        <input type="text" name="nom" class="zonetext" placeholder="Entrer le nom du produit" required>

        <label><b>Prix</b></label>
        <input type="number" name="prix" class="zonetext" placeholder="Entrer le nouveau prix du produit" required>

        <label><b>Quantite</b></label>
        <input type="number" name="quantite" class="zonetext" placeholder="Entrer la quantite en stock du produit" required>

        <label><b>Photo</b></label>
        <input type="file" name="photo" class="zonetext" placeholder="Choisir une image" required>

        <label><b>Date</b></label>
        <input type="date" name="date" class="zonetext" placeholder="Date d'ajout" required>

        <label><b>Description</b></label>
        <input type="text" name="description" class="zonetext" placeholder="Decrire" required>

        <input type="submit" class="submit" name="btmod" value="Mettre a jour">

        <p><a href="acceuil.php" class="submit">Tableau de Bord</a></p>


        <label style="text-align: center; color: #360001;">


        <?php

            if(isset($_POST['btmod'])){
                $id=$_POST['id'];
                $nom=$_POST['nom'];
                $prix=$_POST['prix'];
                $quantite=$_POST['quantite'];
                $modifier=$_GET['modif'];

                $image=$_FILES['photo']['tmp_name'];

                $trajet="images/".$_FILES['photo']['name'];
                move_uploaded_file($image,$trajet);
                $date=$_POST['date'];
                $descript=$_POST['description'];


                $reqMod="update produit set nom='$nom', prix='$prix', photo='$trajet', 
                quantite='$quantite', date='$date', description='$descript' where id='$modifier'";

                $resultat=mysqli_query($connexionappli,$reqMod);
                if($resultat){
                    echo "Mise a jour validee";
                }
                else{
                    echo "Echec de mise a jour";
                }

            }

        ?>

    </form>

</div>





</body>
</html>