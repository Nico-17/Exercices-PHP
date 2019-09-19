<HTML>

  

  <head>

      <meta charset="utf-8" />

   </head>

  

  <BODY>

          <?php

          echo "Vous avez tue:\n";

          echo "<UL>\n";

          echo "  <LI>".$_GET['poules']." poules,\n";

          echo "  <LI>".$_GET['cochons']." cochons,\n";

          echo "  <LI>".$_GET['vaches']." vaches,\n";

          echo "  <LI>".$_GET['amis']." amis.\n";

          echo "</UL>\n";

          $perdu=$_GET['poules']*1+$_GET['cochons']*3+$_GET['vaches']*5+$_GET['amis']*10;

          echo "Vous avez donc perdu: "

              .$_GET['poules']."*1 + ".$_GET['cochons']."*3 + ".$_GET['vaches']."*5 + ".$_GET['amis']."*10=$perdu points."

              ."\n<BR>\n";

          $permis=floor($perdu/100);

          if ($permis<1) {

            echo "<B>Votre permis est encore valide, mais attention!</B>\n";

          } else {

            echo "<B>Vous avez épuisé $permis permis, vous devez payer "

                .($permis*1000)." Euros. Ou mieux... Arrêtez vos bêtises\n";

          }

          ?>

          

          </body>

          </html>