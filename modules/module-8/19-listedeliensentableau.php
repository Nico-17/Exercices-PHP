 <HTML><HEAD>
   
      <meta charset="utf-8" />
          <TITLE>Utilisation des tableaux</TITLE>
          </HEAD><BODY><UL>
          <?php
          $liens=file("19-listedeliens.txt");
          for ($i=0;$i<count($liens);$i++) {
            echo "<LI><A HREF=\"".$liens[$i]."\">".$liens[$i]."</A>\n";
          }
          ?>
          </UL></BODY></HTML>