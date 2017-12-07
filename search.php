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

		$answer = $bdd->query("SELECT * FROM film WHERE titre LIKE '%$movie%' ");

		while ($value = $answer->fetch())
		{
		echo $value['titre'] . "<br>";
		}
	}
	else
	{
		echo "0 résultat(s) trouvé";
	}

}
search_movie();
?>
</body>
</html>

