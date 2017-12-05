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
            <div class = "banner">
            <img src="misc/pop.jpg" class="banner_img1">
			<h1>My Cinema</h1>
            <img src="misc/pop.jpg" class="banner_img2">
        </div>
            <div class = "search_bar">
            <input type="search" id ="movie_search" placeholder = "Movie Search">
            <input type ="search" id = "member_search" placeholder = "Member">
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