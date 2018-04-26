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
    public function login(){
        $this->view->show("LoginView.php");
    }
    
     public function pregunta1(){
        $this->view->show("Pregunta1View.php");
    }
     public function pregunta2(){
        $this->view->show("Pregunta2View.php");
    }
     public function pregunta3(){
        $this->view->show("Pregunta3View.php");
    }
     public function pregunta4(){
        $this->view->show("Pregunta4View.php");
    }
     public function pregunta5(){
        $this->view->show("Pregunta5View.php");
    }
  
    
}
