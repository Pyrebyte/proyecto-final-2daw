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

        <title>Yokai Photography</title>

        <!-- CSS -->
        <link rel="shortcut icon" href="../../img/camera.png">
        <link href="../../bootstrap/bootstrap.css" rel="stylesheet">
        <link href="../../css/carousel.css" rel="stylesheet">
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
            <h2> Administración de usuarios registrados</h2>
            <a class="btn btn-large btn-info" href="admin.php">Volver al Panel</a>
            <div class="row-fluid">
                <?php
		              extract($_GET);
		              require("../model/config.php");

                        $sql="SELECT * FROM login WHERE id=$id";
                        $ressql=mysqli_query($mysqli,$sql);
                        while ($row=mysqli_fetch_row ($ressql)){
                                $id=$row[0];
                                $user=$row[1];
                                $pass=$row[2];
                                $email=$row[3];
                                $passadmin=$row[4];
                            }

                ?>
                    <form class="col-md-6 col-md-offset-3" action="../controller/update.php" method="post">
                        <div class="form-group">
                            <label for="realname">ID</label>
                            <input type="text" class="form-control" name="id" value="<?php echo $id ?>" readonly="readonly">
                        </div>
                        <div class="form-group">
                            <label for="realname">Usuario</label>
                            <input type="text" class="form-control" name="user" value="<?php echo $user?>">
                        </div>
                        <div class="form-group">
                            <label for="pass">Email</label>
                            <input type="text" class="form-control" name="email" value="<?php echo $email?>">
                        </div>
                        <div class="form-group">
                            <label for="nick">Contraseña</label>
                            <input type="password" class="form-control" name="pass" value="<?php echo $pass?>">
                        </div>

                        <div class="form-group">
                            <label for="rpass">Contraseña administrador</label>
                            <input type="password" class="form-control" name="pasadmin" value="<?php echo $pasadmin?>">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-lg btn-primary btn-block col-md-6" type="submit">Guardar</button>
                        </div>
                    </form>

            </div>
        </div>
        </div>
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