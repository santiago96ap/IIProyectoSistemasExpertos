<?php

class DefaultController {
    private $view;

    public function __construct() {
        $this->view = new View();
    }//constructor
    
    public function index(){
        $this->view->show("IndexView.php");
    }//index
    
    public function contactenos(){
        $this->view->show("ContactView.php");
    }//contactenos
    
    public function dondeEncontrar(){
        $this->view->show("DondeEncontrarView.php");
    }//dondeEncontrar
    public function sitioInteres(){
        $this->view->show("SitioInteresView.php");
    }//sitioInteres
    
    public function sobreNosotros(){
        $this->view->show("SobreNosotrosView.php");
    }//sobreNosotros
    public function login(){
        $this->view->show("LoginView.php");
    }//login
    
     public function preguntas(){
        $this->view->show("PreguntasView.php");
    }//preguntas
    
    public function registrarSitio(){
        $this->view->show("RegistrarSitioView.php");
    }//registrarSitio
    
    public function actModSitio(){
        $this->view->show("ActModSitioView.php");
    }//actModSitio
    
     public function indexADM(){
        $this->view->show("IndexADMView.php");
    }//actModSitio
    
    public function resultadoRecomendacion(){
        $this->view->show("ResultadoRecomendacionView.php");
    }//resultadoRecomendacion
    
     public function listarSitio(){
        $this->view->show("ListarSitioView.php");
    }//actModSitio
}//class
