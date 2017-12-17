<!DOCTYPE html>
<html>
	<head>
		<title>My Cinema - Comment</title>
		<link rel="stylesheet" href="my_cinema.css"/>
		<meta charset="utf-8"/>
	</head>
	<body>
		<a href = "my_cinema.php"> 
		 <img src="misc/home.jpg" class="banner_img5">
		</a>
	     <div class = "banner">
            <img src="misc/pop.jpg" class="banner_img3">
			<h1>My Comment</h1>
            <img src="misc/pop.jpg" class="banner_img4">
        </div>
<?php
function create()
{
	$firstname =$_POST['name'];
	$surname = $_POST['surname'];
	$title=$_POST['title'];
	$comment=$_POST['comment'];

		if(isset($firstname) && isset($surname) && isset($title) && isset($comment) && !empty($comment) && !empty($comment) && !empty($surname) && !empty($firstname))
		{
		try
		{
   		$bdd = new PDO('mysql:host=localhost;dbname=epitech_tp;charset=utf8', 'root', '');
		}
		catch(Exception $e)

		{
        	die('Erreur : '.$e->getMessage());
		}
		$answer = $bdd->exec("ALTER TABLE historique_membre ADD MemberComment VARCHAR(255)");
		}
}
function comment()
{
	$firstname =$_POST['name'];
	$surname = $_POST['surname'];
	$title=$_POST['title'];
	$comment=$_POST['comment'];

		if(isset($firstname) && isset($surname) && isset($title) && isset($comment) && !empty($comment) && !empty($comment) && !empty($surname) && !empty($firstname))
		{
		try
		{
   		$bdd = new PDO('mysql:host=localhost;dbname=epitech_tp;charset=utf8', 'root', '');
		}
		catch(Exception $e)

		{
        	die('Erreur : '.$e->getMessage());
		}
		$answer2=$bdd->exec("INSERT INTO historique_membre 
							VALUES ((SELECT id_membre FROM membre 
							JOIN fiche_personne ON membre.id_fiche_perso=fiche_personne.id_perso 
							WHERE fiche_personne.nom LIKE '%{$surname}%'
							AND fiche_personne.prenom LIKE '%{$firstname}%') ,
							(SELECT id_film FROM film WHERE film.titre = '{$title}') ,
							NOW() , 
							'{$comment}')");
		
		echo '<p>'.$firstname.' '.$surname.' \'s comment for '.$title.' has been added ! </p>';
		echo '<p>'.$title." : ".$comment.'</p>';
		}
		else
		{
			echo '<h3> Please complete all required fields !</h3>';
		}
}
create();
comment();
?>
</body>
</body>
</html>