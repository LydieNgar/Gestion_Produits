<!--Projet de Atrid GNINOFOUN & Lydie NGARDOLEGOM-->

<?php require_once ('connexion.php'); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link rel="stylesheet" href="application_style.css" />
    

</head>
<body>

<!-----
    <div align="right" class="header-date pull-right">
        <strong><?php echo date("F j, Y, g:ia");?></strong>
      </div>--->

      <div align="right" class="header-date pull-right">
        <?php setlocale(LC_TIME, array('da_DA.UTF-8','da_DA@euro','da_DA','french'));
        echo strftime("%a %e/%m/%Y - ");
        echo date("g:ia");
        ?>
    </div>
    




</body>
</html>