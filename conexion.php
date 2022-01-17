<?php
    class Conexion{
        public function conectar(){
            $DB_HOST='localhost';
            $DB_USER='root';
            $DB_PASSWORD='';
            $DB_NAME='prueba_usuario';
            
            $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');	
            try{
                //crear una instancia de PDO
                $conexion= new PDO("mysql:host=".$DB_HOST."; dbname=".$DB_NAME, $DB_USER, $DB_PASSWORD, $opciones);		
                return $conexion;
            }catch(Exception $e){
                die('Error de conexion: '.$e->getMessage());
            }
        }
    }
?>
