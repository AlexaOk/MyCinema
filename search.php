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
function search_movie()
{
	$movie = $_POST['movie'];
	if(isset($movie) && !empty($movie))
	{
		try
		{
   		$bdd = new PDO('mysql:host=localhost;dbname=epitech_tp;charset=utf8', 'root', '');
		}
		catch(Exception $e)

		{
        	die('Erreur : '.$e->getMessage());
		}

		$answer = $bdd->query("SELECT * FROM film WHERE titre LIKE '%$movie%' ORDER BY titre ");

		while ($value = $answer->fetch())
		{
		echo "<h3>".$value['titre'] . "</h3><br><br><p>". $value['resum']."<br><br>Runtime : ".$value['duree_min']." min<br><br>Release date : ".$value['date_debut_affiche']."<br></p>";
		}
	}
	else
	{
		echo "<p>0 résultat(s) trouvé</p>";
	}

}
search_movie();
?>
</body>
</html>

