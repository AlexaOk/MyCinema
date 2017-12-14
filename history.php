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
            <img src="misc/pop.jpg" class="banner_img1">
			<h1>Member History</h1>
            <img src="misc/pop.jpg" class="banner_img2">
        </div>
			

 <?php
 function search_history()
 {
$history = $_GET['history'];
try {

    // Find out how many items are in the table
    $dbh = new PDO('mysql:host=localhost;dbname=epitech_tp;charset=utf8', 'root', '');
    $total = $dbh->query('
        SELECT * FROM fiche_personne 
           JOIN membre ON fiche_personne.id_perso = membre.id_fiche_perso 
           JOIN historique_membre ON membre.id_membre = historique_membre.id_membre 
           JOIN film ON historique_membre.id_film = film.id_film
    ')->fetchColumn();

     $limit = 5;

   
    $pages = ceil($total / $limit);

   
    $page = min($pages, filter_input(INPUT_GET, 'page', FILTER_VALIDATE_INT, array(
        'options' => array(
            'default'   => 1,
            'min_range' => 1,
        ),
    )));
   
    $offset = ($page - 1)  * $limit;

    $start = $offset + 1;
    $end = min(($offset + $limit), $total);

    $stmt = $dbh->prepare("
       		SELECT * FROM fiche_personne 
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
            :offset
    ");

    $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
    $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
    $stmt->execute();

   
    if ($stmt->rowCount() > 0) {
        // Define how we want to fetch the results
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $iterator = new IteratorIterator($stmt);

     
        foreach ($iterator as $row) {
            echo '<p>'. $row['titre'] . '</p>';
        }
            $prevlink = ($page > 1) ? '<a href="?page=1" title="First page">&laquo;</a> <a href="?page=' . ($page - 1) . '" title="Previous page">&lsaquo;</a>' : '<span class="disabled">&laquo;</span> <span class="disabled">&lsaquo;</span>';


    $nextlink = ($page < $pages) ? '<a href="?page=' . ($page + 1) . '" title="Next page">&rsaquo;</a> <a href="?page=' . $pages . '" title="Last page">&raquo;</a>' : '<span class="disabled">&rsaquo;</span> <span class="disabled">&raquo;</span>';

    echo '<div id="paging"><p>', $prevlink, ' Page ', $page, ' of ', $pages, ' pages, displaying ', $start, '-', $end, ' of ', $total, ' results ', $nextlink, ' </p></div>';

    } else {
        echo '<p>No results could be displayed.</p>';
    }

} catch (Exception $e) {
    echo '<p>', $e->getMessage(), '</p>';
}
}
search_history();
?>
</body>
</html>
