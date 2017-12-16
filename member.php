<!DOCTYPE html>
<html>
	<head>
		<title>My Cinema - Members</title>
		<link rel="stylesheet" href="my_cinema.css"/>
		<meta charset="utf-8"/>
	</head>
	<body>
		<a href = "my_cinema.php"> 
		 <img src="misc/home.jpg" class="banner_img5">
		</a>
	     <div class = "banner">
            <img src="misc/pop.jpg" class="banner_img3">
			<h1>Members Infos</h1>
            <img src="misc/pop.jpg" class="banner_img4">
        </div>
<?php
$member =trim($_GET['member']);
		try
		{
   		$bdd = new PDO('mysql:host=localhost;dbname=epitech_tp;charset=utf8', 'root', '');
   		$limit=5;
   		$page=(!empty($_GET['page']) ? $_GET['page'] : 1);

   		
   		$start=($page-1)*$limit;

   //SQL_CALC_FROM_ROWS count total of elements
   		$query = " SELECT SQL_CALC_FOUND_ROWS* FROM fiche_personne 
			LEFT JOIN membre ON fiche_personne.id_perso = membre.id_membre 
			WHERE fiche_personne.nom LIKE '%$member%' 
			OR fiche_personne.prenom LIKE '%$member%'  
			OR CONCAT(fiche_personne.nom,' ',fiche_personne.prenom) LIKE '%$member%' 
			OR CONCAT(fiche_personne.prenom,' ',fiche_personne.nom) LIKE '%$member%'
			ORDER BY fiche_personne.prenom
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
			$date=explode(" ", $value['date_naissance']);
			$date_of_birth=$date[0];
			echo "<p>".ucfirst($value['prenom']) ." ". ucfirst($value['nom']) ."<br> D.O.B : ".$date_of_birth. "<br> Email : ". $value['email']."<br> City : ".$value['ville']."<br> POSTCODE : ".$value['cpostal']."<br> ID : ".$value['id_perso'];
		}


		$nbrPages=ceil($total/$limit);
	

		if($page>1):
?>
<div class="prevbutton">
<a href="?page=<?php echo $page-1; echo '&member=' . $_GET['member']; ?>" >Previous Page</a></div> — 
<?php endif; if($page<$nbrPages): ?>
—
<div class="nextbutton">
<a href="?page=<?php echo $page+1; echo '&member=' . $_GET['member']; ?>">Next Page</a>
</div>
<?php
endif;
  for ($i = 1; $i <= $nbrPages; $i++):
    ?>
    <div class="numbers">
    <a href="?page=<?php echo $i; echo '&member=' . $_GET['member']; ?>"><?php echo $i; ?></a>
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
</body>
</html>