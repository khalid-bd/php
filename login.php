<?php



$login_valide = "moi";
$pwd_valide = "lemien";  

// on teste si nos variables sont définies
if (isset($_POST['login']) && isset($_POST['pwd'])) {

// Find du l'utilisateur dans l'array

// on vérifie les informations du formulaire, à savoir si le pseudo saisi est bien un pseudo autorisé, de même pour le mot de passe
	if ($login_valide == $_POST['login'] && $pwd_valide == $_POST['pwd']) {
	// dans ce cas, tout est ok, on peut démarrer notre session

	// on la démarre :)
		session_start ();
		// on enregistre les paramètres de notre visiteur comme variables de session ($login et $pwd) (notez bien que l'on utilise pas le $ pour enregistrer ces variables)
		$_SESSION['login'] = $_POST['login'];
		$_SESSION['pwd'] = $_POST['pwd'];

		var_dump($_SESSION); 
		
		header('location: page_membre.php');
	}
	else {
		// Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
		echo 'Membre non reconnu...)';
		// puis on le redirige vers la page d'accueil
		//echo '<meta http-equiv="refresh" content="0;URL=index.php">';
		header('location: index.php');
		}

}

?>