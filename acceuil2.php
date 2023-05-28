<!--Projet de Atrid GNINOFOUN & Lydie NGARDOLEGOM-->

<?php require_once ('connexion.php'); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de Bord</title>
    <link rel="stylesheet" href="application_style.css" />
    

</head>

<body>

<div id="entete">
<img src=images/parfum1.jpg class="image_entete">


<p class="nomapp">Gestion de produits</p>
</div>

<?php include_once('header.php'); ?>
<div >
    <p><h1><b>Article #1 du moment !</b></h1>

    <p>
    <video autoplay="loop" class="entete_video" width="640" height="600" controls="auto">
        <source src="videos/parfum1.mp4" type="video/mp4">
        <source src="videos/parfum1.webm" type="video/webm">
    </video>
    </p>
   <div>
        <p>
            <h3>Choix de nos videos les plus representatifs du moment...</h3>
            <h4>Faites votre choix parmis les meilleurs parfums de marque de tout Dakar<br>
            Bien evidemment, avec des prix nettement abordables tout en gardant l'authenticite.
            </h4>
        </p>
   </div>
    <p>
    <video autoplay="loop" class="entete_video" width="640" height="480" controls="auto">
        <source src="videos/parfum2.mp4" type="video/mp4">
        <source src="videos/parfum2.webm" type="video/webm">
    </video>

    <br><a href="index.php" class="login">Retour a la page principale</a>

    <?php include_once('pied_de_page.php'); ?>
    <a href="#" class="btn btn-primary">Haut de Page</a>

    </p>
</div>    


</div>


</body>
</html>