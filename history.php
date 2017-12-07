<?php

function search_history()
{
	$history =trim($_POST['history']);
	if(isset($history) && !empty($history))
	{
		try
		{
   		$bdd = new PDO('mysql:host=localhost;dbname=epitech_tp;charset=utf8', 'root', '');
		}
		catch(Exception $e)

		{
        	die('Erreur : '.$e->getMessage());
		}

		$answer = $bdd->query("SELECT * FROM fiche_personne JOIN historique_membre ON fiche_personne.id_perso = historique_membre.id_membre JOIN film on historique_membre.id_film = historique_membre.id_film WHERE fiche_personne.nom LIKE '%$history%'");
		while ($value = $answer->fetch())
		{
		echo "ok"."<br>";
		}
	}
	else
	{
		echo "O réultat(s) trouvé";
	}
}

search_history();


?>