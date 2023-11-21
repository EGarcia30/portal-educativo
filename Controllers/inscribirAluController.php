<?php
    require_once("Models/inscribirAluModel.php");
    class inscribirAluController{
        private $model;
        
        public function __construct(){
            $this->model = new indexInscribir();
        }

        static function index(){
            $_SESSION["alerta"] = "";
            $_SESSION["Mensaje"] = "";

            $_SESSION["Titulo"] = "Inscribir Materia";

            require_once("Views/inscribir/index.php");
        }

        static function ingresarInscripcion(){
            $idA= $_REQUEST["idA"];
            $idD= $_REQUEST["idD"];
            $idM= $_REQUEST["idM"];
            $nombres = $_REQUEST["nomMateria"];

            $actI = new indexInscribir();
            $dts = $actI->insertarInscripcion($idA,$idD,$idM,$nombres);

            if($dts){
                $_SESSION["alerta"] = "success";
                $_SESSION["Mensaje"] = "--Información de Inscripción ingresada!";
            }
            else{
                $_SESSION["alerta"] = "danger";
                $_SESSION["Mensaje"] = "--Error información no ingresada!";
            }

            require_once("Views/inscribir/index.php");
        }
    }
?>