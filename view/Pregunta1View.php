<?php
include_once 'public/header.php';
?>

<div class="banner-inner">
</div>
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="index.html">Home</a>
    </li>
    <li class="breadcrumb-item active">Pregunta 1</li>
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
        <div id="Pregunta1">
        <h3 class="tittle_w3ls">Lugar de Preferencia</h3>
        <div class="row inner-sec-w3layouts-agileinfo">

            <div class="col-md-4 proj_gallery_grid" data-aos="zoom-in">
                <div class="section_1_gallery_grid">
                    <a title="Rural" href="public/images/p1Rural.jpg">
                        <div class="section_1_gallery_grid1">
                            <img src="public/images/p1Rural.jpg" alt=" " class="img-responsive" />
                            <div class="proj_gallery_grid1_pos">
                                <h3>Opción 1</h3>
                                <p>Rural</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            
            <div class="col-md-4 proj_gallery_grid" data-aos="zoom-in">
                <div class="section_1_gallery_grid" data-aos="zoom-in">
                </div>
            </div>
            
            <div class="col-md-4 proj_gallery_grid" data-aos="zoom-in">
                <div class="section_1_gallery_grid" data-aos="zoom-in">
                    <a title="Urbano" href="public/images/p1Urbano.png">
                        <div class="section_1_gallery_grid1">
                            <img src="public/images/p1Urbano.png" alt=" " class="img-responsive" />
                            <div class="proj_gallery_grid1_pos">
                                <h3>Opción 2</h3>
                                <p>Urbano</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            
        </div>

        <div class="form-group">
            <label for="sel1">De las ilustraciones anteriores. ¿Cúal prefiere?</label>
            <select class="form-control" id="sel1">
                <option>Rural</option>
                <option>Urbano</option>
            </select>
        </div>
        
        </div>

        <ul class="pagination">
            <li class="page-item"><a class="page-link" onclick="getUpdateEmployee(<?php echo 1; ?>);" id="1">1**</a></li>
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

