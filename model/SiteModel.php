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
	}//class
?>

