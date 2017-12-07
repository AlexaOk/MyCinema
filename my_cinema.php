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
    <?php
       
    ?>
		<header>
            <div class = "banner">
            <img src="misc/pop.jpg" class="banner_img1">
			<h1>My Cinema</h1>
            <img src="misc/pop.jpg" class="banner_img2">
        </div>
        
        <div class = "search_bar">
            <form method="post" action="member.php" id = "member" >
                <input type ="text" name = "member"placeholder = "Member">
                <input type="submit" value="Search" />
            </form>
            <form method="post" action="search.php" id="movie" >
                <input type="text" name="movie" placeholder = "Movies" value=""/>
                <input type="submit" value="Search" />
            </form>
            <form method="post" action="distib.php" id="distributor">
                <input type="text" name="distributor"  placeholder = "Distributors" value=""/>
                <input type="submit" value="Search" />
            </form>

                <form method="post" action="genre.php" id="genre">
                <select  name = "genre" >
                    <optgroup label = "Genre">
                    <option value = "Genre" selected>Genre</option>
                    <option value="8">Action</option> 
                    <option value="10" >Adventure</option>
                    <option value="5">Animation</option>
                    <option value="22">Biography</option> 
                    <option value="6" >Comedy</option>
                    <option value="0">Detective</option>
                    <option value="4">Documentary</option> 
                    <option value="3" >Drama</option>
                    <option value="1" >Dramatic Comedy</option>
                    <option value="25">Erotic</option>
                    <option value="23">Experimental</option>
                    <option value="28">Family</option>
                    <option value="7">Fantasy</option> 
                    <option value="12" >Historical</option>
                    <option value="21">Historical Epic</option>
                    <option value="17">Horror</option> 
                    <option value="26">Karate</option>
                    <option value="15">Music</option> 
                    <option value="16" >Musical</option>
                    <option value="27" >Program</option>
                    <option value="14">Romance</option>
                    <option value="2">Science Fiction</option>
                    <option value="24">Short Film</option> 
                    <option value="20" >Spying</option>
                    <option value="9">Thriller</option>  
                    <option value="19">Unknow</option> 
                    <option value="11">Various</option> 
                    <option value="18" >War</option>
                    <option value="13">Western</option>
                    <input type="submit" value="Search" />     
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