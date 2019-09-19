<HTML>
    <head>
      <meta charset="utf-8" />
   </head>
    
    
    <BODY>
    <H2>Premiers essais de contrôle d'identité</H2>
    
    <?php		if( isset($_POST['nom']) ) {				$nom=$_POST['nom'];			} else {				$nom='';			}
    if ((trim(strtolower($nom))==trim(strtolower("Picsou")))
        &&(trim(strtolower($_POST['prenom']))==trim(strtolower("Balthazar")))
        &&(trim(strtolower($_POST['password']))==trim(strtolower("secret")))) {
      echo "Bienvenue Dieu !<BR>\n";
    } else {
      // sortie provisoire du mode php (pour écrire du texte html pur)
    ?>
      <HR>
      Veuillez vous identifier SVP:<BR>
      <FORM METHOD="POST" ACTION="15-controledidentite.php">
      Nom: <INPUT NAME="nom"><BR>
      Prénom: <INPUT NAME="prenom"><BR>
      Mot de passe: <INPUT TYPE="password" NAME="password"><BR>
      <INPUT TYPE="submit"><BR>
      </FORM>
      <HR>
    <?php
	}   // retour dans le mode php (pour fermer le "else")
    ?>		</body></html>