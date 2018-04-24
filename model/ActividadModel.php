<?php
class ActividadModel {
    protected $db;

    public function __construct() {
        require 'libs/SPDO.php';
        $this->db = SPDO::singleton();
    }//constructor
    
    public function  insertarAlquilerLocal($fechaI, $fechaF, $monto){
        $consulta = $this->db->prepare("call sp_insertar_AlquilerLocal('$fechaI', '$fechaF', '$monto')");
        $consulta->execute();
        return $consulta;
    }//insertarActa
    public function  insertarAlquilerSalon($fecha,$hora,$asunto, $cSillas, $cMesas,$cManteles,$usoCocina, $precio,$correo){
        $consulta = $this->db->prepare("call sp_insertar_AlquilerSalon('$fecha','$hora','$asunto', '$cSillas', '$cMesas','$cManteles','$usoCocina', '$precio','$correo')");
        $consulta->execute();
        return $consulta;
    }//insertarActa
    
    public function  insertarActividad($fecha,$hora,$descripcion){
        $consulta = $this->db->prepare("call sp_insertar_Actividad('$fecha','$hora','$descripcion')");
        $consulta->execute();
        return $consulta;
    }//insertarActa
   
    public function obtenerCalendario(){
        $consulta=$this->db->prepare("call sp_obtener_ActividadSalon()");
        $consulta->execute();
        return $consulta;
    }//InsertarRegistro
    
    public function obtenerActividadVariada(){
        $consulta=$this->db->prepare("call sp_obtener_ActividadVariada()");
        $consulta->execute();
        return $consulta;
    }//InsertarRegistro
        
    public function obtenerActividadSalon(){
        $consulta=$this->db->prepare("call  sp_obtener_ActividadSalon()");
        $consulta->execute();
        return $consulta;
    }//InsertarRegistro

    public function obtenerCalendarioTodo(){
        $consulta=$this->db->prepare("call  sp_calendarioActividades()");
        $consulta->execute();
        return $consulta;
    }//InsertarRegistro

}//class
