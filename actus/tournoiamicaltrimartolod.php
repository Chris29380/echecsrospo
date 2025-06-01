<?php

      $urlreq = $_SERVER['REQUEST_URI'];
      if ($urlreq == '/index.php?actualites') {
            $titlearticle = "Tournoi Amicale 31/05 Brasserie Tri martolod - Concarneau";
            $description = "Le club d'échecs de Rosporden organise un tournoi rapide amicale le 31 mai 2025 à la brasserie Tri martolod à Concarneau.";
            $htmlshort="
                  <div class='shortart'>
                        <div class='imgshortart' id='imgshortart'>
                              <a href='/index.php?actualites&tournoiamicaltrimartolod'>
                                    <img src='/resources/imgs/tournoitrimartolod3105.png' alt='Tournoi Amicale 31/05 Brasserie Tri martolod - Concarneau.'/>
                              </a>
                        </div>
                        <div class='contentshortart' id='contentshortart'>
                              <div class='shorttitle'><a href='/index.php?actualites&tournoiamicaltrimartolod'>$titlearticle</a></div>
                              <div class='shortdesc'>$description</div>
                        </div>
                  </div>
            ";
            echo $htmlshort; 
      } 
      if ($urlreq != '/index.php?actualites') {
            $titlearticle = "Tournoi Amicale 31/05 Brasserie Tri martolod - Concarneau";
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
            $html2='
                  <div class="content">
                        <div class="breadcrumb" id="breadcrumb">
                              <a href="/index.php?actualites">> Actualités</a>
                        </div>
                        <div class="imgarticle" id="imgarticle">       
                              <a href="../resources/imgs/tournoitrimartolod3105.png" target="_blank">
                                    <img src="../resources/imgs/tournoitrimartolod3105.png" alt="Tournoi Amicale 31/05 Brasserie Tri martolod - Concarneau">
                              </a>    
                        </div>
                        <div class="contentarticle" id="contentarticle">
                              <p>Le <b>club d"échecs de Rosporden</b> organise un tournoi rapide amicale, le samedi 31/05/2025 à la Brasserie Tri martolod à Concarneau.</p>
                              <p>Le tournoi se déroule sur 7 rondes, avec une cadence de 12min + 3s.</p>
                              <p>Pointage de 13h à 13h30.</p>
                              <p>Le tournoi est ouvert à tous!</p>
                              <p>Pré-inscriptions souhaités par mail ou par téléphone.</p>
                              <div class="alert">
                                    Adresse: ZA du Colguen, 29900 Concarneau
                              </div>
                              <div class="buttonacc">
                                    <a href="https://www.google.com/maps/dir//ZA+du+Colguen,+29900+Concarneau/@47.9008074,-3.9883304,12z/data=!3m1!4b1!4m8!4m7!1m0!1m5!1m1!1s0x4810dba235fac3fb:0x64c650527049f3b2!2m2!1d-3.9060248!2d47.9010448?entry=ttu&g_ep=EgoyMDI1MDQzMC4xIKXMDSoASAFQAw%3D%3D" target="_blank">
                                          <button class="itinéraire">
                                          <svg xmlns="http://www.w3.org/2000/svg" height="20" width="15" viewBox="0 0 384 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/></svg>
                                                Itinéraire
                                          </button>
                                    </a>
                              </div>

                        </div>
                  
                  </div>
            ';
            echo $html2;
            include('footer.php');
            echo '</div>';
            
      }

?>