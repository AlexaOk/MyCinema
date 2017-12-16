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
		$distrib=$_GET['distributor'];
 		try
		{
   		$bdd = new PDO('mysql:host=localhost;dbname=epitech_tp;charset=utf8', 'root', '');
   		$limit=5;
   		$page=(!empty($_GET['page']) ? $_GET['page'] : 1);

   		$start=($page-1)*$limit;
   		var_dump($start);


   //SQL_CALC_FROM_ROWS count total of elements
   		$query = " SELECT SQL_CALC_FOUND_ROWS * FROM distrib 
   				LEFT JOIN film ON film.id_distrib = distrib.id_distrib 
   				WHERE distrib.nom LIKE '%$distrib%' 
   				ORDER BY nom
           LIMIT
            :limit
           OFFSET
            :start
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
			echo "<h3>~~~~ ".$value['nom']." ~~~~</h3>";
			echo "<h3>".$value['titre'] . "</h3><br><br><p>". $value['resum']."<br><br>Runtime : ".$value['duree_min']." min<br><br>Release date : ".$value['date_debut_affiche']."<br></p>";
		}


		$nbrPages=ceil($total/$limit);
	

		if($page>1):
?>
<div class="prevbutton">
<a href="?page=<?php echo $page-1; echo '&distributor=' . $_GET['distributor']; ?>" >Previous Page</a></div> — 
<?php endif; 

if($page<$nbrPages): ?>
—<div class="nextbutton"><a href="?page=<?php echo $page+1; echo '&distributor=' . $_GET['distributor']; ?>">Next Page</a></div>

<?php
endif;
 for ($i = 1; $i <= $nbrPages; $i++):
    ?>
    <div class="numbers">
    <a href="?page=<?php echo $i; echo '&distributor=' . $_GET['distributor']; ?>"><?php echo $i; ?></a>
	</div>
<?php
	endfor;	
		}
		catch(Exception $e)

		{
        	die('Erreur : '.$e->getMessage());
		}
?>
</body>
</html>