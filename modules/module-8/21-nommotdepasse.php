   <HTML>
     
         <head> 
                 <meta charset="utf-8" />
         </head>
     
     <BODY>
     
          <?php
          $personnes=file("21-listedenoms.txt");
          for ($i=0;$i<count($personnes);$i++) {
            $parties=explode(";",$personnes[$i]);
            $code=$parties[0];
            $prenom[$code]=$parties[1];
            $nom[$code]=$parties[2];
            $password[$code]=$parties[3];
          }
          ?>
          <FORM ACTION="21-nommotdepasse.php" METHOD="POST">
          <SELECT NAME="qui">
          <?php
          reset($nom);
          while (list($code,$n)=each($nom)) {
            echo "<OPTION VALUE=\"$code\">".$prenom[$code]." ".strtoupper($n)."\n";
          }
          ?>
          </SELECT>
          <INPUT TYPE="submit" VALUE="Quel mot de passe ?">
          </FORM>
          <?php
          $qui=$_POST['qui'];
          if (isset($qui)) {
            echo "<BR><HR>Le mot de passe de ".$prenom[$qui]." "
            .strtoupper($nom[$qui])." est ".$password[$qui];
          }
   