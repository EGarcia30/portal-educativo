<?php
    session_start();
    require_once("Models/inicioSesionModel.php");
    class inicioSesionController{
        private $model;

        public function __construct(){
            $this->model = new inicioSesion();
        }

        static function index(){
            $_SESSION["alerta"] = "";
            $_SESSION["Mensaje"] = "";
            $_SESSION["Titulo"] = "Inicio Sesion";
            require_once("Views/inicioSesion.php");
        }

        static function entrar(){
            $Usuario = $_REQUEST["Usuario"];
            $clave = $_REQUEST["clave"];

            $usuario = new inicioSesion();
            
            $datos = $usuario->ingresar($Usuario, $clave);

            if(!empty($datos)){
                $_SESSION["nUsuario"] = $datos["user"];
                $_SESSION["clave"] = $datos["password"];
                $_SESSION["tipoUsuario"] = $datos["tipoUsuario"];
                $_SESSION["alerta"] = "";
                $_SESSION["Mensaje"] = "";
                header("Location:index.php?a=index");
            }
            else{

                $dato = $usuario->ingresarAlu($Usuario, $clave);
                if(!empty($dato)){
                    $_SESSION["id_alumno"] = $dato["id_alumno"];
                    $_SESSION["nUsuario"] = $dato["nUsuario"];
                    $_SESSION["clave"] = $dato["clave"];
                    $_SESSION["tipoUsuario"] = $dato["tipoUsuario"];            
                    $_SESSION["alerta"] = "";
                    $_SESSION["Mensaje"] = "";
                    header("Location:index.php?in=index");
                }
                else{
                    $_SESSION["alerta"] = "danger";
                    $_SESSION["Mensaje"] = "Error: usuario o contraseña incorrectos!";
                    require_once("Views/inicioSesion.php");
                }
            }
        }
    }
?>