<?php
	class SiteModel {
    	protected $db;

    	public function __construct() {
        	require 'libs/SPDO.php';
        	$this->db = SPDO::singleton();
    	}//constructor

    	function getAllSites() {
        	$query = $this->db->prepare("call sp_get_all_destinations()");
        	$query->execute();
        	$result = $query->fetchAll();
        	return $result;
  	  	}//getAllSites

        function get() {
            $query = $this->db->prepare("call sp_get_all_destinations_p();");
            $query->execute();
            $result = $query->fetch();
            return $result;
        }//getAllSites

        function getSingleSite($id) {
            $query = $this->db->prepare("call sp_get_single_destination('$id')");
            $query->execute();
            $result = $query->fetchAll();
            return $result;
        }//getAllSites
	}//class
?>

