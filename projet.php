
		<?php
		session_start();
		$ere='';
		if(isset($_SESSION["erreur"]))
		$ere=$_SESSION["erreur"];

		?>
		<!DOCTYPE html>
		<html lang="en">
		<head>
		<title>GROUPE 6</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="projet.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="projet.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


		<style type="text/css">
		.div{
			height:600px;
		}
		.la{
			margin-left:50px;
		}

		</style>
		</head>
		<body ><br>
		<br>
		
	<center><button type="button" class="btn btn-primary btn-sm" ><h5 >INSCRIVEZ-VOUS SUR NOTRE COMPTE !</h5></button></center><br>
								
								
								
									<div class="container" style="background:">
									<form action="Projet2.php" method="POST" >
								<?php	if (isset($ere)) {
									echo"<center>";
									echo "<div class='niveu'>";
									
							echo '<font color="blue" boder="1">'.$ere."</font>";
							echo "</div>";
							echo"</center>";
							echo"<hr/>";
						}
						?>
									<!-- llll -->
				<center><div class="div">
	<ul class="principal">
	<li class="li1">
	<ul class="ul1">
	<li class="ab">
<label for="">Entrez votre nom</label>
<input id="nom" type="text" name="nom" class="form-control input-sm"  value="<?php if (isset($prenom['nom'])) {echo $nom;} ?>" ><br>
</li>

<li class="ab">
<label for="">Entrez votre Prenom</label>
<input id="prenom" type="text" name="prenom" class="form-control input-sm"  value="<?php if (isset($prenom['prenom'])) {echo $prenom;} ?>" ><br>
</li>

<li class="ab">
<label for="">Entrez votre date de naissance</label>
<input id="nais" type="text" name="nais" class="form-control input-sm"   value="" ><br>
</li>

<li class="ab">
<label for="">Entrez votre lieu de naissance</label>
<input id="lieu" type="text" name="lieu" class="form-control input-sm"  value=""  ><br>
</li>

<li class="ab">
<label for="">Entrez votre numero de telephone</label>
<input id="tel" type="text" name="tel" class="form-control input-sm"  value="" ><br>
</li>

	
	<li class="b">
		<h5>Centre d'interet</h5>


	<!-- L'affichage de la table des centre-->
	<?php
	$objetpdo = new PDO ('mysql:host=localhost;dbname=crud_groupe6','root','');  
	$pdostat = $objetpdo->prepare('SELECT * FROM centre ORDER BY loisir ASC');
	$pdostat->execute();
	$contact= $pdostat->fetchALL();
	?>
	<?php foreach ($contact as $contact ) :?>
	<li><label for="" class="la"><?=$contact['loisir'] ?>
	</label> <input type="checkbox" name="loisir[]" value="<?=$contact['id'] ?>"/></li><br>
	<?php endforeach; ?>

</ul>
</li>
<!-- ***********************************La separation de deux ul*********************************** -->
<li class="li2">
<ul class="ul2">
<li class="b">
<label for="">Entrez votre adresse mail</label>
<input id="mail" type="email" name="mail" class="form-control input-sm"  value="<?php if (isset($mail['mail'])) {echo $mail;} ?>" ><br>
</li>

<li class="b">
<label for="">Confirmation de votre Email</label>
<input id="mail2" type="email" name="mail2" class="form-control input-sm"   value="<?php if (isset($mail2['mail2'])) {echo $mail2;} ?>"><br>
</li>

<li class="b">
<label for="">Entrez votre Password</label>
<input id="mot" type="password" name="mot" class="form-control input-sm"   ><br>
</li>

<li class="b">
<label for="">Confirmation du Password</label>
<input id="mot2" type="password" name="mot2" class="form-control input-sm" ><br>
</li>


<!--<input id="idt" type="text" name="idt" class="form-control input-sm" placeholder="Sexe " value=""  ><br>-->
<li class="b">
<label for="">Genre</label>
<select name="genre" id="genre" value="" class="form-control select-sm">
	<option value="Homme">Homme</option>
	<option value="Femme">Femme</option>
</select><br>
		</li>
	<!-- L'affichage de la table des matieres-->
	<h5>Matieres</h5>
	<?php
	$objetpdo = new PDO ('mysql:host=localhost;dbname=crud_groupe6','root','');  
	$pdostat = $objetpdo->prepare('SELECT * FROM matieres ORDER BY matieres ASC');
$pdostat->execute();
$contact= $pdostat->fetchALL();
?>
<?php foreach ($contact as $contact ) :?>

<li><label for=""><?=$contact['matieres'] ?>
</label> <input type="checkbox" name="matieres[]" value="<?=$contact['id'] ?>"/></li><br>
	
	<?php endforeach; ?>
	
<li class="b">
<button type="submit" class="btn btn-primary btn-sm-6" id="submit"  name="forminscription" >Creer un compte</button>
</li>

	</ul>
		</li> </ul><br>
			<div class="pos">
 			
 		</div><br><br>
		  
		 
		</div></center>
									
									</form> 
									<br>
									</div>
									</body>
									</html>
							
									<!--<font color="red"><input  type="submit" name="forminscription" value="Je m'inscrit"></input></font></center>-->
								
								



									<!--<?php/*
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}*/



				