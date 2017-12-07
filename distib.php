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

		$answer = $bdd->query("SELECT * FROM distrib LEFT JOIN film ON film.id_distrib = distrib.id_distrib WHERE distrib.nom LIKE '%$distrib%'");
		while ($value= $answer->fetch())
		{
		echo $value['titre'] . "<br>";
		}
	}
	else
	{
		echo "O réultat(s) trouvé";
	}
}
search_distrib();
?>
</body>
</html>