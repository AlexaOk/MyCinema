<!DOCTYPE html>
<html>
	<head>
		<title>My Cinema - Results</title>
		<link rel="stylesheet" href="my_cinema2.css"/>
		<meta charset="utf-8"/>
	</head>
	<body>
		<h1>My Results</h1>
<?php
function movie_type()
{
	$genre = $_POST['genre'];
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

		$answer = $bdd->query("SELECT * FROM genre LEFT JOIN film ON film.id_genre = genre.id_genre WHERE genre.id_genre LIKE '%$genre%'");
		while ($value = $answer->fetch())
		{
		echo $value['titre'] . "<br>";
		}
		if($value !== $genre)
		{
			echo "0 résultat(s) trouvé";
		}
	}
	else
	{
		echo "O réultat(s) trouvé";
	}
}



movie_type();
?>
</body>
</html>