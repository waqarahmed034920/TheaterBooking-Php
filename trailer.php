<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Online Movies Booking</title>
        <link src="admin/assets/font-awesome/css/all.js"/>
        <script src="admin/assets/vendor/jquery/jquery.min.js"></script>
        <script src="admin/assets/font-awesome/js/all.js"></script>
       
        <link href="css/styles.css" rel="stylesheet" />

        <link href="css/styl.css" rel="stylesheet" />

        <style>
                body{
                    background-image: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url(bg.jpg);
                    background-repeat: no-repeat;
                    background-attachment: fixed;
                    background-size: cover;
                }
        </style>
    </head>
    <body id="page-top" >
                <div></div>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">Online Movies Booking</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link" href="index.php?page=home">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php?page=movies">Movies</a></li>
                        <li class="nav-item"><a class="nav-link" href="trailer.php">Trailers</a></li>
                        <li class="nav-item"><a class="nav-link" href="login.php">login</a></li>
                        <li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>
                        
                        
                       <?php
                       if (isset($_SESSION['username']))
                       
                       {
                           echo '<a href="logout.php">Logout</a>';
                       }
                        ?>

                    </ul>
                </div>
            </div>
        </nav>
                       
        <div>
        <div id="home-section-3" class="trailers-section">
        <br>
        <br>
        <h3 style="color: red; text-align: center;" >Now showing</h3>
        <div class="trailers-grid">
            <div class="trailers-grid-item">
                <img src="img/movie-thumb-0.jpg" alt="">
                <div class="trailer-item-info" data-video="Z1BCujX3pw8">
                    <h3 style="color: aliceblue;">Captain Marvel</h3>
                    <i class="far fa-3x fa-play-circle"style="color: antiquewhite;"></i>
                </div>
            </div>
            <div class="trailers-grid-item">
                <img src="img/movie-thumb-2.jpg" alt="">
                <div class="trailer-item-info" data-video="OPEfsEaFv_c">
                    <h3 style="color: aliceblue;">Karmat Bytmrmt</h3>
                    <i class="far fa-3x fa-play-circle " style="color: antiquewhite;"></i>
                </div>
            </div>
            <div class="trailers-grid-item">
                <img src="img/movie-thumb-3.jpg" alt="">
                <div class="trailer-item-info" data-video="cksYkEzUa7k">
                    <h3 style="color: aliceblue;">The Lego Movie</h3>
                    <i class="far fa-3x fa-play-circle" style="color: antiquewhite;"></i>
                </div>
            </div>
            <div class="trailers-grid-item">
                <img src="img/movie-thumb-4.jpg" alt="">
                <div class="trailer-item-info" data-video="Ze5YA4mkzhI">
                    <h3 style="color: aliceblue;">Secret Men Club</h3>
                    <i class="far fa-3x fa-play-circle" style="color: antiquewhite;"></i>
                </div>
            </div>

           
            
        </div>
    </div>
    </div>


       
    <script src="js/jquery-3.3.1.min.js "></script>
     <script src="js/scri.js "></script>

    </body>                   

</html>            