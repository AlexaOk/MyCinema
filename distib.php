<!DOCTYPE html>
<html>
	<head>
		<title>My Cinema - Results</title>
		<link rel="stylesheet" href="my_cinema.css"/>
		<meta charset="utf-8"/>
	</head>
	<body>
	     <div class = "banner">
            <img src="misc/pop.jpg" class="banner_img3">
			<h1>My Results</h1>
            <img src="misc/pop.jpg" class="banner_img4">
        </div> 
<?php
function search_distrib()
{
	$distrib = $_POST['distributor'];
	if(isset($distrib) && !empty($distrib))
	{
		try
		{
   		$bdd = new PDO('mysql:host=localhost;dbname=epitech_tp;charset=utf8', 'root', '');
		}
		catch(Exception $e)

		{
        	die('Erreur : '.$e->getMessage());
		}

		$answer = $bdd->query("SELECT * FROM distrib LEFT JOIN film ON film.id_distrib = distrib.id_distrib WHERE distrib.nom LIKE '%$distrib%' ORDER BY nom");
		
		while ($value= $answer->fetch())
		{
			echo "<h3>~~~~ ".$value['nom']." ~~~~</h3>";
			echo "<h3>".$value['titre'] . "</h3><br><br><p>". $value['resum']."<br><br>Runtime : ".$value['duree_min']." min<br><br>Release date : ".$value['date_debut_affiche']."<br></p>";
		}
	}
	else
	{
		echo "<p>No Result(s)</p>";
	}
}
search_distrib();
?>
</body>
</html>