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

    public function getSingleSite() {

    	if(isset($_POST['id'])){
    		
    		$model = new SiteModel();
        	$result = $model->getSingleSite($_POST['id']);
        	echo json_encode($result);

    	}else{
    		echo json_encode("error");
    	}
    }//getAllSites

}//class

?>