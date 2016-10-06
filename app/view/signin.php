<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="Official Website of Yokai Photography">
    <meta name="author" content="David Martin Noguera">
    <link rel="shortcut icon" href="../../img/camera.png">

    <title>Yokai Photography</title>

    <!-- CSS -->
    <link href="../../bootstrap/bootstrap.css" rel="stylesheet">
    <link href="../../css/signin.css" rel="stylesheet">
    <link href="../../css/jquery.cookiebar.css" rel="stylesheet">
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
                        <a class="navbar-brand" href="#">Yokai Photography</a>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="#">Home</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Galería <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-header">Eventos</li>
                                    <li><a href="#">Ficzone Granda 2016</a></li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header">Sesiones</li>
                                    <li><a href="#">Child of Light - Aurora</a></li>
                                    <li><a href="#">One Piece - Nami</a></li>
                                    <li><a href="#">Civil Wars (Marvel) - Bucky</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Sobre Yokai</a></li>
                            <li><a href="#">Contacto</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <a class="btn btn-danger btn-sm navbar-btn" href="#">
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

    <div class="container">
        <div class="row">
            <form class="col-md-6 col-md-offset-3" action="../controller/validate.php" method="GET">
                <h2 class="form-signin-heading">Inicio de sesión</h2>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" placeholder="Email" name="email" autofocus>
                </div>
                <div class="form-group">
                    <label for="pass">Contraseña</label>
                    <input type="password" class="form-control" placeholder="Contraseña" name="pass">
                </div>
                <div class="form-group">
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
                </div>
            </form>

            <form class="col-md-6 col-md-offset-3" action="../controller/register.php" method="GET">
                <h2 class="form-signin-heading">Registro</h2>
                <div class="form-group">
                    <label for="realname">Usuario</label>
                    <input type="text" class="form-control" placeholder="Usuario" name="user" pattern="[a-zA-ZÀ-ÖØ-öø-ÿ]+\.?(( |\-)[a-zA-ZÀ-ÖØ-öø-ÿ]+\.?)*" required autofocus>
                </div>
                <div class="form-group">
                    <label for="nick">Email</label>
                    <input type="email" class="form-control" placeholder="Email" name="email" required autofocus>
                </div>
                <div class="form-group">
                    <label for="pass">Contraseña</label>
                    <input type="password" class="form-control" placeholder="Mín 8 caracteres: mayúsculas, minúsculas y números son requeridos" name="pass" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required autofocus>
                </div>
                <div class="form-group">
                    <label for="rpass">Repite contraseña</label>
                    <input type="password" class="form-control" placeholder="Mín 8 caracteres: mayúsculas, minúsculas y números son requeridos" name="rpass" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required autofocus>
                </div>
                <div class="form-group">
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Registrar</button>
                </div>
            </form>
        </div>

        <?php
            if(isset($_GET['submit'])){
                require("../controller/register.php");
            }
	    ?>
            <footer class="container" style="height:10px;padding-top:10px;">
                <p class="pull-right"><a href="#">Volver arriba</a></p>
                <p>&copy; 2016 Yokai Photography</p>
            </footer>
    </div>

    <!-- BOOTSTRAP JS -->
    <script src="../../js/jquery.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/holder.js"></script>

    <!-- SCROLL JS -->
    <script type="text/javascript" src="../../js/jquery.nicescroll.min.js"></script>
    <script src="../../js/jquery.parallax-1.1.3.js" type="text/javascript"></script>
    <script src="../../js/jquery.localscroll-1.2.7-min.js" type="text/javascript"></script>
    <script src="../../js/jquery.scrollTo-1.4.2-min.js" type="text/javascript"></script>

    <!-- COOKIE JS -->
    <script type="text/javascript" src="../../js/jquery.cookiebar.js"></script>

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

    <script type="text/javascript">
        $(document).ready(function () {
            $.cookieBar({
                message: 'Este sitio web utiliza cookies propias y de terceros para optimizar tu navegación, adaptarse a tus preferencias y realizar labores analíticas. Al continuar navegando aceptas nuestra Política de Cookies.',
                acceptText: 'Dame cookies',
                fixed: true,
                bottom: true
            });
        });
    </script>
</body>

</html>