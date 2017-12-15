<!DOCTYPE html>
<html>
	<head>
		<title>My Cinema - Results</title>
		<link rel="stylesheet" href="my_cinema.css"/>
		<meta charset="utf-8"/>
	</head>
	<body>
		<a href = "my_cinema.php"> 
		 <img src="misc/home.jpg" class="banner_img5">
		</a>
	     <div class = "banner">
            <img src="misc/pop.jpg" class="banner_img3">
			<h1>My Results</h1>
            <img src="misc/pop.jpg" class="banner_img4">
        </div>
<?php
		$genre=$_GET['genre'];
		try
		{
   		$bdd = new PDO('mysql:host=localhost;dbname=epitech_tp;charset=utf8', 'root', '');
   		$limit=5;
   		$page=(!empty($_GET['page']) ? $_GET['page'] : 1);

   		
   		$start=($page-1)*$limit;
   
   		$query = " SELECT SQL_CALC_FOUND_ROWS * 
				   FROM genre 
				   LEFT JOIN film ON film.id_genre = genre.id_genre
				   WHERE genre.nom LIKE '%$genre%' 
				   ORDER BY titre
				   LIMIT :limit
				   OFFSET :start
				   ";
		$query = $bdd->prepare($query);

	

		$query->bindValue(
			'start',
			$start,
			PDO::PARAM_INT);
		$query->bindValue(
			'limit',
			$limit,
			PDO::PARAM_INT);
		$query->execute();



		$rows=$bdd->query('SELECT found_rows()');
		
		$total=$rows->fetchColumn();

		while($value=$query->fetch())
		{
				echo "<h3>".$value['titre'] . "</h3><br><br><p>". $value['resum']."<br><br>Runtime : ".$value['duree_min']." min<br><br>Release date : ".$value['date_debut_affiche']."<br></p>";
		}


		$nbrPages=ceil($total/$limit);
	

		if($page>1):
?>

<a class="prevbutton" href="?page=<?php echo $page-1; echo '&genre=' . $_GET['genre']; ?>" >Previous Page</a> — 
<?php endif; if($page<$nbrPages): ?>
—<a class= "nextbutton" href="?page=<?php echo $page+1; echo '&genre=' . $_GET['genre']; ?>">Next Page</a>

<?php
endif;
 
		}
		catch(Exception $e)

		{
        	die('Erreur : '.$e->getMessage());
		}
?>
</body>
</html>