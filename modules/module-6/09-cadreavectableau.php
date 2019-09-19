<HTML><BODY>

                <BLOCKQUOTE><TABLE BORDER><TR>

                <?php

                $k="*";

                $MAX=10;
				
                for ($i=1;$i<=$MAX;$i++) {

                  echo "\t<TD>$k</TD>\n";

                }

                echo "</TR>\n";

                for ($i=2;$i<$MAX;$i++) {

                  echo "<TR>\n\t<TD>$k</TD>\n";

                  for ($j=2;$j<$MAX;$j++) {

                    echo "\t<TD></TD>\n";

                  }

                  echo "\t<TD>$k</TD>\n</TR>\n";

                }

                echo "<TR>\n";

                for ($i=1;$i<=$MAX;$i++) {

                  echo "\t<TD>$k</TD>\n";

                }

                ?>

                </TR>

                </TABLE></BLOCKQUOTE>

                </BODY></HTML>

                

                Cadre avec tableau 