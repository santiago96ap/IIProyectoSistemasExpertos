<?php

class DefaultController {
    private $view;

    public function __construct() {
        $this->view = new View();
    }//constructor
    
    public function index(){
        $this->view->show("IndexView.php");
    }
    
}
