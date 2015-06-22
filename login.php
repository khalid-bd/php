<?php

if (isset($_POST) && !empty($_POST)) {
	
	if ($_POST['nom']=='Aurelie' && $_POST['Mdp']=='test'){
		$_SERVER['nom']=$_POST['nom'];
		$_SERVER['Mdp']=$_POST['Mdp'];
		$_SERVER['is_connect']=true;
		header('Location: membres.php');
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>


<form action="login.php" method="POST">
    <label for="nom">Nom : </label>
    <input type="text" name="nom" id="nom"> <br>
    <label for="Mdp">Mot de passe : </label>
    <input type="text" name="Mdp" id="Mdp"> <br>
    <input type="submit">
</form>



</body>
</html>