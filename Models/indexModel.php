<?php
    require_once("Libraries/core/conexion.php");

    class index{
        private $modelo;
        private $db;

        public function __construct(){
            $this->modelo = array();
            $this->db = new conexion();
            $this->db = $this->db->connect();
        }

        public function registros(){
            $sql = "SELECT * FROM alumno";
            $res = $this->db->query($sql);
            $arrdato = $res->fetchall(PDO::FETCH_ASSOC);
            return $arrdato;
        }

        public function insertarAlumno(string $nombres,string $apellidos,string $genero, int $edad, string $nUsuario, string $clave, string $tUsuario){

            $sql="INSERT INTO alumno(nombres,apellidos,genero,edad,nUsuario,clave,tipoUsuario) values(?,?,?,?,?,?,?)";
            $insert=$this->db->prepare($sql);
            $arrData=array($nombres,$apellidos,$genero,$edad,$nUsuario,$clave,$tUsuario);
            $resInsert = $insert->execute($arrData);
            return $resInsert;
        }

        public function buscarAlumno(int $id){
            $sql = "SELECT * FROM alumno WHERE id_alumno=$id";
            $res = $this->db->query($sql);
            $arrdato = $res->fetchall(PDO::FETCH_ASSOC);
            return $arrdato;
        }

        public function actualizarAlumno(string $nombres,string $apellidos,string $genero, int $edad, string $nUsuario, string $clave, int $id){

            $sql = "UPDATE alumno SET nombres=?, apellidos=?, genero=?, edad=?,
            nUsuario=?, clave=? WHERE id_alumno=?";
            $insert = $this->db->prepare($sql);
            $arrData=array($nombres,$apellidos,$genero,$edad,$nUsuario,$clave,$id);
            $resInsert = $insert->execute($arrData);
            return $resInsert;
        }

        public function eliminarAlu(int $id){
            $sql = "DELETE FROM alumno WHERE id_alumno=?";
            $insert=$this->db->prepare($sql);
            $arrData=array($id);
            $resInsert = $insert->execute($arrData);
            return $resInsert;
        }
        
    }
?>