<?php

$objetpdo = new PDO ('mysql:host=localhost;dbname=crud_groupe6','root',''); 
$pdostat = $objetpdo->prepare('SELECT * FROM groupe6 ORDER BY nom ASC');

// execution de la requete
$pdostat->execute();

//recuperation des resultats en une seul fois

$contact= $pdostat->fetchALL();
?>

<!doctype html>
<html lang="fr">
<head>

<meta charset="UTF-8"/>
<meta name="viewport"
content"widht=device-widht,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link  rel="stylesheet" href="bootstrap.min.css">
<title>Affichage</title>
<style>
table{
    width:30%;
    height:auto;
    
    padding-left:100px;
    padding-right:100px;
    
}
td{
 
  width:auto;
    text-align:center;
    font-family:italic;
}
.tr1{
    color:blueviolet;
    background-color:silver;
}
h3{
    margin-left:30%;
   
    border-radius:10px;
    width:500px;
    font-family:italic;
}


</style>
</head>
<body >
<h3>LA LISTE DES MEMBRES DU COMPTE</h3>
<table class="table">
<tr class="tr1">
<td>Prenom</td> <td>Nom</td> <td>Email</td> <td> Naissance</td> <td>Lieu</td> <td>Phone</td> <td>Genre</td> <td>Suppression</td> <td>Modiffication</td>
</tr>
<tr>
<?php foreach ($contact as $contact ) :?>



<td class="td"><?=$contact['prenom'] ?></td>	  
<td class="td"><?=$contact['nom'] ?></td>
<td class="td"><?=$contact['mail'] ?></td> 
<td class="td"><?=$contact['naissance'] ?></td>
<td class="td"><?=$contact['lieu'] ?></td>
<td class="td"><?=$contact['telephone'] ?></td>
<td class="td"><?=$contact['Sexe'] ?></td>
<td class="td"><a href="supprimer.php?numcontact=<?=$contact['id']?>">Supprimer</a></td>
<td class="td"><a href="edition.php?numcontact=<?=$contact['id']?>">modifier</a></td>
</tr>

<?php endforeach; ?>
</table>
<hr/>

<?php
    /* 
     $db=mysqli_connect("localhost","root","","crud_groupe6");
     $sql="SELECT * FROM groupe6 ";
     $result=mysqli_query($db,$sql);
     while($row=mysqli_fetch_array($result))
     {
       echo "<div id='img_div'>";
       
       echo "<p class='a'> Nom " .$row['nom']."<p>";
       echo "<p class='b'>Prenom " .$row['prenom']."<p>";
       echo "<p class='c'> Email " .$row['mail']."<p>";
       echo "<p class='d'>Date de Naissance " .$row['naissance']."<p>";
       echo "<p class='e'>Lieu de Naissance " .$row['lieu']."<p>";
       echo "<p class='d'>Genre " .$row['Sexe']."<p>";
       echo "<p class='e'>Numero de Tel" .$row['telephone']."<p>";
      
       
       echo "</div>";
     }
    */
?>
</body>
</html>

