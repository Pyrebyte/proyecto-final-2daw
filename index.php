<?php
    session_start();
    if (@!$_SESSION['user']) {
        header("Location:app/view/signin.php");
    }
?>

    <!DOCTYPE html>
    <html lang="es">

    <head>
        <!-- META -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta name="description" content="Official Website of Yokai Photography">
        <meta name="author" content="David Martin Noguera">

        <title>Yokai Photography</title>

        <!-- CSS -->
        <link href="img/camera.png" rel="shortcut icon">
        <link href="bootstrap/bootstrap.css" rel="stylesheet">
        <link href="css/carousel.css" rel="stylesheet">
    </head>

    <body>
        <!-- NAVBAR -->
        <div class="navbar-wrapper">
            <div class="container">

                <div class="navbar navbar-inverse navbar-static-top">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="index.php">Yokai Photography</a>
                        </div>
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="index.php">Home</a></li>
                                <li class="dropdown">
                                    <a href="" class="dropdown-toggle" data-toggle="dropdown">Galería <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-header">Eventos</li>
                                        <li><a href="app/view/gallery.php#ficzone">Ficzone Granda 2016</a></li>
                                        <li class="divider"></li>
                                        <li class="dropdown-header">Sesiones</li>
                                        <li><a href="app/view/gallery.php#childoflight">Child of Light - Aurora</a></li>
                                        <li><a href="app/view/gallery.php#onepiece">One Piece - Nami</a></li>
                                        <li><a href="app/view/gallery.php#civilwars">Civil Wars (Marvel) - Bucky</a></li>
                                    </ul>
                                </li>
                                <li><a href="app/view/about.php">Sobre Yokai</a></li>
                                <li><a href="app/view/contact.php">Contacto</a></li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="">Bienvenido <strong><?php echo $_SESSION['user'];?></strong></a></li>
                                <a class="btn btn-danger btn-sm navbar-btn" href="app/controller/logout.php">
                                    <span class="glyphicon glyphicon-log-out"></span> Logout</a>
                                <div class="btn-group ">
                                    <button class="btn btn-info navbar-btn btn-sm">
                                        <span class="glyphicon glyphicon-globe"></span> Idioma</button>
                                    <button class="btn dropdown-toggle navbar-btn btn-info btn-sm" data-toggle="dropdown">
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" style="min-width:30px;">
                                        <li><a href="">Es</a></li>
                                        <li><a href="">En</a></li>
                                        <li><a href="">Fr</a></li>
                                    </ul>
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- CAROUSEL -->
        <div id="myCarousel" class="carousel slide">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active">
                    <img src="img/banner.png" alt="Galería">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Galeria</h1>
                            <p>Eventos, reportajes y mucho más. Todas nuestras mejores fotografías disponibles en un mismo sitio para que puedas disfrutar de ellas.</p>
                            <p><a class="btn btn-large btn-primary" href="app/view/gallery.php">Ver más</a></p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="img/banner.png" alt="Sobre Nosotros">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Sobre Yokai Photography</h1>
                            <p>¿Quieres conocernos? ¿Saber más sobre Yokai? Entérate de quienes somos y como puedes colaborar con nosotros.</p>
                            <p><a class="btn btn-large btn-primary" href="app/view/about.php">Ver más</a></p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="img/banner.png" alt="Eventos">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Conócenos</h1>
                            <p>Contacta con nosotros si tienes alguna duda, no dudes en enviarnos un correo.</p>
                            <p><a class="btn btn-large btn-primary" href="app/view/contact.php">Ver más</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="icon-prev"></span></a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="icon-next"></span></a>
        </div>

        <!-- CONTENT -->
        <div class="container">

            <div class="row featurette">
                <div class="col-md-5">
                    <img class="featurette-image img-responsive" src="img/cover/coverFiczone.png" alt="Ficzone Granada 2016">
                </div>
                <div class="col-md-7">
                    <h2 class="featurette-heading">Evento <span class="text-muted">Ficzone Granada 2016</span></h2>
                    <p class="lead">Sin duda uno de los eventos más esperados de la provincia de Granada y alrededores. Aquí encontrarás una impresionante galería con fotografías referentes a este evento: exposiciones, concursos, cosplay...</p>
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Sesión <span class="text-muted">Child of Light - Aurora</span></h2>
                    <p class="lead">Sumergete en un mundo de cuento de hadas con esta sesión temática del videojuego Child of Light, en la que la princesa Aurora es la principal protagonista.</p>
                </div>
                <div class="col-md-5">
                    <img class="featurette-image img-responsive" src="img/cover/coverAurora.png" alt="Child of Light - Aurora">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-5">
                    <img class="featurette-image img-responsive" src="img/cover/coverNami.png" alt="One Piece - Nami">
                </div>
                <div class="col-md-7">
                    <h2 class="featurette-heading">Sesión <span class="text-muted">One Piece - Nami</span></h2>
                    <p class="lead">¿El rey de los piratas? Seguro que quieres saber si Luffy llegará a serlo, pero por ahora tendrás que conformarte con esta galería de la maravillosa Nami. </p>
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Sesión <span class="text-muted">Civil Wars - Bucky </span></h2>
                    <p class="lead">Nadie se libra en plena lucha, y nuestro compañero Bucky no iba a ser menos saltando al campo de combate. Siguele en la batalla a través de estas fotografías.</p>
                </div>
                <div class="col-md-5">
                    <img class="featurette-image img-responsive" src="img/cover/coverBucky.png" alt="Civil Wars - Bucky">
                </div>
            </div>

            <hr class="featurette-divider">
        </div>

        <!-- FOOTER -->
        <footer class="container" style="height:10px;padding-top:10px;">
            <p class="pull-right"><a href="#">Volver arriba</a></p>
            <p>&copy; 2016 Yokai Photography</p>
        </footer>


        <!-- BOOTSTRAP JS -->
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/holder.js"></script>

        <!-- SCROLL JS -->
        <script src="js/jquery.nicescroll.min.js" type="text/javascript"></script>
        <script src="js/jquery.parallax-1.1.3.js" type="text/javascript"></script>
        <script src="js/jquery.localscroll-1.2.7-min.js" type="text/javascript"></script>
        <script src="js/jquery.scrollTo-1.4.2-min.js" type="text/javascript"></script>

        <!-- SCRIPTS -->
        <script>
            jQuery(document).ready(function () {
                jQuery('#topnav').localScroll(3000);
                jQuery('#startbtn').localScroll(5000);
                jQuery('#parallax-bg').parallax("50%", 0.1);
            })
        </script>

        <script>
            jQuery('.navbar .nav > li > a').click(function () {
                jQuery('.nav-collapse.navbar-responsive-collapse.in').removeClass('in').addClass('collapse').css('height', '0');
            });
        </script>

        <script>
            jQuery(document).ready(
                function () {
                    jQuery("html").niceScroll({
                        cursorcolor: "#333"
                    });
                }
            );
        </script>
    </body>

    </html>