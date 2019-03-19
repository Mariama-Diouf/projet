<?php
//ouverture de connexion

$objetpdo = new PDO ('mysql:host=localhost;dbname=crud_groupe6','root',''); 

//preparation de la requet

$pdostat = $objetpdo->prepare('DELETE FROM groupe6 WHERE id=:num LIMIT 1');

//LIAISON DU PARAMETRE NOMME

$pdostat->bindvalue(':num',$_GET['numcontact'],PDO::PARAM_INT);

//execution de la requete

$suprimok=$pdostat->execute();



				if($suprimok){
					header("Location:affichage.php?id=" .$_SESSION['id']);
					//$message= 'le contact a ete supprimé';
				}

					else{
					$message= 'echec de la suppression';
				}
				?>


				<!doctype html>
				<html lang="fr">
				<head>

		<meta charset="UTF-8"/>
			
		<meta name="viewport"
		content"widht=device-widht,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Suppression</title>
		<link  rel="stylesheet" href="bootstrap.min.css">
		</head>
		<body >
			<h1>Suppresion des contacts</h1>
			<p> <?php echo $message ;?> </p>
			<a href="affichage.php">Verifier ici</a>
		</body>
		</html>