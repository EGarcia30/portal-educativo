<?php
    require_once("Controllers/inicioSesionController.php");
    require_once("Models/indexModel.php");
    class indexController{
        private $model;
        
        public function __construct(){
            $this->model = new index();
        }

        static function index(){          
            $_SESSION["Titulo"] = "Alumnos";

            $alumnos = new index();

            $datos = $alumnos->registros();

            require_once("Views/home/index.php");
        }

        static function indexBtn(){
            $_SESSION["alerta"] = "";
            $_SESSION["Mensaje"] = "";

            $_SESSION["Titulo"] = "Alumnos";

            $alumnos = new index();

            $datos = $alumnos->registros();

            require_once("Views/home/index.php");
        }

        static function ingresar(){
            $_SESSION["alerta"] = "";
            $_SESSION["Mensaje"] = "";
            $_SESSION["Titulo"] = "Ingresar Alumnos";
            require_once("Views/home/ingresarA.php");
        }

        static function ingresarAlumno(){
            $nombres = $_REQUEST["nombres"];
            $apellidos = $_REQUEST["apellidos"];
            $genero = $_REQUEST["genero"];
            $edad = $_REQUEST["edad"];
            $usuario = $_REQUEST["nUsuario"];
            $clave = $_REQUEST["clave"];
            $tusuario = $_REQUEST["tUsuario"];

            $ingresar = new index();

            $Alu = $ingresar->insertarAlumno($nombres,$apellidos,$genero,$edad,$usuario,$clave,$tusuario);

            if($Alu == true){
                $_SESSION["alerta"] = "success";
                $_SESSION["Mensaje"] = "Datos Ingresados exitosamente!"; 
            }
            else{
                $_SESSION["alerta"] = "danger";
                $_SESSION["Mensaje"] = "Ocurrio un error al ingresar los datos!"; 
            }

            require_once("Views/home/ingresarA.php");
        }

        static function buscar(){
            $id = $_REQUEST["id"];
            $_SESSION["Titulo"] = "Buscar Alumno";
            
            $bca = new index();

            $datos = $bca->buscarAlumno($id);
            require_once("Views/home/buscar.php");
        }

        static function editar(){
            $id = $_REQUEST['id'];
            $_SESSION["Titulo"] = "Actualizar Alumno";

            $act = new index();
            $datos = $act->buscarAlumno($id);

            require_once("Views/home/editar.php");
        }

        static function editarAlumno(){
            $nombres = $_REQUEST["nombres"];
            $apellidos = $_REQUEST["apellidos"];
            $genero = $_REQUEST["genero"];
            $edad = $_REQUEST["edad"];
            $usuario = $_REQUEST["nUsuario"];
            $clave = $_REQUEST["clave"];
            $id = $_REQUEST["id"];

            $actA = new index();
            $dts = $actA->actualizarAlumno($nombres,$apellidos,$genero,$edad,$usuario,$clave,$id);

            if($dts){
                $_SESSION["alerta"] = "success";
                $_SESSION["Mensaje"] = "--Información de alumno actualizada!";
            }
            else{
                $_SESSION["alerta"] = "danger";
                $_SESSION["Mensaje"] = "--Error información no actualizada!";
            }

            header("Location:index.php?a=index");
        }

        static function eliminar(){
            $id = $_REQUEST["id"];
            $_SESSION["Titulo"] = "Eliminar Alumno";
            
            $bca = new index();

            $datos = $bca->buscarAlumno($id);
            require_once("Views/home/eliminar.php");
        }

        static function eliminarAlumno(){
            $id = $_REQUEST["id"];

            $eliminar = new index();

            $alumo = $eliminar->eliminarAlu($id);

            if($alumo){
                $_SESSION["alerta"] = "success";
                $_SESSION["Mensaje"] = "--Información de alumno Eliminada!";
            }
            else{
                $_SESSION["alerta"] = "danger";
                $_SESSION["Mensaje"] = "--Error informacin NO eliminada!";
            }

            header("Location:index.php?a=index");
        }
    }
?>