<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>
<body>
<?php require_once('header.php'); ?>
<?php require_once('oeuvres.php'); ?>
<main>

    <article id="detail-oeuvre">
        <div id="img-oeuvre">
           <img src="<?php echo(GetOeuvre($_GET['id'],$oeuvres)['img']); ?>" alt="<?php echo(GetOeuvre($_GET['id'],$oeuvres)['titre']);?>">
        </div>
        <div id="contenu-oeuvre">
            <h1><?php echo(GetOeuvre($_GET['id'],$oeuvres)['titre']);?> </h1>
            <p class="description"> <?php echo(GetOeuvre($_GET['id'],$oeuvres)['peintre']);?></p>
            <p class="description-complete">
            <?php echo(GetOeuvre($_GET['id'],$oeuvres)['description']);?>
            </p>
        </div>
    </article>
</main>
<?php require_once('footer.php'); ?>
</body>
</html>
