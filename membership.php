<!DOCTYPE html>
<html>
	<head>
		<title>My Cinema - Membership</title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="my_cinema.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<a href = "my_cinema.php"> 
		 <img src="misc/home.jpg" class="banner_img5">
		</a>
	       <div class = "banner">
            <img src="misc/pop.jpg" class="banner_img1">
			<h1>Memberships</h1>
            <img src="misc/pop.jpg" class="banner_img2">
        </div>

 	<form method="post" action="member.php" id = "infos" >
                <input type ="text" name = "member" placeholder = "Member">
                <input type="submit" value="Personal Infos" />
    </form>

    <div class = "member_history">
	<form method="get" action="history.php" id="history" >
                <input type ="search"  name = "history" placeholder = "Member">
                <input type="submit" value="Member History" />
    </form>

    <form method="get" action="MovieAdd.php" class = "MovieAdd" >
                <input type ="search" name = "name" placeholder = "Firstname">
                <input type ="search" name = "surname" placeholder = "Surname">
                <input type ="search" name = "title" placeholder = "Movie Title">
                <input type="submit" value="Add To History" />
    </form>
	</div>

    <div class = "add_comment">
    <form method="post" action ="comment.php" class = "comment">
    		<div id = "info_comment">
    			<input type="search" name="name" placeholder="Firstname">
    			<input type="search" name="surname" placeholder="Surname">
    			<input type="search" name="title" placeholder="Movie Title">
    		</div>
    			<textarea rows="6" cols = "54" name="comment" id ="commentarea" placeholder="Type your comment..."></textarea><br>
    			<input type="submit" value="Add Comment" id="add">
    </form>
    			
	</div>

	<div class = "modify_membership">
    <form method="get" action="modify.php" id = "modify" >
	<input type ="text" name = "firstname" placeholder = "Firstname">
	<input type ="text" name = "surname" placeholder = "Surname">
	<select  name = "membership" >
                    <optgroup label = "Membership">
                    <option value = "VIP">VIP</option>
                    <option value="GOLD">GOLD</option> 
                    <option value="Classic" >Classic</option>
                    <option value="pass Day">Pass Day</option>
                    <option value="malsch">Malsch</option>
                </optgroup>
    </select>
    <input type="submit" value="Change/Add Membership" />
	</form>
	<form method="get" action="delete.php" id = delete >
	<input type ="text" name = "name" placeholder = "Name">
                <input type="submit" value="Cancel Membership" />
	</form>
	</div>

	</body>
	</html>