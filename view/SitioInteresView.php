<?php
include_once 'public/header.php';
?>
<div class="banner-inner">
</div>
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="index.html">Inicio</a>
    </li>
    <li class="breadcrumb-item active">Sitios de interés</li>
</ol>
<!--/model-->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Introduction Video</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body video">
                <iframe src="https://player.vimeo.com/video/33531612"></iframe>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!--//model-->
<section class="services">
    <div class="container">

        <div class="contact_grid_right">
            <h6>Busca sitios que te interese...</h6>
            <form action="#" method="post">
                <div class="contact_left_grid">
                    <input type="text" placeholder="buscar..." onfocus="this.value = '';" onblur="if (this.value == '') {
                        this.value = 'buscar...';
                    }" required=""><br><br>
                    
                    <input type="submit" value="Buscar" onclick="buscar('1');">
                    <input type="reset" value="Limpiar" onclick="buscar('2');">
                    <div class="clearfix"> </div>
                </div>
            </form>
        </div>
    </div>
</section>

<section id="resultado" class="services" style="display: none;" >
    <div class="container">
        <h3 class="tittle_w3ls">Resultado encontrado</h3>
        <div class="row inner-sec-w3layouts-agileinfo">
            <h4>Sitio 1</h4>
            <div class="contact-map">

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15721.342388382782!2d-83.69054317925048!3d9.905981986649515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0d69b084d750d%3A0x7cb6a6e23ed66ac9!2sProvincia+de+Cartago%2C+Turrialba!5e0!3m2!1ses!2scr!4v1524682739191"
                        class="map" style="border:0" allowfullscreen=""></iframe>
            </div>
            <p>Información del sitio</p>			
        </div>
        
    </div>
</section>
<?php
include_once 'public/footer.php';
?>

<script>

    function buscar(opcion){
        if(opcion == '1'){
            $("#resultado").show();
        }else{
            $("#resultado").hide();
        }
        
    }
</script>