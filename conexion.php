<?php
   
    class Conexion {
        public function Conectar(){
            define('HOST','localhost');
            define('PORT',1521);
            define('NAME', 'ORCL');
            define('USER','hungdbu');
            define('PASS','123456');

            $bd_settings = "(DESCRIPTION = 
                (ADDRESS = 
                    (PROTOCOL = TCP)
                    (HOST = " . HOST . ")
                    (PORT = " . PORT . ")
                )    
                (CONNECT_DATA = 
                (SERVER = DEDICATED)
                (SERVICE_NAME = " . NAME . ")
                )
            )";
            try{
                $bd = new PDO('oci:dbname='.$bd_settings, USER, PASS);
                $bd->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);
                $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo 'CONEXION EXITOSA';
                return $bd;
            }catch(Exception $e){
                echo "ERROR DE CONEXION: " .$e->getMessage();
            }
            }
    }

?>