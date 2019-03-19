		<?php
		session_start();		
		$bdd = new PDO ('mysql:host=localhost;dbname=crud_Groupe6','root',''); 
		$ere="";

		if(isset($_POST['forminscription']))
		{
		$nom=htmlspecialchars($_POST['nom']);
		$prenom=htmlspecialchars($_POST['prenom']);
		$mot=sha1($_POST['mot']);
		$mot2=sha1($_POST['mot2']);
		$lieu=htmlspecialchars($_POST['lieu']);
		$mail=htmlspecialchars($_POST['mail']);
		$mail2=htmlspecialchars($_POST['mail2']);
		$nais=$_POST['nais'];
		$tel=$_POST['tel'];
		$genre=htmlspecialchars($_POST['genre']);
		$matieres=$_POST['matieres'];
		$loisir=$_POST['loisir'];

	if (!empty($_POST['nom']) AND  !empty($_POST['prenom']) AND !empty($_POST['nais'])  AND !empty($_POST['mot']) AND !empty($_POST['mot2']) AND !empty($_POST['lieu']) AND !empty($_POST['mail']) AND !empty($_POST['mail2']) AND !empty($_POST['lieu']) AND !empty($_POST['genre'])  AND !empty($_POST['tel'])) 
		{

		$nomlenght=strlen($nom);
		if ($nom<=100)
		{

		$prenomlenght=strlen($prenom);
		if ($prenom<=100)
		{
		if ($mail==$mail2)
		{
		if (filter_var($mail, FILTER_VALIDATE_EMAIL))
		{
		$reqmail=$bdd->prepare(" SELECT * FROM Groupe6 WHERE mail=?");
		$reqmail->execute(array($mail));
		$mailexist=$reqmail->rowCount();
		if($mailexist==0)
		{


		$reqmpd=$bdd->prepare(" SELECT * FROM Groupe6 WHERE telephone=?");
		$reqmpd->execute(array($tel));
		$mpdexist=$reqmpd->rowCount();
		if($mpdexist==0)
		{	

		/*	$idtlenght=strlen($idt);
		if ($idt<=10)
		{*/
		if($mot == $mot2)
		{


		$insertmbr=$bdd->prepare(" INSERT INTO Groupe6 (nom,prenom,mail,passworde,naissance,lieu,Sexe,telephone) VALUES(?,?,?,?,?,?,?,?)");
		$insertmbr->execute(array($nom ,$prenom,$mail ,$mot,$nais,$lieu,$genre,$tel));
		/* traitement pour la table matieres */
		$i="";
		$recup=$bdd->lastInsertId();
		$nbmatieres= count($matieres);
		for($i=0; $i<= $nbmatieres;$i++){
		$sql="INSERT INTO etud_mat  VALUES (NULL, $recup,".$matieres[$i].")";
			$req=$bdd->prepare($sql);
			$req->execute();
		}

		/* traitement pour la table centre */
		$j="";
		//$recu=$bdd->lastInsertId();
		$nbloisir= count($loisir);
		for($j=0; $j<= $nbloisir;$j++){
		$sqle="INSERT INTO etu_centre  VALUES (NULL, $recup,".$loisir[$j].")";
			$reqe=$bdd->prepare($sqle);
			$reqe->execute();
		}

		if ($insertmbr) 
		{
		$prenom = $mpd2 = $idt = "";
		function securisation($donnees)
		{
		$donnees = trim($donnees);
		$donnees = stripslashes($donnees);
		$donnees = strip_tags($donnees);
		return $donnees;
		}
		$nom = securisation($_POST['nom']).'<br>';
		$prenom = securisation($_POST['prenom']).'<br>';
		$mpd2 = securisation($_POST['mot']).'<br>';
		$mpd = securisation($_POST['nais']).'<br>';
		$idt = securisation($_POST['genre']);


		$ere.= 'Bonjour  ' .$prenom."votre inscription est valide avec succé <br>";
		
		$ere.= '  Votre date de naissance est le:'.$nais;	
		$ere.= '  Votre Numero de telephone est le:'.$tel;	
		$ere.= '  Vous etes de sexe :'.$genre;
		//$ere.="<br>";
								
								
								}

								else
								{
									$ere="Echec de l'insrtion";
								}
						}
						else{
							$ere="Vos Password ne correspondent pas !";
						}	

					/*	}

						else 
						{
							$ere="Votre identifiant doit doit commancer par une lettre et doit avoire des chiffres";
						}*/

				}
				else 
				{
					$ere="Ce numero de telephone est deja utilisé";
				}
				
				

				

			}

			else
			{
				$ere="Adresse mail déja utilisée !!!";	
			}	


		}

		else
		{
			$ere="Votre Adresse mail n'est pas valide !!!";		
		}		
		}	

		else 
		{
		$ere="Vos Adresse mail ne correspondent pas!!!";
		}
		}

		else
		{
		$ere="Votre prenom ne doit pas depasser 100 carracteres";
		}
		}

		else
		{
		$ere="Votre nom ne doit pas depasser 100 carracteres";
		}

		}
		else 
		{
		$ere="Tous les champs doivent etre completes !";
		}	

		}




		$_SESSION["erreur"]=$ere;
		//var_dump($_SESSION);
		header('Location: projet.php');

		?>
	<!--*********************************************************************************************** -->
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