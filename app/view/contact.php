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

    <body onload="load()" onunload="GUnload()">
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
                                <li><a href="about.php">Sobre Yokai</a></li>
                                <li class="active"><a href="contact.php">Contacto</a></li>
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
            <br>
            <form role="form" action="../controller/message.php" method="GET" enctype="text/plain">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="InputName">Usuario</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="user" value="<?php echo $_SESSION['user'];?>" required>
                            <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
                    </div>
                    <div class="form-group">
                        <label for="InputEmail">Email</label>
                        <div class="input-group">
                            <input type="email" class="form-control" name="email" value="<?php echo $_SESSION['email'];?>" required>
                            <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
                    </div>
                    <div class="form-group">
                        <label for="InputMessage">Mensaje</label>
                        <div class="input-group">
                            <textarea name="text" class="form-control" rows="5" placeholder="Escribe aqui tu mensaje..." required></textarea>
                            <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
                    </div>
                    <input type="submit" name="submit" id="submit" value="Enviar" class="btn btn-info pull-right">
                    <input type="reset" name="reset" id="reset" value="Limpiar" class="btn btn-info pull-left">
                </div>
            </form>
            <hr class="featurette-divider hidden-lg">
            <div class="col-lg-5 col-md-push-1">
                <address>
            <h3>Dirección:</h3>
            <p class="lead"><a href="#" id="enlaceajax">Yokai Photography<br>
              Calle Mirlo, 22, 2ºB <br>
              18014 Granada, Granada (Spain)</a><br>
              Phone: 632039946</p>
            </address>
            </div>
            <div class="container" id="mapa" style="width: 400px; height: 300px"></div>
        </div>

        <!-- FOOTER -->
        <footer class="navbar navbar-fixed-bottom container">
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

	<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;hl=es&amp;key=AIzaSyCk8JRorylV6abZAatQDMjGD-3qs6_174o" type="text/javascript"></script>

        <script type="text/javascript">
            $("#enlaceajax").click(function load() {
                if (GBrowserIsCompatible()) {
                    var latitud = 37.186571212047944;
                    var longitud = -3.6121188999999276;
                    var zoom = 15;
                    var mapa = new GMap2(document.getElementById("mapa"));
                    mapa.setCenter(new GLatLng(latitud, longitud), zoom);
                    mapa.addControl(new GSmallMapControl());
                    mapa.addControl(new GMapTypeControl());
                }
            });
        </script>
    </body>

    </html>