<?php
    require_once("Models/inicioAluModel.php");
    class inicioAluController{
        private $model;

        public function __construct(){
            $this->model = new indexAlu();
        }

        static function index(){
            $_SESSION["alerta"] = "";
            $_SESSION["Mensaje"] = "";
            $_SESSION["Titulo"] = "Inicio";
            require_once("Views/inicio/index.php");
        }
    }
?>