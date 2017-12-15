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
			<h1>Cancellation</h1>
            <img src="misc/pop.jpg" class="banner_img2">
        </div>
<?php
 function cancel_membership()
{
    $name = $_GET['name'];
    if(isset($name) && !empty($name))
    {
        try
        {
            $bdd = new PDO('mysql:host=localhost;dbname=epitech_tp;charset=utf8', 'root', '');
        }

        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }

    $var1=$bdd->exec("INSERT INTO abonnement VALUES (5, 'Pas d\'abonnement', 'Pas d\'abonnement', 0, 0 )");

    $var=$bdd->exec("UPDATE membre 
                    INNER JOIN fiche_personne ON membre.id_fiche_perso = fiche_personne.id_perso 
                    SET membre.id_abo = '5' 
                    WHERE CONCAT(fiche_personne.prenom,' ', fiche_personne.nom) LIKE '%{$name}%'
                    OR CONCAT(fiche_personne.nom,' ', fiche_personne.prenom) LIKE '%{$name}%'
                    ");

    echo '<p>Membership has been cancelled for '.$name.' !</p>';
    }
    else
    {
        echo '<h3>Please enter a correct name !</h3>';
    }
}
cancel_membership();
?>

</header>
</body>
</html>
