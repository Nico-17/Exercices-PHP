 <HTML>

   

   <head>

      <meta charset="utf-8" />

   </head>

   

   <BODY>

          Avec liste déroulante:<BR>

          <FORM METHOD="get" ACTION="14-calculatrice.php">

          <CENTER>

          <INPUT NAME="a" SIZE="5" require>

          <SELECT NAME="par">

            <OPTION VALUE="+">+

            <OPTION VALUE="-">-

            <OPTION VALUE="*">*

            <OPTION VALUE="/">/

          </SELECT>

          <INPUT NAME="b" SIZE="5" require>

          <BR>

          <INPUT TYPE="submit" VALUE="envoyer">

          </CENTER>

          </FORM><HR>

          <!-- --------------------------------------------------- -->

          Avec boutons radios:<BR>

          <FORM METHOD="get" ACTION="14-calculatrice.php">

          <CENTER>

          <TABLE><TR>

            <TD>

              <INPUT NAME="a" SIZE="5" require>

            </TD><TD>

              <INPUT TYPE="radio" NAME="par" VALUE="+" CHECKED>+<BR>

              <INPUT TYPE="radio" NAME="par" VALUE="-">-<BR>

              <INPUT TYPE="radio" NAME="par" VALUE="*">*<BR>

              <INPUT TYPE="radio" NAME="par" VALUE="/">/

            </TD><TD>

              <INPUT NAME="b" SIZE="5" require>

            </TD>

          </TR><TR>

            <TD COLSPAN="3" ALIGN="center">

              <INPUT TYPE="submit" VALUE="envoyer">

            </TD>

          </TABLE></CENTER>

          </FORM><HR>

          <!-- --------------------------------------------------- -->

          <?php

          

         if (isset($_GET['par']))

            $par=$_GET['par'];

            

         if (isset($_GET['a']))

            $a=$_GET['a'];
         

          if (isset($_GET['b']))

            $b=$_GET['b'];     

          

          if (isset($par)) {

            echo "<CENTER>Le résultat du calcul précédent est: "

                ."<TT>$a$par$b=";

          if ($par=="+") {

            echo $a+$b;

          } elseif ($par=="-") {

            echo $a-$b;

          } elseif ($par=="*") {

            echo $a*$b;

          } else {

            echo $a/$b;

          }

            echo "\n</CENTER>\n";

          }

          ?>

          </BODY></HTML>