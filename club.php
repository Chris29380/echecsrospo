
<div class="bgaccpage">
      <div class="logopage">
            <a href="/index.php"><img src="/img/logo.png" alt="Fianchetto du Roi"/></a>
      </div>
      <div class="titlepage">
            <?php 
                $urlreq = $_SERVER['REQUEST_URI'];
                $titlearticle = "Club d'Echecs de Rosporden";
                echo "
                    <a href=$urlreq>
                        <h1>$titlearticle</h1>
                    </a>
                ";
            ?>
      </div>
      <?php include("menu.php"); ?>

      <div class="content">
            <div class="imgarticle" id="imgarticle">
                  <script type="text/javascript">
                        loadPicture("/resources/imgs/facadeclub.png", "club");
                  </script>
            </div>
            <div class="contentarticle" id="contentarticle">

                  <p>Le <b>club d'échecs de Rosporden</b> est un club familial, fondé en 2014.</p>
                  <p>Nous nous retrouvons pour <b>jouer</b> aux échecs, <b>apprendre</b> et <b>progresser</b> ensemble, le jeudi soir et la samedi après-midi.</p>
                  <p>Le club est ouvert à tous, du <b>joueur débutant</b> au <b>joueur expérimenté</b>, à partir de 6 ans.</p>
                  <p>Nous dispensons des cours d'échecs le samedi après-midi, de 17h30 à 19h30.</p>
                  <p>Le club dispose d'une équipe qui évolue en D1 cette saison.</p>
                  <br/>
                  <br/>
                  <p>Pour accéder au local du club d'échecs, veuillez sélectionner "Mairie" sur l'interphone, puis "Appel".</p>

                  <div class="buttonacc">
                        <a href="https://www.google.com/maps/place/41+Rue+Hippolyte+le+Bas,+29140+Rosporden/@47.9576676,-3.8313481,17z/data=!3m1!4b1!4m6!3m5!1s0x4810de41e6eb170f:0x4eb4793b2efb4a8d!8m2!3d47.9576677!4d-3.8264772!16s%2Fg%2F11c0_lctqh?entry=ttu&g_ep=EgoyMDI0MTIxMS4wIKXMDSoASAFQAw%3D%3D" target="_blank">
                              <button>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" viewBox="0 0 24 24"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#000000" d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/></svg>
                                    Itinéraire
                              </button>
                        </a>
                  </div>

                  <div class="buttonacc">
                        <a href="https://www.google.com/maps/place/41+Rue+Hippolyte+le+Bas,+29140+Rosporden/@47.9576676,-3.8313481,17z/data=!3m1!4b1!4m6!3m5!1s0x4810de41e6eb170f:0x4eb4793b2efb4a8d!8m2!3d47.9576677!4d-3.8264772!16s%2Fg%2F11c0_lctqh?entry=ttu&g_ep=EgoyMDI0MTIxMS4wIKXMDSoASAFQAw%3D%3D" target="_blank">
                              <button>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" viewBox="0 0 24 24"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#000000" d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/></svg>
                                    Adhésion
                              </button>
                        </a>
                  </div>

            </div>
                  
      </div>

      <?php include("footer.php"); ?>
</div>