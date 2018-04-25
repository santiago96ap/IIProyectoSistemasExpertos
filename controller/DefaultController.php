<?php

class DefaultController {
    private $view;

    public function __construct() {
        $this->view = new View();
    }//constructor
    
    public function index(){
        $this->view->show("IndexView.php");
    }
    
    public function contactenos(){
        $this->view->show("ContactView.php");
    }
    
    public function dondeEncontrar(){
        $this->view->show("DondeEncontrarView.php");
    }
    public function sitioInteres(){
        $this->view->show("SitioInteresView.php");
    }
    
    public function sobreNosotros(){
        $this->view->show("SobreNosotrosView.php");
    }
    
}
