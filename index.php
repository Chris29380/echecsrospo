
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" href="style800.css" />
        <link rel="stylesheet" href="style1200.css" />
        <link rel="icon" href="img/logo.png">
        <link rel="shortcut icon" href="img/logo.png">
        <link rel="apple-touch-icon" href="img/logo.png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://kit.fontawesome.com/32d60f45e9.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="/js/menu.js"></script>
        <script src="/pgnweb/pgn4web-server-config.js" type="text/javascript"></script>
        <script src="/pgnweb/pgn4web.js" type="text/javascript"></script>
        <script src="/js/puzzle.js"></script>
        <script src="/js/picture.js"></script>
    </head>

    <body>
        <?php
            $urlreq = $_SERVER['REQUEST_URI'];
            if($urlreq == "/" || $urlreq == "/index.php"){
                $title = "Fianchetto du Roi - club d'échecs de Rosporden - Accueil";
                include("accueil.php");
            }
            if($urlreq == "/index.php?club") {
                $title = "Fianchetto du Roi - Le Club";
                include("header.php");
                include("leclub.php");
            }
            if($urlreq == "/index.php?chess") {
                $title = "Fianchetto du Roi - Le Club";
                include("header.php");
                include("chess.php");
            }
        ?>        
    </body>
</html>