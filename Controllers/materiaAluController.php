<?php
    require_once("Models/materiaAluModel.php");
    class materiaAluController{
        private $model;
        
        public function __construct(){
            $this->model = new indexMateriaAlu();
        }

        static function index(){          
            $_SESSION["Titulo"] = "Materias Disponibles";

            $materias = new indexMateriaAlu();

            $datos = $materias->registros();

            require_once("Views/materiaAlu/index.php");
        }

        static function buscar(){
            $id = $_REQUEST["id"];
            $_SESSION["Titulo"] = "Buscar Materia";
            
            $bcm = new indexMateriaAlu();

            $datos = $bcm->buscarMateria($id);
            require_once("Views/materiaAlu/buscar.php");
        }
    }
?>