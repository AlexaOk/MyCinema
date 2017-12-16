<!DOCTYPE html>
<html>
	<head>
		<title>My Cinema</title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="my_cinema.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		<header>
        <div class = "member">
        <img src="misc/member.png" class="member_img">
        <h4><a href ="membership.php">Members</h4></a>
        </div>
            <div class = "banner">
            <img src="misc/pop.jpg" class="banner_img1">
			<h1>My Cinema</h1>
            <img src="misc/pop.jpg" class="banner_img2">
        </div>

        <div class = "search_bar">
           
            <form method="get" action="search.php" id="movie" >
                <input type="text" name="movie" placeholder = "Movies" value=""/>
                <input type="submit" value="Search" />
            </form>
            <form method="get" action="distib.php" id="distributor">
                <input type="text" name="distributor"  placeholder = "Distributors" value=""/>
                <input type="submit" value="Search" />
            </form>


            <form method="post" action ="date.php" id = "date">
                <input type="date" name="date" placeholder="dd/mm/yyyy">
                <input type="submit" value="Search">
            </form>


                <form method="get" action="genre.php" id="genre">
                <select  name = "genre" >
                    <optgroup label = "Genre">
                    <option value = "Genre" selected>Genre</option>
                    <option value="Action">Action</option> 
                    <option value="Adventure" >Adventure</option>
                    <option value="Animation">Animation</option>
                    <option value="Biography">Biography</option> 
                    <option value="Comedy" >Comedy</option>
                    <option value="Detective">Detective</option>
                    <option value="Documentary">Documentary</option> 
                    <option value="Drama" >Drama</option>
                    <option value="Dramatic Comedy" >Dramatic Comedy</option>
                    <option value="Erotic">Erotic</option>
                    <option value="Experimental">Experimental</option>
                    <option value="Family">Family</option>
                    <option value="Fantasy">Fantasy</option> 
                    <option value="Historical" >Historical</option>
                    <option value="Historical Epic">Historical Epic</option>
                    <option value="Horror">Horror</option> 
                    <option value="Karate">Karate</option>
                    <option value="Music">Music</option> 
                    <option value="Musical" >Musical</option>
                    <option value="Program" >Program</option>
                    <option value="Romance">Romance</option>
                    <option value="Science Fiction">Science Fiction</option>
                    <option value="Short Film">Short Film</option> 
                    <option value="Spying" >Spying</option>
                    <option value="Thriller">Thriller</option>  
                    <option value="Unknow">Unknow</option> 
                    <option value="Various">Various</option> 
                    <option value="War" >War</option>
                    <option value="Western">Western</option>
                    <input type="submit" value="Search" id="search" />     
                    </optgroup>            
                </select>
            </form>

        </div>
        
		</header>

            <div class="container">
        <div class="row">
            <div class="span12">
                <div class="well">
                    <div id="myCarousel" class="carousel fdi-Carousel slide">
                     <!-- Carousel items -->
                        <div class="carousel fdi-Carousel slide" id="eventCarousel" data-interval="0">
                            <div class="carousel-inner onebyone-carosel">
                                <div class="item active">
                                    <div class="col-md-4">
                                        <a href="#"><img src="misc/1.jpg" class="img-responsive center-block"></a>
                                        <div class="text-center"></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-md-4">
                                        <a href="#"><img src="misc/2.Jpg" class="img-responsive center-block"></a>
                                        <div class="text-center"></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-md-4">
                                        <a href="#"><img src="misc/3.jpg" class="img-responsive center-block"></a>
                                        <div class="text-center"></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-md-4">
                                        <a href="#"><img src="misc/5.jpg" class="img-responsive center-block"></a>
                                        <div class="text-center"></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-md-4">
                                        <a href="#"><img src="misc/6.jpg" class="img-responsive center-block"></a>
                                        <div class="text-center"></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-md-4">
                                        <a href="#"><img src="misc/7.jpg" class="img-responsive center-block"></a>
                                        <div class="text-center"></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-md-4">
                                        <a href="#"><img src="misc/8.jpg" class="img-responsive center-block"></a>
                                        <div class="text-center"></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-md-4">
                                        <a href="#"><img src="misc/9.jpg" class="img-responsive center-block"></a>
                                        <div class="text-center"></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-md-4">
                                        <a href="#"><img src="misc/4.png" class="img-responsive center-block"></a>
                                        <div class="text-center"></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-md-4">
                                        <a href="#"><img src="misc/10.jpg" class="img-responsive center-block"></a>
                                        <div class="text-center"></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-md-4">
                                        <a href="#"><img src="misc/11.jpg" class="img-responsive center-block"></a>
                                        <div class="text-center"></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-md-4">
                                        <a href="#"><img src="misc/12.jpg" class="img-responsive center-block"></a>
                                        <div class="text-center"></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-md-4">
                                        <a href="#"><img src="misc/13.jpg" class="img-responsive center-block"></a>
                                        <div class="text-center"></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-md-4">
                                        <a href="#"><img src="misc/14.jpg" class="img-responsive center-block"></a>
                                        <div class="text-center"></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-md-4">
                                        <a href="#"><img src="misc/15.jpg" class="img-responsive center-block"></a>
                                        <div class="text-center"></div>
                                    </div>
                                </div>
                            </div>
                            <a class="left carousel-control" href="#eventCarousel" data-slide="prev"></a>
                            <a class="right carousel-control" href="#eventCarousel" data-slide="next"></a>
                        </div>
                        <!--/carousel-inner-->
                    </div><!--/myCarousel-->
                </div><!--/well-->
            </div>
        </div>
    </div>
<script type="text/javascript" src="my_cinema.js"></script>
	</body>
</html>