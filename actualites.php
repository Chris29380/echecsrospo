
<div class="bgaccpage">
      <div class="logopage">
            <a href="/index.php"><img src="/img/logo.png" alt="Fianchetto du Roi"/></a>
      </div>
      <div class="titlepage">
            <?php 
                $urlreq = $_SERVER['REQUEST_URI'];
                $titlearticle = "Club d'Echecs de Rosporden - Actualités";
                echo "
                    <a href=$urlreq>
                        <h1>$titlearticle</h1>
                    </a>
                ";
            ?>
      </div>
      <?php include("menu.php"); ?>

      <div class="content">
            
            <div class="contentarticle" id="contentarticle">

                  <p>Les actualités échiquéennes.</p>

                  <?php
                        $filesord = [];
                        $liste_rep = scandir("./actus");
                        $i = 0;
                        $num = count($liste_rep);
                        while($i < $num){
                              if($liste_rep[$i] != "." && $liste_rep[$i] != ".."){
                                    filemtime("./actus/".$liste_rep[$i]);
                                    $linerep = ["name" => $liste_rep[$i], "mtime" => filemtime("./actus/".$liste_rep[$i])];
                                    array_push($filesord, $linerep);
                              }
                        $i++;
                        }
                        arsort($filesord);
                        if(count($filesord) > 0){
                              $i = count($filesord);
                              while($i >= 0){
                                    if($filesord[$i]["name"] != "." && $filesord[$i]["name"] != ".."){
                                          include("./actus/".$filesord[$i]["name"]);
                                    }
                              $i = $i - 1;
                              }
                        }
                  ?>

                  

            </div>
                  
      </div>

      <?php include("footer.php"); ?>
</div>