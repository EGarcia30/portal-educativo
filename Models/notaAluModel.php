<?php
    require_once("Libraries/core/conexion.php");

    class indexNotasAlu{
        private $modelo;
        private $db;

        public function __construct(){
            $this->modelo = array();
            $this->db = new conexion();
            $this->db = $this->db->connect();
        }

        public function registros(int $id){
            $sql = "SELECT * FROM notasfinales WHERE id_alumno=$id ORDER BY nomMateria ASC";
            $res = $this->db->query($sql);
            $arrdato = $res->fetchall(PDO::FETCH_ASSOC);
            return $arrdato;
        }
    }
?>