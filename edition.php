		<?php
		//LA PARTIE DE L'AFFICHAGE DES DONNEES AVEC $contact
		$objetpdo = new PDO ('mysql:host=localhost;dbname=crud_groupe6','root',''); 
		$pdostat = $objetpdo->prepare('SELECT * FROM groupe6 WHERE id=:num');
		$pdostat->bindValue(':num',$_GET['numcontact'],PDO::PARAM_INT);
		$modifierok=$pdostat->execute();
		$contact= $pdostat->fetch();
		//FIN DE L'AFFICHAGE
		?>


		<!doctype html>
		<html lang="fr"> 
		<head>

		<meta charset="UTF-8"/>
		<link  rel="stylesheet" href="">
		<meta name="viewport"
		content"widht=device-widht,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link  rel="stylesheet" href="bootstrap.min.css">
		<title>Modification</title>
		
		<style>
		div{
			border:1px solid silver;
			width:400px;
			height:auto;
			border-radius:5px;
			padding-bottom:10px;
		}
		input{
			color:blue;
		}
		ul{
			list-style:none;
		}
		input{
			border:1px solid silver;
			border-radius:3px;
			width:300px;
			margin-right:10px;
			
		}
		label{
			margin-right:250px;
			color:blueviolet;
		}
		button{
			border:1px solid silver;
			width:100px;
			border-radius:20px;
			margin-right:200px;
			color:red;
			font-family:italic;
			font-size:20px;
			

		}
		</style>
		</head>
		<body >

		<center>
		<div>
		<h1>Page de modification</h1>
		<form action="resultats des modifications.php" method="post">
		<input type="hidden" name="numcontact" value= "<?=$contact['id']; ?> ">
		<ul>
		<li><label>Nom&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label><br> 
		<input type="text" id="Nom"  name="nom" class="form-controls" value= "<?=$contact['nom']; ?>"><br><br>
		</li>

		<li>
		<label>Prenom&nbsp&nbsp&nbsp</label><br>
		<input  type="text" id="Prenom" class="form-controls" name="prenom" value= "<?=$contact['prenom']; ?>"><br><br>
		</li>

		<li>
		<label>Email&nbsp&nbsp&nbsp&nbsp&nbsp</label><br>
		<input  type="email" id="mail" class="form-controls" name="mail" value=" <?=$contact['mail']; ?>"><br><br>
		</li>
		
		<li>
		<label>Password</label><br>
		<input  type="password" id="mot" class="form-controls" name="mot" value=""><br><br>
		</li>


		<li>
		<label>Telephone</label><br>
		<input  type="text" id="tel" class="form-controls" name="telephone" value="<?=$contact['telephone']; ?>"><br><br>
		</li>

		<li>
		<button id="contacts-submit" class="form-controls" type="submit" class="">Modifier</button>
		</li>
		</ul>
		</form></div><br></center>
		</body>