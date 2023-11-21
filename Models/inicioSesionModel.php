<?php
    require_once("Libraries/core/conexion.php");

    class inicioSesion{
        private $Modelo;
        private $db;
        private $strUsuario;
        private $strClave;

        public function __construct(){
            $this->Modelo = array();
            $this->db = new conexion();
            $this->db = $this->db->connect();
        }
        
        public function ingresar(string $Usuario, string $clave){
            $this->strUsuario = $Usuario;
            $this->strClave = $clave;
            $sql = "SELECT * FROM docente WHERE user='$this->strUsuario' and password='$this->strClave'";
            $res = $this->db->query($sql);
            $arrdato = $res->fetch(PDO::FETCH_ASSOC);
            return $arrdato;
        }

        public function ingresarAlu(string $Usuario, string $clave){
            $this->strUsuario = $Usuario;
            $this->strClave = $clave;
            $sql = "SELECT * FROM alumno WHERE nUsuario='$this->strUsuario' and clave='$this->strClave'";
            $res = $this->db->query($sql);
            $arrdato = $res->fetch(PDO::FETCH_ASSOC);
            return $arrdato;
        }
    }

?>