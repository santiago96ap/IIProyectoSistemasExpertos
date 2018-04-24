<?php
include_once 'public/header.php';
?>

<?php
if (isset($_SESSION['u_usuario'])) {
    if ($_SESSION['tipo'] == 's') {
?>

<div class="breadcrumbs">
    <div class="container">
        <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
            <li><a href="?controlador=Default&accion=indexAdm"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Inicio</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuarios<b class="caret"></b></a>
                <ul class="dropdown-menu multi-column columns-3">
                    <div class="row">
                        <div class="col-sm-4">
                            <ul class="multi-column-dropdown">
                                <h6>Registrar</h6>
                                <li><a href="?controlador=Default&accion=asosiado">Asociado</a></li>      
                                <li><a href="?controlador=Default&accion=juntaDirectiva">Junta Directiva</a></li> 
                            </ul>
                        </div>
                        <div class="col-sm-4">
                            <ul class="multi-column-dropdown">
                                <h6>Actualizar</h6>
                                <li><a href="?controlador=Usuario&accion=obtenerAsociadosActualizar">Asociados</a></li>      
                                <li><a href="?controlador=Usuario&accion=obtenerJuntaActualizar">Junta directiva</a></li>      
                            </ul>
                        </div>
                        <div class="col-sm-4">
                            <ul class="multi-column-dropdown">
                                <h6>Eliminar</h6>
                                <li><a href="?controlador=Usuario&accion=obtenerAsociadosEliminar">Asociados</a></li>      
                                <li><a href="?controlador=Usuario&accion=obtenerJuntaEliminar">Junta directiva</a></li>      
                            </ul>
                        </div>
                        <div class="col-sm-4">
                            <ul class="multi-column-dropdown">
                                <h6>Listar</h6>
                                <li><a href="?controlador=Usuario&accion=obtenerAsociados">Ver Asociados</a></li>      
                                <li><a href="?controlador=Usuario&accion=obtenerJunta">Ver Junta directiva</a></li>      
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                </ul>

            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Actas<b class="caret"></b></a>
                <ul class="dropdown-menu multi-column columns-3">
                    <div class="row">
                        <div class="col-sm-4">
                            <ul class="multi-column-dropdown">
                                <h6>Opciones</h6>
                                <li><a href="?controlador=Default&accion=acta">Crear Acta</a></li> 
                                <li><a href="?controlador=Acta&accion=obtenerActaBuscar">Buscar Actas</a></li> 
                                <li><a href="?controlador=Acta&accion=obtenerActa">Ver Actas</a></li> 
                            </ul>

                        </div>
                        <div class="clearfix"></div>
                    </div>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Alquileres y Actividades<b class="caret"></b></a>
                <ul class="dropdown-menu multi-column columns-3">
                    <div class="row">
                        <div class="col-sm-4">
                            <ul class="multi-column-dropdown">
                                <h6>Opciones</h6>
                                <li><a href="?controlador=Default&accion=registrarAlquilerLocal">Alquiler Local Comercial</a></li>      
                                <li><a href="?controlador=Default&accion=registrarAlquilerSalon">Alquiler Salón</a></li>
                                <li><a href="?controlador=Default&accion=registrarActividad">Agregar activiades</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-4">
                            <ul class="multi-column-dropdown">
                                <h6>Listar</h6>
                                <li><a href="?controlador=Actividad&accion=obtenerActividadVariada">Ver actividades extras</a></li>      
                                <li><a href="?controlador=Actividad&accion=obtenerActividadSalon">Ver actividades del salón</a></li>      
                            </ul>
                        </div>

                        <div class="clearfix"></div>
                    </div>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Gastos<b class="caret"></b></a>
                <ul class="dropdown-menu multi-column columns-3">
                    <div class="row">
                        <div class="col-sm-4">
                            <ul class="multi-column-dropdown">
                                <h6>Opciones</h6>
                                <li><a href="?controlador=Default&accion=registrarGasto">Agregar Gasto</a></li>      
                                <li><a href="?controlador=Gasto&accion=obtenerGasto">Ver Gastos</a></li>
                            </ul>
                        </div>

                        <div class="clearfix"></div>
                    </div>
                </ul>
            </li>
            <li><a href="?controlador=Actividad&accion=calendarioTodo">Calendario de Actividades</a></li> 
            <li><a href="?controlador=Default&accion=buscarFactura">Facturación</a></li> 
        </ol>
    </div>

</div>

<div class="banner">
    <div class="container">
        <div class="banner-info animated wow zoomIn" data-wow-delay=".5s">
            <script src="public/js/jquery.wmuSlider.js"></script> 
            <script>
                $('.example1').wmuSlider();
            </script> 
        </div>
    </div>
</div>



<?php
} else if ($_SESSION['tipo'] == 'm') {
?> 
<div class="breadcrumbs">
    <div class="container">
        <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
            <li><a href="?controlador=Default&accion=indexAdm"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Inicio</a></li>
            <li><a href="?controlador=Actividad&accion=calendario">Calendario de Actividades</a></li> 
            <li><a href="?controlador=Default&accion=buscarFactura">Facturación</a></li> 
        </ol>
    </div>

</div>
<div class="banner">
    <div class="container">
        <div class="banner-info animated wow zoomIn" data-wow-delay=".5s">
            <script src="public/js/jquery.wmuSlider.js"></script> 
            <script>
                $('.example1').wmuSlider();
            </script> 
        </div>
    </div>
</div>

<?php
}  else if ($_SESSION['tipo'] == 'a') {
?> 
<div class="breadcrumbs">
    <div class="container">
        <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
            <li><a href="?controlador=Default&accion=indexAdm"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Inicio</a></li>
            <li><a href="?controlador=Actividad&accion=calendario">Calendario de Actividades</a></li> 
            <li><a href="?controlador=Default&accion=buscarFactura">Facturación</a></li> 
        </ol>
    </div>

</div>
<div class="banner">
    <div class="container">
        <div class="banner-info animated wow zoomIn" data-wow-delay=".5s">
            <script src="public/js/jquery.wmuSlider.js"></script> 
            <script>
                $('.example1').wmuSlider();
            </script> 
        </div>
    </div>
</div>

<?php

} 
} else {
?>
<div class="breadcrumbs">
    <div class="container">
        <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
            <li><a href="?controlador=Default&accion=indexAdm"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Inicio</a></li>
            <li><a href="?controlador=Actividad&accion=calendario">Calendario de Actividades</a></li> 
            <li><a href="?controlador=Default&accion=cotizarAlquilerSalon">¿Alquilar Salón?</a></li>
        </ol>
    </div>

</div>
<div class="banner">
    <div class="container">
        <div class="banner-info animated wow zoomIn" data-wow-delay=".5s">
            <script src="public/js/jquery.wmuSlider.js"></script> 
            <script>
                $('.example1').wmuSlider();
            </script> 
        </div>
    </div>
</div>

<?php
}
?>
<?php
include_once 'public/footer.php';
?>
