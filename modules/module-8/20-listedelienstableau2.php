<HTML>
           <head> 
                 <meta charset="utf-8" />
         </head>
  
  
  <BODY><UL>
          <?php
          $liens=file("20-listedeliens2.txt");
          for ($i=0;$i<count($liens);$i++) {
            $parties=explode("**",$liens[$i]);
            echo "<LI><A HREF=\"".$parties[0]."\">".$parties[1]."</A>\n";
          }
          ?>
          </UL>