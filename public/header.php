<!DOCTYPE html>
<html>
    <head>
        <title>Asociación Integral</title>
            <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <style type="text/css">body{margin:0;font-family:Lato;}ul,li{list-style-type:none;margin:0;padding:0;}.calendar{padding:30px;}.calendar .day{background:#D8703F;border-bottom:2px solid #bdc3c7;float:left;margin:3px;position:relative;height:120px;width:120px;}.day.marked{background:#FFBB26;border-color:#9F9F9F;}.day .day-number{color:#FFCB1F;left:5px;position:absolute;top:5px;}.day.marked .day-number{color:white;}.day .events{color:white;margin:29px 7px 7px;height:78px;overflow-x:hidden;overflow-y:hidden;}.day .events h5{margin:0 0 5px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;width:100%;}.day .events strong,.day .events span{display:block;font-size:11px;}.day .events ul{}.day .events li{}</style>
    
        <!-- for-mobile-apps -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Best Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
            function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- //for-mobile-apps -->
        <link href="public/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="public/css/style.css" rel="stylesheet" type="text/css" media="all" />
        <!-- js -->
        <script src="public/js/jquery.min.js"></script>
        <!-- //js -->
        <!-- cart -->
        <script src="public/js/simpleCart.min.js"></script>
        <!-- cart -->
        <!-- for bootstrap working -->
        <script type="text/javascript" src="public/js/bootstrap-3.1.1.min.js"></script>
        <!-- //for bootstrap working -->
        <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
        <!-- timer -->
        <link rel="stylesheet" href="public/css/jquery.countdown.css" />
        <!-- //timer -->
        <!-- animation-effect -->
        <link href="public/css/animate.min.css" rel="stylesheet"> 
        <script src="public/js/wow.min.js"></script>
        <script>
            new WOW().init();
        </script>

        <script>
            function addCart(valor1) {
              
                var parametros = {
                    "item": valor1
                };

                $.ajax(
                        {
                            data: parametros,
                            url: '?controlador=Carrito&accion=agregarCarrito',
                            type: 'POST',
                            beforeSend: function () {
                                $("#resultado").html("¡Procesando...espere por favor!");
                            },
                            success: function (response) {
                                $("#resultado").html(response);
                            }

                        }
                );
            }//realizarProceso
        </script>
    </head>

    <body>
        <!-- header -->
        <div class="header">
            <div class="container">
                <div class="header-grid">
                    <div class="header-grid-left animated wow slideInLeft" data-wow-delay=".5s">
                        <ul>
                            <?php
                            if (session_status() != 2) {
                                session_start();
                            }
                            if (isset($_SESSION['u_usuario'])) {
                           
                                $id = $_SESSION['u_usuario'];
                                    ?>
                                    <li><i class="glyphicon glyphicon-log-in" aria-hidden="true"></i><a href="?controlador=Usuario&accion=cerrarSesion">Cerrar Sesión</a></li>
                                    <?php
                                
                            } else {
                                ?>
                                <li><i class="glyphicon glyphicon-log-in" aria-hidden="true"></i><a href="?controlador=Default&accion=login">Iniciar Sesión</a></li>
                                <?php
                            }
                            ?>

                        </ul>
                    </div>

                    <div class="clearfix"> </div>
                </div>
                <div class="logo-nav">
                    <div class="logo-nav-left animated wow zoomIn" data-wow-delay=".5s">
                        <h1><a href="?controlador=Default&accion=index">Asociación Integral<span>Sistema de gestión</span></a></h1>
                    </div>
                    <div class="logo-nav-left1">
                        <nav class="navbar navbar-default">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header nav_2">
                                <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div> 
                            <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                                <ul class="nav navbar-nav">
                                    	
                                    <!-- Mega Menu -->
                                </ul>
                            </div>
                        </nav>
                    </div>


                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <!-- //header --> 