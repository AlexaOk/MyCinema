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

function moviedate()
{
	$date = $_POST['date'];

	if(isset($date))
	{
		try
		{
   		$bdd = new PDO('mysql:host=localhost;dbname=epitech_tp;charset=utf8', 'root', '');
		}
		catch(Exception $e)

		{
        	die('Erreur : '.$e->getMessage());
		}

		$answer = $bdd->query("SELECT * FROM film WHERE '$date'<date_fin_affiche AND date_debut_affiche<'$date' ORDER BY date_debut_affiche ");
		while ($value = $answer->fetch())
		{
		echo "<h3>".$value['titre'] . "</h3><br><br><p>". $value['resum']."<br><br>Runtime : ".$value['duree_min']." min<br><br>Release date : ".$value['date_debut_affiche']."<br></p>";
		}
	}
	else
	{
		echo "<p>No results</p>";
	}

}
moviedate();

?>
</body>
</html>