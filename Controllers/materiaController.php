<?php
    require_once("Models/materiaModel.php");
    class materiaController{
        private $model;
        
        public function __construct(){
            $this->model = new indexMateria();
        }

        static function index(){          
            $_SESSION["Titulo"] = "Materias";

            $materias = new indexMateria();

            $datos = $materias->registros();

            require_once("Views/materia/index.php");
        }

        static function indexBtn(){
            $_SESSION["alerta"] = "";
            $_SESSION["Mensaje"] = "";

            $_SESSION["Titulo"] = "Materia";

            $materias = new indexMateria();

            $datos = $materias->registros();

            require_once("Views/materia/index.php");
        }

        static function ingresar(){
            $_SESSION["alerta"] = "";
            $_SESSION["Mensaje"] = "";
            $_SESSION["Titulo"] = "Ingresar Materia";
            require_once("Views/materia/ingresar.php");
        }

        static function ingresarMateria(){
            $nombres = $_REQUEST["nomMateria"];

            $ingresar = new indexMateria();

            $Mat = $ingresar->insertarMateria($nombres);

            if($Mat == true){
                $_SESSION["alerta"] = "success";
                $_SESSION["Mensaje"] = "Materia Ingresada exitosamente!"; 
            }
            else{
                $_SESSION["alerta"] = "danger";
                $_SESSION["Mensaje"] = "Ocurrio un error al ingresar los datos!"; 
            }

            require_once("Views/materia/ingresar.php");
        }

        static function buscar(){
            $id = $_REQUEST["id"];
            $_SESSION["Titulo"] = "Buscar Materia";
            
            $bcm = new indexMateria();

            $datos = $bcm->buscarMateria($id);
            require_once("Views/materia/buscar.php");
        }

        static function editar(){
            $id = $_REQUEST['id'];
            $_SESSION["Titulo"] = "Actualizar Materia";

            $act = new indexMateria();
            $datos = $act->buscarMateria($id);

            require_once("Views/materia/editar.php");
        }

        static function editarMateria(){
            $id= $_REQUEST["id"];
            $nombres = $_REQUEST["nomMateria"];

            $actA = new indexMateria();
            $dts = $actA->actualizarMateria($nombres,$id);

            if($dts){
                $_SESSION["alerta"] = "success";
                $_SESSION["Mensaje"] = "--Información de Materia actualizada!";
            }
            else{
                $_SESSION["alerta"] = "danger";
                $_SESSION["Mensaje"] = "--Error información no actualizada!";
            }

            header("Location:index.php?ma=index");
        }

        static function eliminar(){
            $id = $_REQUEST["id"];
            $_SESSION["Titulo"] = "Eliminar Materia";
            
            $bca = new indexMateria();

            $datos = $bca->buscarMateria($id);
            require_once("Views/materia/eliminar.php");
        }

        static function eliminarMateria(){
            $id = $_REQUEST["id"];

            $eliminar = new indexMateria();

            $alumo = $eliminar->eliminarMat($id);

            if($alumo){
                $_SESSION["alerta"] = "success";
                $_SESSION["Mensaje"] = "--Información de Materia Eliminada!";
            }
            else{
                $_SESSION["alerta"] = "danger";
                $_SESSION["Mensaje"] = "--Error informacin NO eliminada!";
            }

            header("Location:index.php?ma=index");
        }
    }
?>