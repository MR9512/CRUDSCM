<?php
class Conect {
   public function Conexion() {
       try {
           $con = mysqli_connect("localhost", "root", "", "crud");
           if (!$con) {
               throw new Exception("Error de conexión a la base de datos.");
           }
           return $con;
       } catch (Exception $e) {
           throw new Exception("Error al conectar a la base de datos: " . $e->getMessage());
       }
   }
}
?>