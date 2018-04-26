<?php
include_once 'public/header.php';
?>

<div class="banner-inner">
</div>
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="index.html">Home</a>
    </li>
    <li class="breadcrumb-item active">Pregunta 2</li>
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
        <h3 class="tittle_w3ls">Tipo de destino</h3>
        <div class="row inner-sec-w3layouts-agileinfo">

            <div class="col-md-4 proj_gallery_grid" data-aos="zoom-in">


            </div>
            <div class="col-md-4 proj_gallery_grid" data-aos="zoom-in">
                <div class="section_1_gallery_grid">
                    <a title="Rural" href="public/images/p2Dinero.png">
                        <div class="section_1_gallery_grid1">
                            <img src="public/images/p2Dinero.png" alt=" " class="img-responsive" />
                            <div class="proj_gallery_grid1_pos">
                                <h3>Tipo de destipo</h3>
                                <p>Monetario</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 proj_gallery_grid" data-aos="zoom-in">

            </div>
        </div>

        <div class="form-group">
            <label for="sel1">¿Cúal el tipo de destino que  prefiere?</label>
            <select class="form-control" id="sel1">
                <option>Económico</option>
                <option>Intermedio</option>                
                <option>Costoso</option>

            </select>
        </div>

        <ul class="pagination">
            <li class="page-item"><a class="page-link" href="?controlador=Default&accion=pregunta1">1</a></li>
            <li class="page-item"><a class="page-link" href="?controlador=Default&accion=pregunta2">2</a></li>
            <li class="page-item"><a class="page-link" href="?controlador=Default&accion=pregunta3">3</a></li>            
            <li class="page-item"><a class="page-link" href="?controlador=Default&accion=pregunta4">4</a></li>
            <li class="page-item"><a class="page-link" href="?controlador=Default&accion=pregunta5">5</a></li>
        </ul>
    </div>
</section>

<?php
include_once 'public/footer.php';
?>

