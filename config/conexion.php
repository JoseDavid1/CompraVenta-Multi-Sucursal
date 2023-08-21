<?php

    /* Iniciamos la sesión del usuario */
    session_start();
    class Conectar{
        protected $dbh;


        /* Parámetros para la conexión con la BD */
        protected function Conexion(){
            try{
                $conectar = $this->dbh=new PDO("sqlsrv:Server=DAVID\SQLEXPRESS;Database=CompraVenta", "sa", "Computadora1");
                return $conectar;
            }catch(Exception $e){
                print "Error Conexión BD" . $e->getMessage() . "<br/>";
                die();
            }
        }

        /* Funcion para armar las url */
        public static function ruta(){
            return "http://localhost/xampp/CompraVenta/";
        }

    }

?>