<!DOCTYPE html>
<html>
	<head>
		<title>My Cinema - Members</title>
		<link rel="stylesheet" href="my_cinema2.css"/>
		<meta charset="utf-8"/>
	</head>
	<body>
		<h1>Members</h1>
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

		$answer = $bdd->query("SELECT * FROM fiche_personne LEFT JOIN membre ON fiche_personne.id_perso = membre.id_membre WHERE fiche_personne.nom LIKE '%$member%' OR fiche_personne.prenom LIKE '%$member%' OR CONCAT(fiche_personne.prenom,' ', fiche_personne.nom) LIKE '%$member%' OR CONCAT(fiche_personne.nom,' ', fiche_personne.nom) LIKE '%$member%' OR CONCAT(fiche_personne.nom, fiche_personne.prenom) LIKE '%$member%' OR CONCAT(fiche_personne.prenom, fiche_personne.nom) LIKE '%$member%'");
		while ($value = $answer->fetch())
		{
		echo $value['prenom'] ." ". $value['nom'] . "<br>";
		}
	}
	else
	{
		echo "O réultat(s) trouvé";
	}
}

search_member();
?>
	 <form method="post" action="historique.php" id = "member" >
	<h2><a href = "history.php">My History</a></h2>
	</form>
	<h2><a href = "abonnement.php">Mon Abonnement</a></h2>
</body>
</body>
</html>