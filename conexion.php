<?php 

const DB_HOST="localhost";
const DB_USER="root";
const DB_PASSWORD="";
const DB_NAME="db_condominio";
//conexión básica
try {
    $conexion=mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    $conexion->set_charset("utf8");
    //echo "Conexion exitosa";
} catch (Exception $ex) {
    echo "Error al conectar: ".$ex->getMessage();
}

class Conexion{	  
    public static function Conectar() {      
        $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');			
        try{
            $conexion2 = new PDO("mysql:host=".DB_HOST."; dbname=".DB_NAME, DB_USER, DB_PASSWORD, $opciones);		
            return $conexion2;
            //echo '<script>alert("Conexion exitosa")</script>';
        }catch (Exception $e){
            die("El error de Conexión es: ". $e->getMessage());
        }
    }
}

?>