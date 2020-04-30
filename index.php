<!DOCTYPE html>
<html lang="fr">
<head>
    <title>
        Covoiturage
    </title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="styles.css" rel="stylesheet" media="all" type="text/css">
</head>

<body>
<div id="accueil">
    <div id="agenda">
        <a href="index.php" style="text-decoration:none"><h1>Covoiturage</h1></a>
        <p> Nous sommes le <strong><?php echo date('d/m/Y '); ?></strong></p>
        <p>Lancer la recherche de covoiturages possibles. Si possible alors les concernés seront informés par messages</p>

        <button class=" button" id="buttonevent" onclick="window.location.href = 'getCarpool.php';">GO!</button> <br/>

        <p><?php if(isset($_GET['result']))echo "<p>Résultat : </p>".$_GET['result']?></p>
    </div>

</div>
</body>
</html>