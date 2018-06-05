<?php
    require 'libs/Config.php';
    $config= Config::singleton();
    $config->set('controllerFolder','controller/');
    $config->set('modelFolder', 'model/');
    $config->set('viewFolder', 'view/');
    
    /*$config->set('dbhost', '163.178.107.130');
    $config->set('dbname', 'proyecto5lenguajesb50743');
    $config->set('dbuser', 'adm');
    $config->set('dbpass', 'saucr.092');*/

    $config->set('dbhost', 'sql9.freemysqlhosting.net');
	$config->set('dbname', 'sql9241265');
	$config->set('dbuser', 'sql9241265');
	$config->set('dbpass', '4UivGEeCx3');
    
?>

