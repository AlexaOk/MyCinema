<!DOCTYPE html>
<html>
	<head>
		<title>My Cinema - MovieAdd</title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="my_cinema.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
	       <div class = "banner">
            <img src="misc/pop.jpg" class="banner_img1">
			<h1>History</h1>
            <img src="misc/pop.jpg" class="banner_img2">
        </div>

<?php

function addMovie()
{
	 $title = ucfirst($_GET['title']);
	 $name = ucfirst($_GET['name']);
	 $surname = ucfirst($_GET['surname']);

    if(isset($title) && !empty($title))
    {
        try
        {
            $bdd = new PDO('mysql:host=localhost;dbname=epitech_tp;charset=utf8', 'root', '');
        }

        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }

   $var=$bdd->exec("
    				INSERT INTO historique_membre (id_membre, id_film, date) 
    				VALUES ((SELECT id_membre FROM fiche_personne 
    				JOIN membre ON membre.id_fiche_perso = fiche_personne.id_perso 
    				WHERE fiche_personne.nom LIKE '%{$surname}%'
    				AND fiche_personne.prenom LIKE '%{$name}%'),
    				(SELECT id_film FROM film WHERE titre='{$title}'), 
    				NOW())
                    ");

    $title = ucfirst($title);
    echo '<p>'.$title.' has been added to '.$name.'\'s History !</p>';
    }
    else
    {
        echo '<p>Please enter the correct informations !</p>';
    }
}
addMovie();
?>