
<div class="bgaccpage">
      <div class="headerpage">
            <div class="logopage">
                  <a href="/index.php"><img src="/img/logo.png" alt="Fianchetto du Roi"/></a>
            </div>
            <div class="titlepage">
                  <?php 
                  $urlreq = $_SERVER['REQUEST_URI'];
                  $titlearticle = "Nous contacter";
                  echo "
                        <a href=$urlreq>
                              <h1>$titlearticle</h1>
                        </a>
                  ";
                  ?>
            </div>
      </div>
      <?php include("menu.php"); ?>

      <div class="content">
            <div class="imgarticle" id="imgarticle">
                  <script type="text/javascript">
                        loadPicture("/resources/imgs/contact.jpg", "Nous Contacter");
                  </script>
            </div>
            <div class="contentarticle" id="contentarticle">

                  <div class="alert">
                        Adresse du club : 41 Rue Hippolyte le Bas, 29140 Rosporden
                        <br/>
                        <br/>
                        Pour accéder au local du club d'échecs, veuillez sélectionner <b>"Mairie"</b> sur l'interphone, puis <b>"Appel"</b>.
                        <br/>
                        <br/>
                        Mail : <a href="mailto:fianchettoduroi@gmail.com">fianchettoduroi@gmail.com</a>
                        <br/>
                        <br/>
                        Téléphone : 07 70 01 13 30
                        <br/>
                  </div>
                  <div class="buttonacc">
                        <a href="https://www.google.com/maps/place/41+Rue+Hippolyte+le+Bas,+29140+Rosporden/@47.9576676,-3.8313481,17z/data=!3m1!4b1!4m6!3m5!1s0x4810de41e6eb170f:0x4eb4793b2efb4a8d!8m2!3d47.9576677!4d-3.8264772!16s%2Fg%2F11c0_lctqh?entry=ttu&g_ep=EgoyMDI0MTIxMS4wIKXMDSoASAFQAw%3D%3D" target="_blank">
                              <button class="itinéraire">
                              <svg xmlns="http://www.w3.org/2000/svg" height="20" width="15" viewBox="0 0 384 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/></svg>
                                    Itinéraire
                              </button>
                        </a>
                        <a href="https://www.helloasso.com/associations/fianchetto-du-roi/adhesions/cotisation-2024-2025-avec-licence" target="_blank">
                              <button class="adhésion">
                              <svg xmlns="http://www.w3.org/2000/svg" height="20" width="17.5" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M64 32C28.7 32 0 60.7 0 96L0 416c0 35.3 28.7 64 64 64l320 0c35.3 0 64-28.7 64-64l0-320c0-35.3-28.7-64-64-64L64 32zM200 344l0-64-64 0c-13.3 0-24-10.7-24-24s10.7-24 24-24l64 0 0-64c0-13.3 10.7-24 24-24s24 10.7 24 24l0 64 64 0c13.3 0 24 10.7 24 24s-10.7 24-24 24l-64 0 0 64c0 13.3-10.7 24-24 24s-24-10.7-24-24z"/></svg>
                                    Adhésion
                              </button>
                        </a>
                  </div>

            </div>
                  
      </div>

      <?php include("footer.php"); ?>
</div>