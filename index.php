<?php

    // define('HOST','localhost');
    // define('PORT',1521);
    // define('NAME', 'ORCL');
    // define('USER','hungdbu');
    // define('PASS','123456');

    // $bd_settings = "(DESCRIPTION = 
    //     (ADDRESS = 
    //         (PROTOCOL = TCP)
    //         (HOST = " . HOST . ")
    //         (PORT = " . PORT . ")
    //     )
    //     (CONNECT_DATA = 
    //       (SERVER = DEDICATED)
    //       (SERVICE_NAME = " . NAME . ")
    //     )
    // )";
    // try{
    //     $bd = new PDO('oci:dbname='.$bd_settings, USER, PASS);
    //     $bd->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);
    //     $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //     echo 'CONEXION EXITOSA';
    // }catch(Exception $e){
    //     echo "ERROR DE CONEXION: " .$e->getMessage();
    // }

    require_once('conexion.php');

    $conex = new Conexion();
    $getConection = $conex->Conectar();

    #############################################
    ############ CONSULTA SIMPLE SQL ############
    #############################################

    // $sql = "select * from NHANVIEN";
    // $stmt = $getConection->prepare($sql);
    // $stmt->execute();
    // echo "<br>";

    // while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    //     // echo $row["tennv"]."<br>";
    //     foreach($row as $key=> $value){
    //         echo $key." __ ".$value."<br>";
    //     }
    //     echo '==============================<br>';
    // }

    #############################################
    ############ INSERT - CREATE ############
    #############################################

    // try{
    //     $sql = "insert into NHANVIEN Values('NV05','John Smith',1996, 16500000, 1700000, 'Design', 0917263567,'PB03')";
    //     $stmt = $getConection->prepare($sql);
    //     $stmt->execute();
    //     echo "The row has been added to the database";
    // }catch(PDOException $e){
    //     echo "<br> Error !!! No lines have been added : <br>".$e->getMessage();
    // }

    #############################################
    ############ DELETE - ELIMINAR ############
    #############################################

    // try{
    //     $sql = "DELETE FROM NHANVIEN WHERE MANV = 'NV03'";
    //     $stmt = $getConection->prepare($sql);
    //     $stmt->execute();
    //     echo "The row has been deleted to the database";
    // }catch(PDOException $e){
    //     echo "<br> Error !!! No lines have been deleted : <br>".$e->getMessage();
    // }

    #############################################
    ############ UPDATE - ACTUALIZAR ############
    #############################################

    // try{
    //     $sql = "UPDATE NHANVIEN SET MAPB = 'PB05' WHERE MANV = 'NV05'";
    //     $stmt = $getConection->prepare($sql);
    //     $stmt->execute();
    //     echo "The row has been updated to the database";
    // }catch(PDOException $e){
    //     echo "<br> Error !!! No lines have been updated : <br>".$e->getMessage();
    // }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1>DATABASE ORACLE</h1>
    <div class="d-grid gap-2">
        <a class="btn btn-primary btn-lg active m-1" href="">Phòng ban</a>
        <a class="btn btn-primary btn-lg active m-1" href="EMPLOYEES/employee.php">Nhân viên</a>
    </div>
</body>
</html>