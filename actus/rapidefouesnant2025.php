<?php

      $urlreq = $_SERVER['REQUEST_URI'];
      if ($urlreq == '/index.php?actualites') {
            $titlearticle = "26ème Tournoi Rapide Fouesnant 2025";
            $description = "Le club d'échecs de Fouesnant organise son 26ème tournoi rapide le dimanche 8 juin 2025.";
            $htmlshort="
                  <div class='shortart'>
                        <div class='imgshortart' id='imgshortart'>
                              <a href='/index.php?actualites&rapidefouesnant2025'>
                                    <img src='/resources/imgs/chess-generic.jpg' alt='26eme tournoi rapide fouesnant 2025'/>
                              </a>
                        </div>
                        <div class='contentshortart' id='contentshortart'>
                              <div class='shorttitle'><a href='/index.php?actualites&rapidefouesnant2025'>$titlearticle</a></div>
                              <div class='shortdesc'>$description</div>
                        </div>
                  </div>
            ";
            echo $htmlshort;
      } 
      if ($urlreq != '/index.php?actualites') {
            $titlearticle = "26ème Tournoi Rapide Fouesnant 2025";
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
                              <a href="../resources/imgs/chess-generic.jpg" target="_blank">
                                    <img src="../resources/imgs/chess-generic.jpg" alt="26ème tournoi rapide fouesnant 2025">
                              </a>
                        </div>
                        <div class="contentarticle" id="contentarticle">
                              <p>Le <b>club d"échecs de Fouesnant</b> organise son 26ème tournoi rapide le dimanche 8 juin 2025.</p>
                                    <p>Dates :	dimanche 08 juin 2025 - dimanche 08 juin 2025</p>
                                    <p>Prise en compte Elo Rapide :	Rapide Juillet 2025</p>
                                    <p>Prise en compte Elo FIDE :	FIDE Juillet 2025</p>
                                    <p>Homologué par :	FFE</p>
                                    <p>Nombre de rondes :	7</p>
                                    <p>Cadence :	15min + 5s</p>
                                    <p>Appariements :	Suisse</p>
                                    <p>Organisateur :	Frédéric MARTIN</p>
                                    <p>Arbitre :	LECORNU Laurent</p>
                                    <p>Adresse :	Espace Associatif de Kerourgue 53 rue de Kerourgue 29170 Fouesnant</p>
                                    <p>Contact :	echecs.fouesnant@free.fr</p>
                                    <p>Inscription Senior :	12 €</p>
                                    <p>Inscription Jeunes :	6 €</p>
                                    <p>Annonce :	7 r. - 15+5s/c</p>
                                    <p>Rens.: echecs.fouesnant@free.fr</p>
                                    <p>Fin du pointage 9 h 30</p>
                                    <p>Palmarès et remise des prix vers 17 h 30</p>
                                    <p>Inscriptions par mail à : echecs.fouesnant@free.fr</p>
                                    <p>Pas d\'inscription sur place</p>
                              <div class="alert">
                                    <p><a href="https://www.echecs.asso.fr/FicheTournoi.aspx?Ref=66898" target="_blank">Infos Tournoi Adulte</a></p>
                                    <p><a href="https://www.echecs.asso.fr/FicheTournoi.aspx?Ref=66897" target="_blank">Infos Tournoi U12 - U16</a></p>
                                    <p><a href="https://www.echecs.asso.fr/FicheTournoi.aspx?Ref=66896" target="_blank">Infos Tournoi U8 - U10</a></p>
                              </div>
                              <div class="buttonacc">
                                    <a href="https://www.google.fr/maps/place/53+Rue+de+Kerourgue,+29170+Fouesnant/@47.8939229,-4.0174849,16z/data=!3m1!4b1!4m6!3m5!1s0x4810d0ff031c37f5:0xc59ea31902bbf374!8m2!3d47.893923!4d-4.012614!16s%2Fg%2F11csjxpwwv?entry=ttu&g_ep=EgoyMDI1MDUyOC4wIKXMDSoASAFQAw%3D%3D" target="_blank">
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