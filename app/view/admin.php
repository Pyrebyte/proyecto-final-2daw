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
        <!-- <title></title> -->
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
            <div class="row-fluid">

                <?php
				require("../model/config.php");
				$sql=("SELECT * FROM login");
				$query=mysqli_query($mysqli,$sql);

				echo "<table border='1'; class='table table-hover';>";
					echo "<tr class='warning'>";
						echo "<td>Id</td>";
						echo "<td>Usaurio</td>";
						echo "<td>Password</td>";
						echo "<td>Correo</td>";
						echo "<td>Password del administrador</td>";
						echo "<td>Editar</td>";
						echo "<td>Borrar</td>";
					echo "</tr>";
            ?>

                    <?php 
                while($arreglo=mysqli_fetch_array($query)){
				    echo "<tr class='success'>";
				    	echo "<td>$arreglo[0]</td>";
				    	echo "<td>$arreglo[1]</td>";
				    	echo "<td>$arreglo[2]</td>";
				    	echo "<td>$arreglo[3]</td>";
				    	echo "<td>$arreglo[4]</td>";

				    	echo "<td><a href='edit.php?id=$arreglo[0]'><img src='../../img/edit.png' width='20%'class='img-rounded'></td>";
						echo "<td><a href='admin.php?id=$arreglo[0]&idborrar=2'><img src='../../img/delete.png' width='20%' class='img-rounded'/></a></td>";
                        echo "</tr>";
				}

				echo "</table>";
					extract($_GET);
					if(@$idborrar==2){
						$sqlborrar="DELETE FROM login WHERE id=$id";
						$resborrar=mysqli_query($mysqli, $sqlborrar);
						echo '<script>alert("REGISTRO ELIMINADO")</script> ';
						echo "<script>location.href='admin.php'</script>";
					}
            ?>
            </div>
            <h2> Mensajes de los usuarios</h2>
            <div class="row-fluid">
                <?php
				require("../model/config.php");
				$sql=("SELECT * FROM message");
				$query=mysqli_query($mysqli,$sql);

				echo "<table border='1'; class='table table-hover';>";
					echo "<tr class='warning'>";
						echo "<td>ID</td>";
						echo "<td>Usuario</td>";
						echo "<td>Email</td>";
						echo "<td>Hora de envio</td>";
						echo "<td>Mensaje</td>";
						echo "<td>Borrar</td>";
					echo "</tr>";
                ?>

                    <?php 
                while($arreglo=mysqli_fetch_array($query)){
				    echo "<tr class='success'>";
				    	echo "<td>$arreglo[0]</td>";
				    	echo "<td>$arreglo[1]</td>";
				    	echo "<td>$arreglo[2]</td>";
				    	echo "<td>$arreglo[3]</td>";
				    	echo "<td>$arreglo[4]</td>";
						echo "<td><a href='admin.php?id=$arreglo[0]&idborrar=1'><img src='../../img/delete.png' width='20%' class='img-rounded'/></a></td>";
                        echo "</tr>";
				}

				echo "</table>";
					extract($_GET);
					if(@$idborrar==1){
						$sqlborrar="DELETE FROM message WHERE id=$id";
						$resborrar=mysqli_query($mysqli, $sqlborrar);
						echo '<script>alert("REGISTRO ELIMINADO")</script> ';
						echo "<script>location.href='admin.php'</script>";
					}
            ?>
            </div>
        </div>
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