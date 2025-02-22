<?php

      $urlreq = $_SERVER['REQUEST_URI'];
      if ($urlreq == '/index.php?actualites') {
            $titlearticle = "Le Fianchetto du Roi accueille la 5ème ronde du tournoi du Finistère";
            $description = "Le club d'échecs de Rosporden accueille la 5ème ronde du tournoi du Finistère organisé par le CD29, le samedi 22 mars au centre culturel de rosporden.";
            $htmlshort="
                  <div class='shortart'>
                        <div class='imgshortart' id='imgshortart'>
                              <a href='/index.php?actualites?ronde5finistere2025'>
                                    <img src='/resources/imgs/chess-generic.jpg' alt='Tournoi du Finistère, ronde 5 organisée par le club d'échecs de Rosporden.'/>
                              </a>
                        </div>
                        <div class='contentshortart' id='contentshortart'>
                              <div class='shorttitle'><a href='/index.php?actualites?ronde5finistere2025'>$titlearticle</a></div>
                              <div class='shortdesc'>$description</div>
                        </div>
                  </div>
            ";
            echo $htmlshort;
      } 
      if ($urlreq != '/index.php?actualites') {
            $titlearticle = "Le Fianchetto du Roi accueille la 5ème ronde du tournoi du Finistère";
            $html1="
                  <div class='bgaccpage'>
                        <div class='headerpage'>
                              <div class='logopage'>
                                    <a href='/index.php'><img src='/img/logo.png' alt='Fianchetto du Roi'/></a>
                              </div>
                              <div class='titlepage'>
                                    <a href=$urlreq>
                                          <h1>$titlearticle</h1>
                                    </a>
                              </div>
                        </div>
            ";
            echo $html1;
            include('menu.php');
            $html2="
                  <div class='content'>
                        <div class='breadcrumb' id='breadcrumb'>
                              <a href='/index.php?actualites'>> Actualités</a>
                        </div>
                        <div class='imgarticle' id='imgarticle'>
                              <script type='text/javascript'>
                                    loadPicture('../resources/imgs/chess-generic.jpg', '5ème ronde tournoi d\'échecs du Finistère');
                              </script>
                        </div>
                        <div class='contentarticle' id='contentarticle'>
                              <p>Le <b>club d'échecs de Rosporden</b> accueille la 5ème ronde du tournoi du Finistère organisé par le CD29, le samedi 22 mars au centre culturel de rosporden.</p>
                              <div class='alert'>
                                    Adresse du centre culturel : 17 Rue Alsace Lorraine, 29140 Rosporden.
                              </div>
                              <div class='buttonacc'>
                                    <a href='https://www.google.fr/maps/dir//Centre+Culturel+-+Rosporden,+17+Rue+Alsace+Lorraine,+29140+Rosporden/@47.9569647,-3.8292058,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0x4810de41f946bb15:0x4c1071e279a8e09f!2m2!1d-3.8266453!2d47.95705?entry=ttu&g_ep=EgoyMDI1MDIxOC4wIKXMDSoASAFQAw%3D%3D' target='_blank'>
                                          <button class='itinéraire'>
                                          <svg xmlns='http://www.w3.org/2000/svg' height='20' width='15' viewBox='0 0 384 512'><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d='M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z'/></svg>
                                                Itinéraire
                                          </button>
                                    </a>
                              </div>

                        </div>
                  
                  </div>
            ";
            echo $html2;
            include('footer.php');
            echo '</div>';
            
      }

?>