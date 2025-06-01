<!doctype html>
<html>
    <head>
        <?php
            $urlreq = $_SERVER['REQUEST_URI'];
            if($urlreq == "/" || $urlreq == "/index.php"){
                $title = "Fianchetto du Roi - club d'échecs de Rosporden - Accueil";
                $desc="Club d'échecs de rosporden, Fianchetto du Roi, ouvert le jeudi soir et samedi après-midi pour les cours. Nous contacter au 07 70 01 13 30 ou par mail : fianchettoduroi@gmail.com";
                $keywords="club, echecs, échecs, rosporden,ffe, club bretagne, cours échecs, apprendre les échecs, finistère, bretagne";
                $robots="index, follow";
                $ogimage="https://echecsrosporden.org/img/logo.png";
                $ogurl="https://echecsrosporden.org/";
                $ogdesc="Club d'échecs de rosporden, Fianchetto du Roi, ouvert le jeudi soir et samedi après-midi pour les cours. Nous contacter au 07 70 01 13 30 ou par mail : fianchettoduroi@gmail.com";
                $ogtitle="Fianchetto du Roi - club d'échecs de Rosporden";
                $ogtype="website";
                $ogsitename="Fianchetto du Roi - club d'échecs de Rosporden";
                $oglocale="fr_FR";
                $fbimage="https://echecsrosporden.org/img/logo.png";
                $fburl="https://echecsrosporden.org/";
                $fbcaption="Fianchetto du Roi - club d'échecs de Rosporden - Accueil";
                $fbtype="website";
                $fbsitename="Fianchetto du Roi - club d'échecs de Rosporden";
                $fblocale="fr_FR";
            }
            if($urlreq == "/index.php?club") {
                $title = "Fianchetto du Roi - Le Club";
                $desc="Club d'échecs de rosporden, Fianchetto du Roi, ouvert le jeudi soir et samedi après-midi pour les cours. Nous contacter au 07 70 01 13 30 ou par mail : fianchettoduroi@gmail.com";
                $keywords="club, echecs, échecs, rosporden,ffe, club bretagne, cours échecs, apprendre les échecs, finistère, bretagne";
                $robots="index, follow";
                $ogimage="https://echecsrosporden.org/resources/imgs/facadeclub.png";
                $ogurl="https://echecsrosporden.org/index.php?club";
                $ogdesc="Club d'échecs de rosporden, Fianchetto du Roi, ouvert le jeudi soir et samedi après-midi pour les cours. Nous contacter au 07 70 01 13 30 ou par mail : fianchettoduroi@gmail.com";
                $ogtitle="Fianchetto du Roi - club d'échecs de Rosporden";
                $ogtype="website";
                $ogsitename="Fianchetto du Roi - club d'échecs de Rosporden";
                $oglocale="fr_FR";
                $fbimage="https://echecsrosporden.org/resources/imgs/facadeclub.png";
                $fburl="https://echecsrosporden.org/index.php?club";
                $fbcaption="Fianchetto du Roi - club d'échecs de Rosporden - Accueil";
                $fbtype="website";
                $fbsitename="Fianchetto du Roi - club d'échecs de Rosporden";
                $fblocale="fr_FR";
            }
            if($urlreq == "/index.php?cours") {
                $title = "Fianchetto du Roi - Les Cours";
                $desc="Club d'échecs de rosporden, Fianchetto du Roi, dispense des cours pour les débutants le samedi de 17h30 à 19h. Nous contacter au 07 70 01 13 30 ou par mail : fianchettoduroi@gmail.com";
                $keywords="club, echecs, échecs, rosporden,ffe, club bretagne, cours échecs, apprendre les échecs, finistère, bretagne";
                $robots="index, follow";
                $ogimage="https://echecsrosporden.org/resources/imgs/apprendre.png";
                $ogurl="https://echecsrosporden.org/index.php?cours";
                $ogdesc="Club d'échecs de rosporden, Fianchetto du Roi, ouvert le jeudi soir et samedi après-midi pour les cours. Nous contacter au 07 70 01 13 30 ou par mail : fianchettoduroi@gmail.com";
                $ogtitle="Fianchetto du Roi - club d'échecs de Rosporden";
                $ogtype="website";
                $ogsitename="Fianchetto du Roi - club d'échecs de Rosporden";
                $oglocale="fr_FR";
                $fbimage="https://echecsrosporden.org/resources/imgs/apprendre.png";
                $fburl="https://echecsrosporden.org/index.php?cours";
                $fbcaption="Fianchetto du Roi - club d'échecs de Rosporden - Les Cours";
                $fbtype="website";
                $fbsitename="Fianchetto du Roi - club d'échecs de Rosporden";
                $fblocale="fr_FR";
            }
            if($urlreq == "/index.php?rapide3etangs") {
                $title = "Fianchetto du Roi - Le Rapide des 3 Etangs";
                $desc="Tournoi rapide d'échecs organisé par le club d'échecs de rosporden, le 1er dimanche de Janvier. Tournoi principal et tournoi jeunes. Nous contacter au 07 70 01 13 30 ou par mail : fianchettoduroi@gmail.com";
                $keywords="tournoi échecs, tournoi rapide, club, echecs, échecs, rosporden,ffe, club bretagne, cours échecs, apprendre les échecs, finistère, bretagne";
                $robots="index, follow";
                $ogimage="https://echecsrosporden.org/resources/imgs/affiche2025.png";
                $ogurl="https://echecsrosporden.org/index.php?rapide3etangs";
                $ogdesc="Tournoi rapide d'échecs organisé par le club d'échecs de rosporden, le 1er dimanche de Janvier. Tournoi principal et tournoi jeunes. Nous contacter au 07 70 01 13 30 ou par mail : fianchettoduroi@gmail.com";
                $ogtitle="Fianchetto du Roi - Le Rapide des 3 Etangs";
                $ogtype="website";
                $ogsitename="Fianchetto du Roi - club d'échecs de Rosporden";
                $oglocale="fr_FR";
                $fbimage="https://echecsrosporden.org/resources/imgs/affiche2025.png";
                $fburl="https://echecsrosporden.org/index.php?rapide3etangs";
                $fbcaption="Fianchetto du Roi - Le Rapide des 3 Etangs";
                $fbtype="website";
                $fbsitename="Fianchetto du Roi - club d'échecs de Rosporden";
                $fblocale="fr_FR";
            }
            if($urlreq == "/index.php?rapide3etangs2025") {
                $title = "Edition 2025 - Fianchetto du Roi - Le Rapide des 3 Etangs";
                $desc="Tournoi rapide d'échecs organisé par le club d'échecs de rosporden le Dimanche 05/01/2025Tournoi principal et tournoi jeunes. Nous contacter au 07 70 01 13 30 ou par mail : fianchettoduroi@gmail.com";
                $keywords="tournoi échecs, tournoi rapide, club, echecs, échecs, rosporden,ffe, club bretagne, cours échecs, apprendre les échecs, finistère, bretagne";
                $robots="index, follow";
                $ogimage="https://echecsrosporden.org/resources/imgs/affiche2025.png";
                $ogurl="https://echecsrosporden.org/index.php?rapide3etangs2025";
                $ogdesc="Tournoi rapide d'échecs organisé par le club d'échecs de rosporden, le 1er dimanche de Janvier. Tournoi principal et tournoi jeunes. Nous contacter au 07 70 01 13 30 ou par mail : fianchettoduroi@gmail.com";
                $ogtitle="Edition 2025 - Fianchetto du Roi - Le Rapide des 3 Etangs";
                $ogtype="website";
                $ogsitename="Fianchetto du Roi - club d'échecs de Rosporden";
                $oglocale="fr_FR";
                $fbimage="https://echecsrosporden.org/resources/imgs/affiche2025.png";
                $fburl="https://echecsrosporden.org/index.php?rapide3etangs2025";
                $fbcaption="Edition 2025 - Fianchetto du Roi - Le Rapide des 3 Etangs";
                $fbtype="website";
                $fbsitename="Fianchetto du Roi - club d'échecs de Rosporden";
                $fblocale="fr_FR";
            }
            if($urlreq == "/index.php?actualites") {
                $title = "Fianchetto du Roi - Les Actualités";
                $desc="Les Actualités échiquèennes locales. Nous contacter au 07 70 01 13 30 ou par mail : fianchettoduroi@gmail.com";
                $keywords="tournois, club, echecs, échecs, rosporden,ffe, club bretagne, cours échecs, apprendre les échecs, actualités, finistère, bretagne";
                $robots="index, follow";
                $ogimage="https://echecsrosporden.org/resources/imgs/affiche2025.png";
                $ogurl="https://echecsrosporden.org/index.php?actualites";
                $ogdesc="Club d'échecs de Rosporden, Les actualités échiquéennes. Nous contacter au 07 70 01 13 30 ou par mail : fianchettoduroi@gmail.com";
                $ogtitle="Fianchetto du Roi - Les Actualités";
                $ogtype="website";
                $ogsitename="Fianchetto du Roi - club d'échecs de Rosporden";
                $oglocale="fr_FR";
                $fbimage="https://echecsrosporden.org/resources/imgs/affiche2025.png";
                $fburl="https://echecsrosporden.org/index.php?actualites";
                $fbcaption="Fianchetto du Roi - Les Actualités Echiquéennes";
                $fbtype="website";
                $fbsitename="Fianchetto du Roi - club d'échecs de Rosporden";
                $fblocale="fr_FR";
            }
            include('headactus.php');
        ?>      
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $title; ?></title>
        <meta name="description" content="<?php echo $desc; ?>">
        <meta name="keywords" content="<?php echo $keywords; ?>">
        <meta name="robots" content="<?php echo $robots; ?>">
        <meta property="og:image" content="<?php echo $ogimage; ?>">
        <meta property="og:url" content="<?php echo $ogurl; ?>">
        <meta property="og:description" content="<?php echo $ogdesc; ?>">
        <meta property="og:title" content="<?php echo $ogtitle; ?>">
        <meta property="og:type" content="<?php echo $ogtype; ?>">
        <meta property="og:site_name" content="<?php echo $ogsitename; ?>">
        <meta property="og:locale" content="<?php echo $oglocale; ?>">
        <meta property="fb:image" content="<?php echo $fbimage; ?>">
        <meta property="fb:url" content="<?php echo $fburl; ?>">
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

            $listepage = array(
                "club" => "club",
                "cours" => "cours",
                "actualites" => "actualites",
                "contact" => "contact",
                "rapide3etangs2025" => "rapide3etangs2025",
                "rapide3etangs" => "rapide3etangs",    
            );

            $listeactus = array(
                "3etangs2025" => "3etangs2025",
                "ronde5finistere2025" => "ronde5finistere2025",
                "tournoiamicaltrimartolod" => "tournoiamicaltrimartolod",
                "rapidefouesnant2025" => "rapidefouesnant2025",
            );

            $urlreq = $_SERVER['REQUEST_URI'];
            $urlP = parse_url($urlreq);
            $findCible = false;
            if (isset($urlP['query'])) {
                $target = $urlP['query'];
                $path = $urlP['path'];
                echo "target : $target";
                echo "path : $path";                
                if ($path == "" || $path == "/" || $path != "/index.php") {
                    include("accueil.php");
                    $findCible = true;
                } 
                if ($path == "/index.php") {                   
                    $findActus = stripos($target, "actualites&");
                    if ($findActus === 0) {                        
                        foreach ($listeactus as $key => $value) {
                            $position2 = stripos($target, $key);
                            if ($position2 === 11) {
                                $findCible = true;
                                include("./actus/".$value.".php");
                                break;
                            }
                        }                        
                    } else {
                        foreach ($listepage as $key => $value) {
                            $position = stripos($target, $key);
                            if ($position === 0) {
                                $findCible = true;
                                include($value.".php");
                                break;
                            }
                        }
                    }      
                    if ($findCible === false) {
                        include("accueil.php");
                    }
                    
                    
                }
                

            } else  {
                $findCible = true;
                include("accueil.php");
            }

        ?>        
    </body>
</html>