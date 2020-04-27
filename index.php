<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>
            Covoiturage
        </title>
        <link href="styles.css" rel="stylesheet" media="all" type="text/css">
    </head>
    <body>
        <br>
        Lancer la recherche de covoiturages possibles. Si possible alors les concernés seront informés par messages
        <br>
        <button><a href="getCarpool.php" style="text-decoration: none">GO !</a></button>
        <br>
        <?php if(isset($_GET['result']))echo $_GET['result']?>
    </body>
</html>