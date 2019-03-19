				<?php

				//ouverture d'une connexion a la bd
		
$objetpdo = new PDO ('mysql:host=localhost;dbname=crud_groupe6','root',''); 
	//preparation a la requet de modification(sql)
	$pdostat = $objetpdo->prepare('UPDATE groupe6 SET nom=:nom ,prenom=:prenom, passworde=:passworde ,telephone=:telephone ,mail=:mail WHERE id=:num LIMIT 1');

	//lier chaque marqueur a une valeur

	$pdostat->bindValue(':num',$_POST['numcontact'],PDO::PARAM_INT);

	$pdostat->bindValue(':nom',$_POST['nom'], PDO::PARAM_STR);

	$pdostat->bindValue(':prenom',$_POST['prenom'], PDO::PARAM_STR);
	
	$pdostat->bindValue(':mail',$_POST['mail'], PDO::PARAM_STR);

	$pdostat->bindValue(':telephone',$_POST['telephone'], PDO::PARAM_STR);
	
	$pdostat->bindValue(':passworde',$_POST['passworde'], PDO::PARAM_STR);


	//EXECUTION DE LA REQUET PREPARE
		$modok=$pdostat->execute();
		if($modok){ 
		header("Location:affichage.php");
		//$message= 'le contact a ete mis à jour';
		}
		else{
		$message= 'echec de la mise à jour du contact';
		}
	?>


			<!doctype html>
				<html lang="fr">
				<head>

		<meta charset="UTF-8"/>
					<meta name="viewport"
		content"widht=device-widht,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>resultats modification</title>
<link  rel="stylesheet" href="bootstrap.min.css">

		</head>
		<body >
			<h1>Resultat de la modification des contacts</h1>
			<p> <?php echo $message ;?> </p>
			<a href="affichage.php">Verifier ici</a>
		</body>
		</html>