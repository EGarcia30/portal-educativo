<?php
    require_once("Libraries/core/conexion.php");

    class indexInscripcion{
        private $modelo;
        private $db;

        public function __construct(){
            $this->modelo = array();
            $this->db = new conexion();
            $this->db = $this->db->connect();
        }

        public function registros(){
            $sql = "SELECT * FROM inscripcion ORDER BY nomMateria ASC";
            $res = $this->db->query($sql);
            $arrdato = $res->fetchall(PDO::FETCH_ASSOC);
            return $arrdato;
        }

        public function insertarInscripcion(int $idA,int $idD,int $idM,string $nomMateria){

            $sql="INSERT INTO inscripcion(id_alumno,id_docente,id_materia,nomMateria) values(?,?,?,?)";
            $insert=$this->db->prepare($sql);
            $arrData=array($idA,$idD,$idM,$nomMateria);
            $resInsert = $insert->execute($arrData);
            return $resInsert;
        }

        public function buscarInscripcion(int $id){
            $sql = "SELECT * FROM inscripcion WHERE id_inscripcion=$id";
            $res = $this->db->query($sql);
            $arrdato = $res->fetchall(PDO::FETCH_ASSOC);
            return $arrdato;
        }

        public function actualizarInscripcion(int $idA,int $idD,int $idM,string $nomMateria, int $id){
            $sql = "UPDATE inscripcion SET id_alumno=?, id_docente=?, id_materia=?, nomMateria=? WHERE id_inscripcion=?";
            $insert = $this->db->prepare($sql);
            $arrData=array($idA,$idD,$idM,$nomMateria, $id);
            $resInsert = $insert->execute($arrData);
            return $resInsert;
        }

        public function eliminarIns(int $id){
            $sql = "DELETE FROM inscripcion WHERE id_inscripcion=?";
            $insert=$this->db->prepare($sql);
            $arrData=array($id);
            $resInsert = $insert->execute($arrData);
            return $resInsert;
        }
        
    }
?>