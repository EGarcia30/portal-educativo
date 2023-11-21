<?php
    require_once("Models/notasModel.php");
    class notasController{
        private $model;
        
        public function __construct(){
            $this->model = new indexNotas();
        }

        static function index(){          
            $_SESSION["Titulo"] = "Notas Finales";

            $notas = new indexNotas();

            $datos = $notas->registros();

            require_once("Views/notas/index.php");
        }

        static function indexBtn(){
            $_SESSION["alerta"] = "";
            $_SESSION["Mensaje"] = "";

            $_SESSION["Titulo"] = "Notas Finales";

            $notas = new indexNotas();

            $datos = $notas->registros();

            require_once("Views/notas/index.php");
        }

        static function ingresar(){
            $_SESSION["alerta"] = "";
            $_SESSION["Mensaje"] = "";
            $_SESSION["Titulo"] = "Ingresar Notas";
            require_once("Views/notas/ingresar.php");
        }

        static function ingresarNotas(){
            $nota = 0.0;

            $idA = $_REQUEST["idAlumno"];
            $idD = $_REQUEST["idDocente"];
            $idM = $_REQUEST["idMateria"];
            $materia = $_REQUEST["nomMateria"];
            $nota = $_REQUEST["nota"];

            $ingresar = new indexNotas();

            $nta = $ingresar->insertarNotas($idA,$idD,$idM,$materia,$nota);

            if($nta == true){
                $_SESSION["alerta"] = "success";
                $_SESSION["Mensaje"] = "Datos Ingresados exitosamente!"; 
            }
            else{
                $_SESSION["alerta"] = "danger";
                $_SESSION["Mensaje"] = "Ocurrio un error al ingresar los datos!"; 
            }

            require_once("Views/notas/ingresar.php");
        }

        static function buscar(){
            $id = $_REQUEST["id"];
            $_SESSION["Titulo"] = "Buscar Nota";
            
            $bcn = new indexNotas();

            $datos = $bcn->buscarNota($id);
            require_once("Views/notas/buscar.php");
        }

        static function editar(){
            $id = $_REQUEST['id'];
            $_SESSION["Titulo"] = "Actualizar Notas";

            $act = new indexNotas();
            $datos = $act->buscarNota($id);

            require_once("Views/notas/editar.php");
        }

        static function editarNotas(){
            $nota=0.0;

            $idA= $_REQUEST["idA"];
            $idD= $_REQUEST["idD"];
            $idM= $_REQUEST["idM"];
            $id= $_REQUEST["id"];
            $nombres = $_REQUEST["nomMateria"];
            $nota = $_REQUEST["nota"];


            $actN = new indexNotas();
            $dts = $actN->actualizarNota($idA,$idD,$idM,$nombres,$nota,$id);

            if($dts){
                $_SESSION["alerta"] = "success";
                $_SESSION["Mensaje"] = "--Información de Notas actualizada!";
            }
            else{
                $_SESSION["alerta"] = "danger";
                $_SESSION["Mensaje"] = "--Error información no actualizada!";
            }

            header("Location:index.php?n=index");
        }

        static function eliminar(){
            $id = $_REQUEST["id"];
            $_SESSION["Titulo"] = "Eliminar Notas";
            
            $bcn = new indexNotas();

            $datos = $bcn->buscarNota($id);
            require_once("Views/notas/eliminar.php");
        }

        static function eliminarNotas(){
            $id = $_REQUEST["id"];

            $eliminar = new indexNotas();

            $alumo = $eliminar->eliminarNota($id);

            if($alumo){
                $_SESSION["alerta"] = "success";
                $_SESSION["Mensaje"] = "--Información de Notas Eliminada!";
            }
            else{
                $_SESSION["alerta"] = "danger";
                $_SESSION["Mensaje"] = "--Error informacin NO eliminada!";
            }

            header("Location:index.php?n=index");
        }
    }
?>