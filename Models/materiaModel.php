<?php
    require_once("Libraries/core/conexion.php");

    class indexMateria{
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

        public function insertarMateria(string $nomMateria){

            $sql="INSERT INTO materia(nomMateria) values(?)";
            $insert=$this->db->prepare($sql);
            $arrData=array($nomMateria);
            $resInsert = $insert->execute($arrData);
            return $resInsert;
        }

        public function buscarMateria(int $id){
            $sql = "SELECT * FROM materia WHERE id_materia=$id";
            $res = $this->db->query($sql);
            $arrdato = $res->fetchall(PDO::FETCH_ASSOC);
            return $arrdato;
        }

        public function actualizarMateria(string $nomMateria, int $id){
            $sql = "UPDATE materia SET nomMateria=? WHERE id_materia=?";
            $insert = $this->db->prepare($sql);
            $arrData=array($nomMateria, $id);
            $resInsert = $insert->execute($arrData);
            return $resInsert;
        }

        public function eliminarMat(int $id){
            $sql = "DELETE FROM materia WHERE id_materia=?";
            $insert=$this->db->prepare($sql);
            $arrData=array($id);
            $resInsert = $insert->execute($arrData);
            return $resInsert;
        }
        
    }
?>