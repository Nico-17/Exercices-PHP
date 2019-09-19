<?php
// Configuration
// copie ? (envoie une copie au visiteur)
$copie = 'non'; // 'oui' ou 'non'

// Destinataire
$destinataire = 'contact@sylvan-larochelle.com';
$message_envoye = "Votre message a bien été envoyé, l'équipe de Digital-Sup vous répondra dans les plus brefs délais. ";
$message_non_envoye ="L'envoi de votre message a échoué, merci de réessayer."; 
$message_erreur = "Vous devez envoyer le formulaire via la page index";
$message_formulaire_invalide = "Certains champs sont invalides, merci de vérifier votre adresse e-mail.";

/*
	 * cette fonction sert à nettoyer et enregistrer un texte
	 */
function Rec($text){
	$text = htmlspecialchars(trim($text), ENT_QUOTES);
	if (1 === get_magic_quotes_gpc())
	{
		$text = stripslashes($text);
	}
	$text = nl2br($text);
	return($text);
};

/*
	 * Cette fonction sert à vérifier la syntaxe d'un email
	 */
	function IsEmail($email) {

	
	
		$value = preg_match('/^(?:[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+\.)*[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+@(?:(?:(?:[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!\.)){0,61}[a-zA-Z0-9_-]?\.)+[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!$)){0,61}[a-zA-Z0-9_]?)|(?:\[(?:(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\.){3}(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\]))$/', $email);
		return (($value === 0) || ($value === false)) ? false : true;
	}


if (!isset($_POST['envoi']))
{
	$affichage = "<p>".$message_erreur."</p>";
}
else
{	// formulaire envoyé, on récupère tous les champs.
	$nom     = (isset($_POST['nom']))     ? Rec($_POST['nom'])     : '';
	$email   = (isset($_POST['email']))   ? Rec($_POST['email'])   : '';
	$objet   = (isset($_POST['objet']))   ? Rec($_POST['objet'])   : '';
	$message = (isset($_POST['message'])) ? Rec($_POST['message']) : '';
	$telephone = (isset($_POST['telephone'])) ? Rec($_POST['telephone']) : '';

	// On va vérifier les variables et l'email ...

	$email = (IsEmail($email)) ? $email : '';
	$objet = "Message envoyé depuis www.digital-sup.com : " . $objet;
	// var_dump ($email);
	// var_dump($message);
	// var_dump($telephone);
	// var_dump($objet);

	if (($nom != '') && ($email != '') && ($objet != '') && ($message != ''))
	{
		// les 4 variables sont remplies, on génère puis envoie le mail
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'From:'.$nom.' <'.$email.'>' . "\r\n" .
				'Reply-To:'.$email. "\r\n" .
				'Content-Type: text/plain; charset="utf-8"; DelSp="Yes"; format=flowed '."\r\n" .
				'Content-Disposition: inline'. "\r\n" .
				'Content-Transfer-Encoding: 7bit'." \r\n" .
				'X-Mailer:PHP/'.phpversion();
	
		// envoyer une copie au visiteur ?
		if ($copie == 'oui')
		{
			$cible = $destinataire.';'.$email;
		}
		else
		{
			$cible = $destinataire;
		};
$message = "Nom : ".$nom . " Téléphone : " . $telephone . "\r\n" . 
" Objet: ". $objet. "\r\n". 
			" Message : " . $message;
		// Remplacement de certains caractères spéciaux
		$message = str_replace("&#039;","'",$message);
		$message = str_replace("&#8217;","'",$message);
		$message = str_replace("&quot;",'"',$message);
		$message = str_replace('<br>','',$message);
		$message = str_replace('<br />','',$message);
		$message = str_replace("&lt;","<",$message);
		$message = str_replace("&gt;",">",$message);
		$message = str_replace("&amp;","&",$message);
		
		

		// Envoi du mail
		$num_emails = 0;
		$tmp = explode(';', $cible);
		foreach($tmp as $email_destinataire)
		{
			if (mail($email_destinataire, $objet, $message, $headers))
				$num_emails++;
		}

		if ((($copie == 'oui') && ($num_emails == 2)) || (($copie == 'non') && ($num_emails == 1)))
		{
			$affichage ='<p>'.$message_envoye.'</p>';
		}
		else
		{
			$affichage='<p>'.$message_non_envoye.'</p>';
		};
	}
	else
	{
		// une des 3 variables (ou plus) est vide ...
		$affichage='<p>'.$message_formulaire_invalide.' <a href="index.html#tf-contact">Retour au formulaire</a></p>'."\n";
	};
}; // fin du if (!isset($_POST['envoi']))
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Document sans titre</title>
</head>
<?php 
echo $affichage;
?>
<body>
</body>
</html>