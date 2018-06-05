<?php

class SiteController {

    private $view;

    public function __construct() {
        $this->view = new View();
    }//constructor

    public function getAllSites() {

        $model = new SiteModel();
        $result = $model->getAllSites();
      
        echo json_encode($result);
    }//getAllSites

}//class

?>