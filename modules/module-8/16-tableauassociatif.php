 <HTML>
         <head> 
                 <meta charset="utf-8" />
         </head>
         
         <BODY>
        <FORM METHOD="GET" ACTION="16-tableauassociatif.php">
          <SELECT NAME="prenom">
            <OPTION VALUE="Thècle">Thècle
            <OPTION VALUE="Édith">Édith
            <OPTION VALUE="Kelly">Kelly
            <OPTION VALUE="Mélusine">Mélusine
            <OPTION VALUE="Elmer">Elmer
          </SELECT>
          <INPUT TYPE="submit" VALUE="renseignements">
        </FORM>
        <?php
        $nom["Thècle"]="Assicmonpote";
        $nom["Édith"]="Avuleur";
        $nom["Kelly"]="Diocy";
        $nom["Mélusine"]="Enfaillite";
        $nom["Elmer"]="Hitmieux";
        $adresse["Thècle"]="123 rue Alex KUZBIDON";
        $adresse["Édith"]="951 rue Ondine OUCESOIR";
        $adresse["Kelly"]="5 boulevard Rosa REMECITOYENS";
        $adresse["Mélusine"]="7 rue Jean TANLAMER";
        $adresse["Elmer"]="99 avenu Dino ZORE";
        $ville["Thècle"]="Rennes";
        $ville["Édith"]="Douarnenez";
        $ville["Kelly"]="Auchel";
        $ville["Mélusine"]="Chamonix";
        $ville["Elmer"]="Langres";
        
        $prenom=$_GET['prenom'];
        
        if (isset($prenom)) {
          echo "Prénom : $prenom<BR>\nNom : ".$nom[$prenom]
              ."<BR>\nAdresse : ".$adresse[$prenom]
              ."<BR>\nVille : ".$ville[$prenom];
      