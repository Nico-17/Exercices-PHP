<HTML>
                   <head>
                   <meta charset="utf-8" />
                   </head>
        
        
        <BODY><TABLE BORDER>
        <?php		/*$prenoms = array("Thècle", "Édith", "Kelly");				echo $prenoms[0].'<br>';		echo $prenoms[1].'<br>';		echo $prenoms[2].'<br>';*/				//echo $prenoms[3];		        /*		foreach ($prenoms as $valeur) {			echo $valeur.'<br>';		}		*/		
        $nom["Thècle"]="Assicmonpote";
        $nom["Édith"]="Avuleur";
        $nom["Kelly"]="Diocy";
        $nom["Mélusine"]="Enfaillite";
        $nom["Elmer"]="Hitmieux";
        foreach ($nom as $clef => $valeur) {
          echo "<TR><TD>$clef</TD><TD>$valeur</TD></TR>\n";
        }
        ?>
        </TABLE>