<?php
function search_member()
{
	$member = $_POST['member'];
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

		$answer = $bdd->query("SELECT * FROM fiche_personne LEFT JOIN membre ON fiche_personne.id_perso = membre.id_membre WHERE fiche_personne.nom LIKE '%$member%' OR fiche_personne.prenom LIKE '%$member%' ");
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