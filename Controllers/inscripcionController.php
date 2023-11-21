<?php
    require_once("Models/inscripcionModel.php");
    class inscripcionController{
        private $model;
        
        public function __construct(){
            $this->model = new indexInscripcion();
        }

        static function index(){          
            $_SESSION["Titulo"] = "Inscripciones";

            $inscripcion = new indexInscripcion();

            $datos = $inscripcion->registros();

            require_once("Views/inscripcion/index.php");
        }

        static function indexBtn(){
            $_SESSION["alerta"] = "";
            $_SESSION["Mensaje"] = "";

            $_SESSION["Titulo"] = "Inscripciones";

            $inscripcion = new indexInscripcion();

            $datos = $inscripcion->registros();

            require_once("Views/inscripcion/index.php");
        }

        static function buscar(){
            $id = $_REQUEST["id"];
            $_SESSION["Titulo"] = "Buscar Inscripción";
            
            $bci = new indexInscripcion();

            $datos = $bci->buscarInscripcion($id);
            require_once("Views/inscripcion/buscar.php");
        }

        static function editar(){
            $id = $_REQUEST['id'];
            $_SESSION["Titulo"] = "Actualizar Inscripción";

            $act = new indexInscripcion();
            $datos = $act->buscarInscripcion($id);

            require_once("Views/inscripcion/editar.php");
        }

        static function editarInscripcion(){
            $idA= $_REQUEST["idA"];
            $idD= $_REQUEST["idD"];
            $idM= $_REQUEST["idM"];
            $id= $_REQUEST["id"];
            $nombres = $_REQUEST["nomMateria"];

            $actI = new indexInscripcion();
            $dts = $actI->actualizarInscripcion($idA,$idD,$idM,$nombres,$id);

            if($dts){
                $_SESSION["alerta"] = "success";
                $_SESSION["Mensaje"] = "--Información de Inscripción actualizada!";
            }
            else{
                $_SESSION["alerta"] = "danger";
                $_SESSION["Mensaje"] = "--Error información no actualizada!";
            }

            header("Location:index.php?i=index");
        }

        static function eliminar(){
            $id = $_REQUEST["id"];
            $_SESSION["Titulo"] = "Eliminar Inscripcion";
            
            $bca = new indexInscripcion();

            $datos = $bca->buscarInscripcion($id);
            require_once("Views/inscripcion/eliminar.php");
        }

        static function eliminarInscripcion(){
            $id = $_REQUEST["id"];

            $eliminar = new indexInscripcion();

            $alumo = $eliminar->eliminarIns($id);

            if($alumo){
                $_SESSION["alerta"] = "success";
                $_SESSION["Mensaje"] = "--Información de Inscripción Eliminada!";
            }
            else{
                $_SESSION["alerta"] = "danger";
                $_SESSION["Mensaje"] = "--Error informacin NO eliminada!";
            }

            header("Location:index.php?i=index");
        }
    }
?>