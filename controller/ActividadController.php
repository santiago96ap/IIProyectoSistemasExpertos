<?php

class ActividadController {

    private $view;

    public function __construct() {
        $this->view = new View();
    }

    public function registrarAlquilerLocal() {
        require 'model/ActividadModel.php';
        $model = new ActividadModel();
        $model->insertarAlquilerLocal($_POST['fechaI'], $_POST['fechaF'], $_POST['monto']);
        $this->view->show("registrarAlquilerLocal.php");
    }

    public function registrarAlquilerSalon() {
        require 'model/ActividadModel.php';
        $model = new ActividadModel();
        echo $_POST['cSillas'];
        $precio = $_POST['cSillas'] * 700 + $_POST['cMesas'] * 1000 + $_POST['cManteles'] * 150 + 20000;
        $model->insertarAlquilerSalon($_POST['fecha'], $_POST['hora'], $_POST['asunto'], $_POST['cSillas'], $_POST['cMesas'], $_POST['cManteles'], $_POST['estado'], $precio, $_POST['responsable']);

        $this->enviarCorreoActividad($_POST['responsable'], $_POST['fecha'], $_POST['hora'], $_POST['asunto'], $precio);
        $this->view->show("registrarAlquilerSalon.php");
    }

    public function enviarCorreoActividad($email, $fecha, $hora, $asunto, $monto) {
        error_reporting(E_STRICT);
        date_default_timezone_set('America/Toronto');
        require_once('libs/class.phpmailer.php');
        $mail = new PHPMailer(); // create a new object
        $mail->IsSMTP(); // enable SMTP
        $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
        $mail->SMTPAuth = true; // authentication enabled
        $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 465; // or 587
        $mail->IsHTML(true);
        $mail->Username = "splanificador100@gmail.com";
        $mail->Password = "plan11233*";
        $mail->SetFrom("splanificador100@gmail.com");
        $mail->Subject = "Cotizacion de actividad en salon comunal";
        $mail->Body = "¡Hola " . $email . "!, Se ha registrado una actividad sobre: [" . $asunto . "], por un monto "
                . "de: ₡" . $monto . " que incluye los bienes y servicios solicitados anteriormente. Registrado en la fecha: " . $fecha . " y hora: " . $hora . ""
                . ".Gracias por usar nuestra sitio web. Se despide Asociacion Integral";
        $mail->AddAddress($email);
        if (!$mail->Send()) {
            echo '<script language="javascript">alert("Error: ' . $mail->ErrorInfo . '");</script>';
        } else {
            echo '<script language="javascript">alert("Se te ha enviado una notificación a tu contacto");</script>';
        }
    }

    public function registrarActividad() {
        require 'model/ActividadModel.php';
        $model = new ActividadModel();
        $model->insertarActividad($_POST['fecha'], $_POST['hora'], $_POST['descripcion']);
        $this->view->show("registrarActividadVariada.php");
    }

    public function obtenerActividadVariada() {
        require 'model/ActividadModel.php';
        $model = new ActividadModel();
        $data ['a'] = $model->obtenerActividadVariada();
        $this->view->show("showActividadesVariadas.php", $data);
    }
    
    public function obtenerActividadSalon() {
        require 'model/ActividadModel.php';
        $model = new ActividadModel();
        $data ['a'] = $model->obtenerActividadSalon();
        $this->view->show("showActividadSalon.php", $data);
    }

    public function calendario() {
        require 'model/ActividadModel.php';
        $iniciar = new ActividadModel();
        session_start();
        $_GET['mes'] = 0;
        $vars['tareas'] = $iniciar->obtenerCalendario();
        $this->view->show("showCalendario.php", $vars);
    }
    
    public function calendarioTodo() {
        require 'model/ActividadModel.php';
        $iniciar = new ActividadModel();
        session_start();
        $_GET['mes'] = 0;
        $vars['tareas'] = $iniciar->obtenerCalendarioTodo();
        $this->view->show("showCalendarioTodo.php", $vars);
    }

    public function next() {
        require 'model/ActividadModel.php';
        $iniciar = new ActividadModel();
        ;
        session_start();
        $vars['tareas'] = $iniciar->obtenerActividadSalon();
        $mes = $_GET['mes'];
        if ($mes < 11) {

            $_GET['mes'] = ($mes + 1);
        } else {

            $_GET['mes'] = 0;
        }



        $this->view->show("showCalendario.php", $vars);
    }

    public function back() {
        require 'model/ActividadModel.php';
        $iniciar = new ActividadModel();
        session_start();
        $vars['tareas'] = $iniciar->obtenerActividadSalon();
        if ($_GET['mes'] > 0) {
            $_GET['mes'] = ($_GET['mes'] - 1);
        } else {
            $_GET['mes'] = 11;
        }
        $this->view->show("showCalendario.php", $vars);
    }
        public function nextTodo() {
        require 'model/ActividadModel.php';
        $iniciar = new ActividadModel();
        ;
        session_start();
        $vars['tareas'] = $iniciar->obtenerCalendarioTodo();
        $mes = $_GET['mes'];
        if ($mes < 11) {

            $_GET['mes'] = ($mes + 1);
        } else {

            $_GET['mes'] = 0;
        }



        $this->view->show("showCalendarioTodo.php", $vars);
    }

    public function backTodo() {
        require 'model/ActividadModel.php';
        $iniciar = new ActividadModel();
        session_start();
        $vars['tareas'] = $iniciar->obtenerCalendarioTodo();
        if ($_GET['mes'] > 0) {
            $_GET['mes'] = ($_GET['mes'] - 1);
        } else {
            $_GET['mes'] = 11;
        }
        $this->view->show("showCalendarioTodo.php", $vars);
    }
    
    public function detalle() {
        require 'model/ActividadModel.php';
        $iniciar = new ActividadModel();
        session_start();
        $data['datos'] = $iniciar->obtenerCalendarioTodo();
        $this->view->show("mostrarDetalles.php", $data);
    }//detalle

}

?>