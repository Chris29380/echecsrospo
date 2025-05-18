<?php

      $urlreq = $_SERVER['REQUEST_URI'];
      if ($urlreq == '/index.php?actualites') {
            $titlearticle = "Le Tournoi d'échecs des 3 Etangs 2025";
            $description = "Le club d'échecs de Rosporden a organisé le 1er rapide des 3 étangs, le dimanche 05 janvier 2025 au centre culturel de rosporden.";
            $htmlshort="
                  <div class='shortart'>
                        <div class='imgshortart' id='imgshortart'>
                              <a href='/index.php?actualites&3etangs2025'>
                                    <img src='/resources/imgs/affiche2025.png' alt='Rapide des 3 Etangs 2025.'/>
                              </a>
                        </div>
                        <div class='contentshortart' id='contentshortart'>
                              <div class='shorttitle'><a href='/index.php?actualites&3etangs2025'>$titlearticle</a></div>
                              <div class='shortdesc'>$description</div>
                        </div>
                  </div>
            ";
            echo $htmlshort;
      } 
      if ($urlreq != '/index.php?actualites') {
            $titlearticle = "Le Tournoi des 3 Etangs 2025";
            $html1="
                  <div class='bgaccpage'>
                        <div class='headerpage'>
                              <div class='logopage'>
                                    <a href='/index.php'><img src='/img/logo.png' alt='Tournoi Echecs des 3 Etangs 2025'/></a>
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
                              <a href="../resources/imgs/affiche2025.png" target="_blank">
                                    <img src="../resources/imgs/affiche2025.png" alt="Tournoi Echecs des 3 Etangs 2025">
                              </a>          
                        </div>
                        <div class="contentarticle" id="contentarticle">
                              <p>Le <b>Tournoi d"Echecs, Rapide des 3 Etangs</b> s"est déroulé le dimanche 05/01/2025 au centre culturel de Rosporden..</p>
                              <p>Cette 1ère édition fût un succès, avec 42 participants pour le tournoi principal, et 11 participants au tournoi jeunes.</p>
                              <p>Rendez-vous le 1er dimanche de Janvier pour la 2ème édition.</p>

                        </div>                  
                  </div>
            ';
            echo $html2;
            include('footer.php');
            echo '</div>';
            
      }

?>