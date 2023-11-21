<?php
    require_once("Models/notaAluModel.php");
    class notaAluController{
        private $model;
        
        public function __construct(){
            $this->model = new indexNotasAlu();
        }

        static function index(){          
            $_SESSION["Titulo"] = "Notas Finales";
            $id = $_SESSION["id_alumno"];

            $notas = new indexNotasAlu();

            $datos = $notas->registros($id);

            require_once("Views/notaAlu/index.php");
        }
    }
?>