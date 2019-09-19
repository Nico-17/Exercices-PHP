   <HTML>
           <head>
                   <meta charset="utf-8" />
           </head>
           
           
           <BODY><TABLE BORDER>
        <?php
        $nom["Thècle"]="Assicmonpote";
        $nom["Édith"]="Avuleur";
        $nom["Kelly"]="Diocy";
        $nom["Mélusine"]="Enfaillite";
        $nom["Elmer"]="Hitmieux";
        reset($nom);
        while (list($clef,$valeur)=each($nom)) {
          echo "<TR><TD>$clef</TD><TD>$valeur</TD></TR>\n";
        }
        ?>
        </TA