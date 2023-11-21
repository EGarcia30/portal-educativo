<?php
    require_once("Libraries/core/conexion.php");

    class indexNotas{
        private $modelo;
        private $db;

        public function __construct(){
            $this->modelo = array();
            $this->db = new conexion();
            $this->db = $this->db->connect();
        }

        public function registros(){
            $sql = "SELECT * FROM notasfinales ORDER BY nomMateria ASC";
            $res = $this->db->query($sql);
            $arrdato = $res->fetchall(PDO::FETCH_ASSOC);
            return $arrdato;
        }

        public function insertarNotas(int $idA,int $idD,int $idM,string $nomMateria, float $nota){

            $sql="INSERT INTO notasfinales(id_alumno,id_docente,id_materia,nomMateria,nota) values(?,?,?,?,?)";
            $insert=$this->db->prepare($sql);
            $arrData=array($idA,$idD,$idM,$nomMateria,$nota);
            $resInsert = $insert->execute($arrData);
            return $resInsert;
        }

        public function buscarNota(int $id){
            $sql = "SELECT * FROM notasfinales WHERE id_nota=$id";
            $res = $this->db->query($sql);
            $arrdato = $res->fetchall(PDO::FETCH_ASSOC);
            return $arrdato;
        }

        public function actualizarNota(int $idA,int $idD,int $idM,string $nomMateria, float $nota,int $id){
            $sql = "UPDATE notasfinales SET id_alumno=?, id_docente=?, id_materia=?, nomMateria=?, nota=? WHERE id_nota=?";
            $insert = $this->db->prepare($sql);
            $arrData=array($idA,$idD,$idM,$nomMateria,$nota, $id);
            $resInsert = $insert->execute($arrData);
            return $resInsert;
        }

        public function eliminarNota(int $id){
            $sql = "DELETE FROM notasfinales WHERE id_nota=?";
            $insert=$this->db->prepare($sql);
            $arrData=array($id);
            $resInsert = $insert->execute($arrData);
            return $resInsert;
        }
        
    }
?>