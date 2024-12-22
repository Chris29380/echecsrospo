<div class="menuacc">
    <div class="menuclose" onclick="hidemenu()">
        <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" viewBox="0 0 24 24"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#000000" d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/></svg>
    </div>
    <ul>
        <?php
            $urlreq = $_SERVER['REQUEST_URI'];
            if($urlreq == "/" || $urlreq == "/index.php") {
                echo '
                    <li><a href="/index.php"><i class="fa-solid fa-folder"></i> Accueil</a></li>
                    <li><a href="/index.php?club"><i class="fa-solid fa-folder"></i> Le Club</a></li>
                    <li><a href="/index.php?chess"><i class="fa-solid fa-folder"></i> Chess</a></li>
                    <li><a href="/index.php?chess"><i class="fa-solid fa-folder"></i> Actualités</a></li>
                ';
            }
        ?>
    </ul>
</div>