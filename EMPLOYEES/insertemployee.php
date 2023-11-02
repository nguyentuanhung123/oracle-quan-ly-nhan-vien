<?php

  require_once('../conexion.php');

  $conex = new Conexion();
  $getConection = $conex->Conectar();

  if(isset($_POST['success'])){
    $manv = $_POST['manv'];
    $tennv = $_POST['tennv'];
    $namsinhnv = $_POST['namsinhnv'];
    $luongcoban = $_POST['luongcoban'];
    $thuong = $_POST['thuong'];
    $chucvunv = $_POST['chucvunv'];
    $sodienthoainv = $_POST['sodienthoainv'];
    $mapb = $_POST['mapb'];

    echo " 
       <br> -- $manv
       <br> -- $tennv
       <br> -- $namsinhnv
       <br> -- $luongcoban
       <br> -- $thuong
       <br> -- $chucvunv
       <br> -- $sodienthoainv
       <br> -- $mapb
    ";

    $sql = "insert into NHANVIEN(manv,tennv,namsinhnv,luongcoban,thuong,chucvunv,sodienthoainv,mapb) values('$manv','$tennv',$namsinhnv, $luongcoban, $thuong, '$chucvunv', '$sodienthoainv','$mapb')";
    try{
        $stmt = $getConection->prepare($sql);
        $stmt->execute();
        echo "<br>The row has been added to the database";
        header('LOCATION: '.'employee.php');

    }catch(PDOException $e){
        echo "<br> Error !!! No lines have been added : <br>".$e->getMessage(). "<br>".$sql;
    }
  }

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
    <h1>Hello Insert</h1>

    <form action="" method="post">
        <input type="text" class="form-control m-3" name="manv" placeholder="insert : MANV">
        <input type="text" class="form-control m-3" name="tennv" placeholder="insert : TENNV">
        <input type="text" class="form-control m-3" name="namsinhnv" placeholder="insert : NAMSINHNV">
        <input type="text" class="form-control m-3" name="luongcoban" placeholder="insert : LUONGCOBAN">
        <input type="text" class="form-control m-3" name="thuong" placeholder="insert : THUONG">
        <input type="text" class="form-control m-3" name="chucvunv" placeholder="insert : CHUCVUNV">
        <input type="text" class="form-control m-3" name="sodienthoainv" placeholder="insert : SODIENTHOAINV">
        <select name="mapb" class="form-control m-3">
            <option value="PB01">Phòng ban 01</option>
            <option value="PB02">Phòng ban 02</option>
            <option value="PB03">Phòng ban 03</option>
            <option value="PB04">Phòng ban 04</option>
            <option value="PB05">Phòng ban 05</option>
        </select>
        <button type="text" class="btn btn-success" name="success" type="submit">INSERT</button>
    </form>
</body>
</html>