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
        <link rel="shortcut icon" href="../../../img/camera.png">

        <title>Yokai Photography</title>

        <!-- CSS -->
        <link rel="stylesheet" href="../../bootstrap/bootstrap.css">
        <link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
        <link rel="stylesheet" href="../../css/bootstrap-image-gallery.min.css">
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
                                <li class="dropdown active">
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
                                <li><a href="about.php">Sobre Yokai</a></li>
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
            <div class="row">
                <div id="blueimp-gallery" class="blueimp-gallery">
                    <!-- The container for the modal slides -->
                    <div class="slides"></div>
                    <!-- Controls for the borderless lightbox -->
                    <h3 class="title"></h3>
                    <a class="prev">‹</a>
                    <a class="next">›</a>
                    <a class="close">×</a>
                    <a class="play-pause"></a>
                    <ol class="indicator"></ol>
                    <!-- The modal dialog, which will be used to wrap the lightbox content -->
                    <div class="modal fade" style="overflow:hidden">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title"></h4>
                                </div>
                                <div class="modal-body next"></div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default pull-left prev">
                                        <i class="glyphicon glyphicon-chevron-left"></i> Previous
                                    </button>
                                    <button type="button" class="btn btn-primary next">
                                        Next
                                        <i class="glyphicon glyphicon-chevron-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row col-md-12" id="ficzone">
                <h2>Ficzone Granada 2016</h2>
                <div id="links" class="links col-md-12">
                    <a href="../../img/gallery/ficzone/img1.JPG" title="Ficzone" data-gallery>
                        <img src="../../img/gallery/ficzone/img1.JPG" alt="Ficzone" class="img-responsive col-md-3">
                    </a>
                    <a href="../../img/gallery/ficzone/img2.JPG" title="Ficzone" data-gallery>
                        <img src="../../img/gallery/ficzone/img2.JPG" alt="Ficzone" class="img-responsive col-md-3">
                    </a>
                    <a href="../../img/gallery/ficzone/img3.JPG" title="Ficzone" data-gallery>
                        <img src="../../img/gallery/ficzone/img3.JPG" alt="Ficzone" class="img-responsive col-md-3">
                    </a>
                    <a href="../../img/gallery/ficzone/img4.JPG" title="Ficzone" data-gallery>
                        <img src="../../img/gallery/ficzone/img4.JPG" alt="Ficzone" class="img-responsive col-md-3">
                    </a>
                    <a href="../../img/gallery/ficzone/img5.JPG" title="Ficzone" data-gallery>
                        <img src="../../img/gallery/ficzone/img5.JPG" alt="Ficzone" class="img-responsive col-md-3">
                    </a>
                </div>
            </div>
            <div class="row col-md-12" id="childoflight">
                <h2>Sesión Child of Light</h2>
                <div id="links" class="links col-md-12">
                    <a href="../../img/gallery/childoflight/img1.JPG" title="Aurora" data-gallery>
                        <img src="../../img/gallery/childoflight/img1.JPG" alt="Aurora" class="img-responsive col-md-3">
                    </a>
                    <a href="../../img/gallery/childoflight/img2.JPG" title="Aurora" data-gallery>
                        <img src="../../img/gallery/childoflight/img2.JPG" alt="Aurora" class="img-responsive col-md-3">
                    </a>
                    <a href="../../img/gallery/childoflight/img3.JPG" title="Aurora" data-gallery>
                        <img src="../../img/gallery/childoflight/img3.JPG" alt="Aurora" class="img-responsive col-md-3">
                    </a>
                    <a href="../../img/gallery/childoflight/img4.JPG" title="Aurora" data-gallery>
                        <img src="../../img/gallery/childoflight/img4.JPG" alt="Aurora" class="img-responsive col-md-3">
                    </a>
                    <a href="../../img/gallery/childoflight/img5.JPG" title="Aurora" data-gallery>
                        <img src="../../img/gallery/childoflight/img5.JPG" alt="Aurora" class="img-responsive col-md-3">
                    </a>
                    <a href="../../img/gallery/childoflight/img6.JPG" title="Aurora" data-gallery>
                        <img src="../../img/gallery/childoflight/img6.JPG" alt="Aurora" class="img-responsive col-md-3">
                    </a>
                    <a href="../../img/gallery/childoflight/img7.JPG" title="Aurora" data-gallery>
                        <img src="../../img/gallery/childoflight/img7.JPG" alt="Aurora" class="img-responsive col-md-3">
                    </a>
                    <a href="../../img/gallery/childoflight/img8.JPG" title="Aurora" data-gallery>
                        <img src="../../img/gallery/childoflight/img8.JPG" alt="Aurora" class="img-responsive col-md-3">
                    </a>
                </div>
            </div>
            <div class="row col-md-12" id="onepiece">
                <h2>Sesión One Piece</h2>
                <div id="links" class="links col-md-12">
                    <a href="../../img/gallery/onepiece/img1.jpg" title="Nami" data-gallery>
                        <img src="../../img/gallery/onepiece/img1.jpg" alt="Nami" class="img-responsive col-md-3">
                    </a>
                    <a href="../../img/gallery/onepiece/img2.jpg" title="Nami" data-gallery>
                        <img src="../../img/gallery/onepiece/img2.jpg" alt="Nami" class="img-responsive col-md-3">
                    </a>
                    <a href="../../img/gallery/onepiece/img4.jpg" title="Nami" data-gallery>
                        <img src="../../img/gallery/onepiece/img4.jpg" alt="Nami" class="img-responsive col-md-3">
                    </a>
                    <a href="../../img/gallery/onepiece/img5.jpg" title="Nami" data-gallery>
                        <img src="../../img/gallery/onepiece/img5.jpg" alt="Nami" class="img-responsive col-md-3">
                    </a>
                    <a href="../../img/gallery/onepiece/img3.jpg" title="Nami" data-gallery>
                        <img src="../../img/gallery/onepiece/img3.jpg" alt="Nami" class="img-responsive col-md-3">
                    </a>
                </div>
            </div>
            <div class="row col-md-12" id="civilwars">
                <h2>Sesión Civil Wars</h2>
                <div id="links" class="links col-md-12">
                    <a href="../../img/gallery/civilwars/img3.JPG" title="Bucky" data-gallery>
                        <img src="../../img/gallery/civilwars/img3.JPG" alt="Bucky" class="img-responsive col-md-3">
                    </a>
                    <a href="../../img/gallery/civilwars/img2.JPG" title="Bucky" data-gallery>
                        <img src="../../img/gallery/civilwars/img2.JPG" alt="Bucky" class="img-responsive col-md-3">
                    </a>
                    <a href="../../img/gallery/civilwars/img4.JPG" title="Bucky" data-gallery>
                        <img src="../../img/gallery/civilwars/img4.JPG" alt="Bucky" class="img-responsive col-md-3">
                    </a>
                    <a href="../../img/gallery/civilwars/img5.JPG" title="Bucky" data-gallery>
                        <img src="../../img/gallery/civilwars/img5.JPG" alt="Bucky" class="img-responsive col-md-3">
                    </a>
                    <a href="../../img/gallery/civilwars/img1.JPG" title="Bucky" data-gallery>
                        <img src="../../img/gallery/civilwars/img1.JPG" alt="Bucky" class="img-responsive col-md-3">
                    </a>
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
        
        <!-- GALLERY JS -->
        <script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
        <script src="../../js/bootstrap-image-gallery.min.js"></script>
        
        <!-- SCROLL JS -->
        <script src="../../js/jquery.nicescroll.min.js" type="text/javascript"></script>
        <script src="../../js/jquery.parallax-1.1.3.js" type="text/javascript"></script>
        <script src="../../js/jquery.localscroll-1.2.7-min.js" type="text/javascript"></script>
        <script src="../../js/jquery.scrollTo-1.4.2-min.js" type="text/javascript"></script>

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