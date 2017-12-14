<!DOCTYPE html>
<html>
	<head>
		<title>My Cinema - Results</title>
		<link rel="stylesheet" href="my_cinema.css"/>
		<meta charset="utf-8"/>
	</head>
	<body>
	     <div class = "banner">
            <img src="misc/pop.jpg" class="banner_img1">
			<h1>My Results</h1>
            <img src="misc/pop.jpg" class="banner_img2">
        </div>
<?php
function movie_type()
{
	$genre = $_GET['genre'];

	if(isset($genre) && !empty($genre))
	{
		try
		{
   		$bdd = new PDO('mysql:host=localhost;dbname=epitech_tp;charset=utf8', 'root', '');
		}
		catch(Exception $e)

		{
        	die('Erreur : '.$e->getMessage());
		}

		$answer = $bdd->query(" SELECT * 
				   FROM genre 
				   LEFT JOIN film ON film.id_genre = genre.id_genre
				   WHERE genre.nom LIKE '%$genre%' 
				   ORDER BY titre");
	
		while ($value = $answer->fetch())
		{
		echo "<h2>".$value['titre'] . "</h2><br><br><p>". $value['resum']."<br><br>Runtime : ".$value['duree_min']." min<br><br>Release date : ".$value['date_debut_affiche']."<br></p>";
		}
	}
	else
	{
		echo "<p>No Results</p>";
	}

}
movie_type();

?>
</body>
</html>