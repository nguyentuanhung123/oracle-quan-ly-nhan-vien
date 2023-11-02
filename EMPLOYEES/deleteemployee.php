<?php

    require_once('../conexion.php');
  
    $conex = new Conexion();
    $getConection = $conex->Conectar();
    $manv = $_GET['id'];

    echo $manv;
    try{
        $sql = "DELETE FROM NHANVIEN WHERE manv = '$manv'";
        $stmt = $getConection->prepare($sql);
        $stmt->execute();
        echo "The row has been deleted to the database";
        header('LOCATION: '.'employee.php');    
    }catch(PDOException $e){
        echo "<br> Error !!! No lines have been deleted : <br>".$e->getMessage(). "<br>".$sql;
    }
?>