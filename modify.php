<!DOCTYPE html>
<html>
	<head>
		<title>My Cinema - Membership</title>
        <link rel="stylesheet" href="my_cinema.css" />
	</head>
	<body>
		<header>
            <div class = "banner">
            <img src="misc/pop.jpg" class="banner_img1">
			<h1>New Membership</h1>
            <img src="misc/pop.jpg" class="banner_img2">
        </div>
<?php

function add_membership()
{
    $firstname = trim($_GET['firstname']);
    $surname  = trim($_GET['surname']);
    $membership = $_GET['membership'];

    if(isset($firstname) && isset($surname) && isset($membership) && !empty($firstname) && !empty($surname) && !empty($membership))
    {
        try
        {
            $bdd = new PDO('mysql:host=localhost;dbname=epitech_tp;charset=utf8', 'root', '');
        }

        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }
                 $var=$bdd->exec("UPDATE membre 
                    INNER JOIN fiche_personne ON membre.id_fiche_perso = fiche_personne.id_perso 
                    SET membre.id_abo = (SELECT id_abo FROM abonnement WHERE abonnement.nom='{$membership}') 
                    WHERE fiche_personne.prenom='{$firstname}'
                    AND fiche_personne.nom='{$surname}'"
                    );

                 echo '<p>Membership has been added/changed for '.ucfirst($firstname).' '.ucfirst($surname).' !</p>';
                
    }
    else
    {
        echo '<p>Please enter a complete name and/or select a membership !</p>';
    }
}
add_membership();

?>
</header>
</body>
</html>
