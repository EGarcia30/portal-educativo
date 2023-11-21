<?php
    require_once("Libraries/core/conexion.php");

    class indexInscribir{
        private $modelo;
        private $db;

        public function __construct(){
            $this->modelo = array();
            $this->db = new conexion();
            $this->db = $this->db->connect();
        }

        public function insertarInscripcion(int $idA,int $idD,int $idM,string $nomMateria){

            $sql="INSERT INTO inscripcion(id_alumno,id_docente,id_materia,nomMateria) values(?,?,?,?)";
            $insert=$this->db->prepare($sql);
            $arrData=array($idA,$idD,$idM,$nomMateria);
            $resInsert = $insert->execute($arrData);
            return $resInsert;
        }
    }
?>