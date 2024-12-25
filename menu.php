<?php
    $urlreq = $_SERVER['REQUEST_URI'];
    if($urlreq == "/" || $urlreq == "/index.php") {
        echo '
            <div class="burger" onclick="showmenu()"> 
            <svg xmlns="http://www.w3.org/2000/svg" height="24" width="21" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ff7a00" d="M0 96C0 78.3 14.3 64 32 64l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 128C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 288c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32L32 448c-17.7 0-32-14.3-32-32s14.3-32 32-32l384 0c17.7 0 32 14.3 32 32z"/></svg>
            </div>
            <div class="menuacc">
                <div class="menuclose" onclick="hidemenu()">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" viewBox="0 0 24 24"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#000000" d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/></svg>
                </div>
                <ul>
                    <li><a href="/index.php"><i class="fa-solid fa-folder"></i> Accueil</a></li>
                    <li><a href="/index.php?club"><i class="fa-solid fa-folder"></i> Le Club</a></li>
                    <li><a href="/index.php?chess"><i class="fa-solid fa-folder"></i> Chess</a></li>
                    <li><a href="/index.php?chess"><i class="fa-solid fa-folder"></i> Actualités</a></li>
                </ul>
            </div>
        ';
    }
    if($urlreq == "/index.php?club") {
        echo '
            <div class="burger" onclick="showmenupage()">   
            <svg xmlns="http://www.w3.org/2000/svg" height="24" width="21" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ff7a00" d="M0 96C0 78.3 14.3 64 32 64l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 128C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 288c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32L32 448c-17.7 0-32-14.3-32-32s14.3-32 32-32l384 0c17.7 0 32 14.3 32 32z"/></svg>
            </div>
            <div class="menuacc">
                <div class="menuclose" onclick="hidemenupage()">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" viewBox="0 0 24 24"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#000000" d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/></svg>
                </div>
                <ul>
                    <li><a href="/index.php"><i class="fa-solid fa-folder"></i> Accueil</a></li>
                    <li><a href="/index.php?club"><i class="fa-solid fa-folder"></i> Le Club</a></li>
                    <li><a href="/index.php?chess"><i class="fa-solid fa-folder"></i> Chess</a></li>
                    <li><a href="/index.php?chess"><i class="fa-solid fa-folder"></i> Actualités</a></li>
                </ul>
            </div>
        ';
    }
?>