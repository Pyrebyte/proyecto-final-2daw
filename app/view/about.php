<?php
    session_start();
    if (@!$_SESSION['user']) {
        header("Location:signin.php");
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
        <link rel="shortcut icon" href="../../img/camera.png">

        <title>Yokai Photography</title>

        <!-- CSS -->
        <link href="../../bootstrap/bootstrap.css" rel="stylesheet">
    </head>

    <body>
        <!-- NAVBAR -->
        <div class="navbar-wrapper">
            <div class="container">

                <div class="navbar navbar-inverse navbar-fixed-top">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="../../index.php">Yokai Photography</a>
                        </div>
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li><a href="../../index.php">Home</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Galería <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-header">Eventos</li>
                                        <li><a href="gallery.php#ficzone">Ficzone Granda 2016</a></li>
                                        <li class="divider"></li>
                                        <li class="dropdown-header">Sesiones</li>
                                        <li><a href="gallery.php#childoflight">Child of Light - Aurora</a></li>
                                        <li><a href="gallery.php#onepiece">One Piece - Nami</a></li>
                                        <li><a href="gallery.php#civilwars">Civil Wars (Marvel) - Bucky</a></li>
                                    </ul>
                                </li>
                                <li class="active"><a href="about.php">Sobre Yokai</a></li>
                                <li><a href="contact.php">Contacto</a></li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="">Bienvenido <strong><?php echo $_SESSION['user'];?></strong></a></li>
                                <a class="btn btn-danger btn-sm navbar-btn" href="../controller/logout.php">
                                    <span class="glyphicon glyphicon-log-out"></span> Logout</a>
                                <div class="btn-group ">
                                    <button class="btn btn-info navbar-btn btn-sm">
                                        <span class="glyphicon glyphicon-globe"></span> Idioma</button>
                                    <button class="btn dropdown-toggle navbar-btn btn-info btn-sm" data-toggle="dropdown">
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" style="min-width:30px;">
                                        <!-- dropdown menu links -->
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

        <!-- CONTENT -->
        <div class="container">
            <br>
            <br>
            <br>
            <br>
            <div class="row featurette">
                <div class="col-md-12">
                    <img src="../../img/portrait.jpg" alt="" class="img-circle img-responsive col-md-offset-5">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette col-md-6">
                <div class="col-md-12 text-left">
                    <div align="center" class="embed-responsive embed-responsive-16by9">
                        <video controls class="embed-responsive-item">
                            <source src="http://techslides.com/demos/sample-videos/small.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>

            <div class="row featurette col-md-6">
                <div class="featurette col-md-10 pull-right text-left">
                    <p class="text-capitalize text-left">
                        Yokai Photography nace de a necesidad de expresar toda la esa creatividad acumulada que no nos atrevemos a mostrar, pero que recorre nuestra mentes constantemente a lo largo del dia. Queremos ser la llave que de cuerda a tu imaginación, que te permita expresarte y hacer aquello que siempre has querido.
                    </p>
                    <p class="text-capitalize text-left">
                        Somos jovenes y algo inexpertos aun, pero crecemos con cada proyecto y nuestra ganas de seguir adelante nos impulsa a sacar lo mejor de nosotros mismos. Siempre dando el 100% para que tanto nosotros como nuestros clientes queden satisfechos.
                    </p>
                    <p class="text-capitalize text-left">
                        Pero ante todo queremos inmortalizar cada instante de vuestras vidas, fragmentos que no os canseis de recordar y que sean capaz de sacar la mejor de las sonrisas.
                    </p>
                </div>
            </div>
        </div>

        <!-- FOOTER -->
        <footer class="container" style="height:50px;padding-top:50px;">
            <p class="pull-right"><a href="#">Volver arriba</a></p>
            <p>&copy; 2016 Yokai Photography</p>
        </footer>


        <!-- BOOTSTRAP JS -->
        <script src="../../js/jquery.js"></script>
        <script src="../../js/bootstrap.min.js"></script>
        <script src="../../js/holder.js"></script>

        <!-- SCROLL JS -->
        <script src="../../js/jquery.nicescroll.min.js" type="text/javascript"></script>
        <script src="../../js/jquery.parallax-1.1.3.js" type="text/javascript"></script>
        <script src="../../js/jquery.localscroll-1.2.7-min.js" type="text/javascript"></script>
        <script src="../../js/jquery.scrollTo-1.4.2-min.js" type="text/javascript"></script>

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