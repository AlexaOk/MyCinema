<!DOCTYPE html>
<html>
	<head>
		<title>My Cinema - Hisotry</title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="my_cinema.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
	       <div class = "banner">
            <img src="misc/pop.jpg" class="banner_img3">
			<h1>Member History</h1>
            <img src="misc/pop.jpg" class="banner_img4">
        </div>
			

 <?php
$history=$_GET['history'];
		try
		{
   		$bdd = new PDO('mysql:host=localhost;dbname=epitech_tp;charset=utf8', 'root', '');
   		$limit=5;
   		$page=(!empty($_GET['page']) ? $_GET['page'] : 1);

   		
   		$start=($page-1)*$limit;

   //SQL_CALC_FROM_ROWS count total of elements
   		$query = " SELECT SQL_CALC_FOUND_ROWS * 
   		   FROM fiche_personne 
           JOIN membre ON fiche_personne.id_perso = membre.id_fiche_perso 
           JOIN historique_membre ON membre.id_membre = historique_membre.id_membre 
           JOIN film ON historique_membre.id_film = film.id_film 
           WHERE fiche_personne.prenom LIKE '%$history%'
           OR fiche_personne.nom LIKE '%$history%'
           OR CONCAT(fiche_personne.prenom,' ', fiche_personne.nom) LIKE '%$history%'
           OR CONCAT(fiche_personne.nom,' ', fiche_personne.prenom) LIKE '%$history%'
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
				echo "<h3>".ucfirst($value['prenom'])." ".ucfirst($value['nom'])." 's history"."</h2><br><h3>".$value['titre'] . "</h3><br><br><p>". $value['resum']."<br><br>Runtime : ".$value['duree_min']." min<br><br>Release date : ".$value['date_debut_affiche']."<br></p>";
		}


		$nbrPages=ceil($total/$limit);
	

		if($page>1):
?>
<div class="prevbutton">
<a href="?page=<?php echo $page-1; echo '&history=' . $_GET['history']; ?>" >Previous Page</a></div> — 
<?php endif; if($page<$nbrPages): ?>
—<div class="nextbutton"><a href="?page=<?php echo $page+1; echo '&history=' . $_GET['history']; ?>">Next Page</a></div>

<?php
endif;
  for ($i = 1; $i <= $nbrPages; $i++):
    ?>
    <div class="numbers">
    <a href="?page=<?php echo $i; echo '&history=' . $_GET['history']; ?>"><?php echo $i; ?></a>
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
