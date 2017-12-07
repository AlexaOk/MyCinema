<!DOCTYPE html>
<html>
	<head>
		<title>My Cinema - Membership</title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="my_cinema.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
	       <div class = "banner">
            <img src="misc/pop.jpg" class="banner_img1">
			<h1>My Membership</h1>
            <img src="misc/pop.jpg" class="banner_img2">
        </div>
	<form method="post" action="history.php" id = "history" >
                <input type ="text" name = "history" placeholder = "Member">
                <input type="submit" value="My History" />
    </form>

    <form method="post" action="add.php" id = "add" >
	<input type ="text" name = "history" placeholder = "Name">
                <input type="submit" value="Add a member" />
	</form>
	<form method="post" action="delete.php" id = delete >
	<input type ="text" name = "history" placeholder = "Name">
                <input type="submit" value="Delete a member" />
	</form>
	<form method="post" action="historique.php" id = "modify" >
	<input type ="text" name = "history" placeholder = "Name">
                <input type="submit" value="Modify my account" />
	</form>

	</body>
	</html>