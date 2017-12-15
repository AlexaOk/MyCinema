<!DOCTYPE html>
<html>
	<head>
		<title>My Cinema - Members</title>
		<link rel="stylesheet" href="my_cinema.css"/>
		<meta charset="utf-8"/>
	</head>
	<body>
		<a href = "my_cinema.php"> 
		 <img src="misc/home.jpg" class="banner_img5">
		</a>
	     <div class = "banner">
            <img src="misc/pop.jpg" class="banner_img3">
			<h1>Members Infos</h1>
            <img src="misc/pop.jpg" class="banner_img4">
        </div>
<?php
function search_member()
{
	$member =trim($_POST['member']);
	if(isset($member) && !empty($member))
	{
		try
		{
   		$bdd = new PDO('mysql:host=localhost;dbname=epitech_tp;charset=utf8', 'root', '');
		}
		catch(Exception $e)

		{
        	die('Erreur : '.$e->getMessage());
		}

		$answer = $bdd->query("SELECT * FROM fiche_personne 
			LEFT JOIN membre ON fiche_personne.id_perso = membre.id_membre 
			WHERE fiche_personne.nom LIKE '%$member%' 
			OR fiche_personne.prenom LIKE '%$member%'  
			OR CONCAT(fiche_personne.nom,' ',fiche_personne.prenom) LIKE '%$member%' 
			OR CONCAT(fiche_personne.prenom,' ',fiche_personne.nom) LIKE '%$member%'
			ORDER BY fiche_personne.prenom");

		while ($value = $answer->fetch())
		{
			$date=explode(" ", $value['date_naissance']);
			$date_of_birth=$date[0];
			echo "<p>".ucfirst($value['prenom']) ." ". ucfirst($value['nom']) ."<br> D.O.B : ".$date_of_birth. "<br> Email : ". $value['email']."<br> City : ".$value['ville']."<br> POSTCODE : ".$value['cpostal']."<br> ID : ".$value['id_perso'];
		}
		
	}
	else
	{
		echo "<p> No Results</p>";
	}
}

search_member();
?>
</body>
</body>
</html>