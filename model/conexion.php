<?php
    class Conectar{
      public static function modelConexion(){
        try {
          $con = new mysqli("localhost","root","","historiasclinicas");
        } catch (Exception $e) {
            die("Error En la Conexion: Error Mysql: ".$e->getMessage());
        }
        return $con;
      }
    }
 ?>
