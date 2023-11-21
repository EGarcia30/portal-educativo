<?php
    require_once("Libraries/core/conexion.php");

    class indexMateriaAlu{
        private $modelo;
        private $db;

        public function __construct(){
            $this->modelo = array();
            $this->db = new conexion();
            $this->db = $this->db->connect();
        }

        public function registros(){
            $sql = "SELECT * FROM materia";
            $res = $this->db->query($sql);
            $arrdato = $res->fetchall(PDO::FETCH_ASSOC);
            return $arrdato;
        }

        public function buscarMateria(int $id){
            $sql = "SELECT * FROM materia WHERE id_materia=$id";
            $res = $this->db->query($sql);
            $arrdato = $res->fetchall(PDO::FETCH_ASSOC);
            return $arrdato;
        }
    }
?>