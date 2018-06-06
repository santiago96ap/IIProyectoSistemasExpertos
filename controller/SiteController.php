<?php

class SiteController {

    private $view;

    private $positions = [];
    private $maxLenght=3;

    public function __construct() {
        $this->view = new View();
        require 'model/SiteModel.php';
    }//constructor

    function euclidenDistance($variables, $arrayTemp){
        $sum=0;
        for ($i = 0; $i < count($variables); $i++){
            if(!is_string($arrayTemp[$i])){
                $sum += pow(($arrayTemp[$i]-$variables[$i]),2);
            }else{
                $sum += pow((levenshtein($arrayTemp[$i], $variables[$i])), 2);
        	}//if-else
        }//for
        return (sqrt($sum));
    }//euclidenDistances

    public function getAllSites() {

        $model = new SiteModel();
        $result = $model->getAllSites();
      
        return $result;
    }//getAllSitesç

    public function get() {

        $model = new SiteModel();
        $result = $model->get();
      
        //var_dump($result);
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

    public function getSimilarity() {

    	if(isset($_REQUEST['price']) && isset($_REQUEST['typeDestination']) && isset($_REQUEST['roadType']) && isset($_REQUEST['time']) && isset($_REQUEST['preferencePlace'])){
    		
        	$sites = $this->getAllSites();
        	$userData = array($_REQUEST['price'], $_REQUEST['typeDestination'], $_REQUEST['roadType'], $_REQUEST['time'], $_REQUEST['preferencePlace']);

        	foreach ($sites as $temp) {
				$valueSite = array($temp['price'], $temp['destination_type'], $temp['road_type'], $temp['travel_time'], $temp['preference_place']);
                $site = array($temp['id'], $temp['name'], $temp['address'], $temp['description'], $temp['x'], $temp['y'], $temp['image']);
            	$distance = $this->euclidenDistance($userData, $valueSite);
                $this->order($site, $distance);
                unset($site);
                unset($valueSite);
            }//foreach
    	}//if
    }//getAllSites


    function order($dataArray, $distancia){

    	$temporal = array("valores"=>$dataArray, "distancia"=>$distancia);
    	if (count($this->positions) < $this->maxLenght) {
    		array_push($this->positions, $temporal);
    	}else{
    		usort($this->positions, $this->build_sorter('distancia'));
    		if($distancia <= $this->positions[count($this->positions)-1]['distancia']){
                $this->positions[count($this->positions)-1] = $temporal;
                //var_dump($this->positions);
            }//if
    	}//else
    	unset($temporal);
    	//echo "<br><br>";
    }//euclidenDistances


    function build_sorter($clave) {
        return function ($a, $b) use ($clave) {
            return strnatcmp($a[$clave], $b[$clave]);
        };
    }//build_sorter
}//class

?>