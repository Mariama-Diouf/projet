
		<?php
		session_start();
        $bdd = new PDO ('mysql:host=localhost;dbname=crud_Groupe6','root',''); 
        
        if(isset($_POST['terminer']))
		{
		$math=htmlspecialchars($_POST['math']);
		$francais=htmlspecialchars($_POST['francais']);
		$anglais=htmlspecialchars($_POST['anglais']);
		$hitoire=htmlspecialchars($_POST['histoitre']);
		$geographie=htmlspecialchars($_POST['geographie']);
		$sport=htmlspecialchars($_POST['sport']);
		$lecture=htmlspecialchars($_POST['lecture']);
		$music=htmlspecialchars($_POST['music']);
		$voyage=htmlspecialchars($_POST['voyage']);
        $jeux=htmlspecialchars($_POST['jeux']);

        
        if (!empty($_POST['math'])) 
		{
        $insertmbr=$bdd->prepare(" INSERT INTO matieres (matieres) VALUES($recup)");
		$insertmbr->execute(array($math));
        
        }
    }  

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
        <head>
        </head>
		<body >
        </body>
        <h1>VEILLEZ ENTREZ VOS CHOIX</h1>
        <form action="">
        <div>
        <ul>
        <h2>Matieres</h2>
        <li><label for="">Mathematique</label> <input type="checkbox" name="math" value="Math"/></li><br>
        <li><label for="">Francais</label> <input type="checkbox" name="francais"  value="Francais"/></li><br>
        <li><label for="">Anglais</label> <input type="checkbox" name="anglais" value="Anglais"/></li><br>
        <li><label for="">Histoire</label> <input type="checkbox" name="histoire" value="Histoire"/></li><br>
        <li><label for="">Geographie</label> <input type="checkbox" name="geographie" value="Geographie"/></li><br>
       </ul>
        </div>
     <div>
     <ul>
     <h2>Centre d'interet</h2>
        <li><label for="">Sport</label> <input type="checkbox" name="sport" value="Sport"/></li><br>
        <li><label for="">Lecture</label> <input type="checkbox" name="lecture" value="Lecture"/></li><br>
        <li><label for="">Music</label> <input type="checkbox" name="music" value="Music"/></li><br>
        <li><label for="">Voyage</label> <input type="checkbox" name="voyage" value="Voyage"/></li><br>
        <li><label for="">Jeux</label> <input type="checkbox" name="jeux" value="Jeux"/></li><br>
       </ul>
     </div>
     <button type="submit" class="btn btn-primary btn-sm-6" id="submit"  name="terminer" >Creer un compte</button>
        </form>
        </html>