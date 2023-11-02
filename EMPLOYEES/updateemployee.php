<?php

    require_once('../conexion.php');

    $conex = new Conexion();
    $getConection = $conex->Conectar();

    $manv = $_GET['id'];
    // echo "<br>";
    // echo $manv;


    $sql = "select * from NHANVIEN where manv = '$manv'";
    $stmt = $getConection->prepare($sql);
    $stmt->execute();
  
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        $tennv = $row['tennv'];
        $namsinhnv = $row['namsinhnv'];
        $luongcoban = $row['luongcoban'];
        $thuong = $row['thuong'];
        $chucvunv = $row['chucvunv'];
        $sodienthoainv = $row['sodienthoainv'];
        $mapb = $row['mapb'];
    }


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

    $sql = "UPDATE NHANVIEN
    SET
    manv = '$manv',
    tennv = '$tennv',
    namsinhnv = $namsinhnv,
    luongcoban = $luongcoban,
    thuong = $thuong,
    chucvunv = '$chucvunv',
    sodienthoainv = '$sodienthoainv',
    mapb = '$mapb'
    WHERE manv = '$manv'
    ";

    try{
        $stmt = $getConection->prepare($sql);
        $stmt->execute();
        echo "<br>The row has been updated to the database";
        header('LOCATION: '.'employee.php');
    }catch(PDOException $e){
        echo "<br> Error !!! No lines have been updated : <br>".$e->getMessage(). "<br>".$sql;
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
    <h1>Hello Update</h1>

    <form action="" method="post">
        <input type="text" class="form-control m-3" value="<?php echo $manv; ?>" name="manv" placeholder="insert : MANV">
        <input type="text" class="form-control m-3" value="<?php echo $tennv; ?>" name="tennv" placeholder="insert : TENNV">
        <input type="text" class="form-control m-3" value="<?php echo $namsinhnv; ?>" name="namsinhnv" placeholder="insert : NAMSINHNV">
        <input type="text" class="form-control m-3" value="<?php echo $luongcoban; ?>" name="luongcoban" placeholder="insert : LUONGCOBAN">
        <input type="text" class="form-control m-3" value="<?php echo $thuong; ?>" name="thuong" placeholder="insert : THUONG">
        <input type="text" class="form-control m-3" value="<?php echo $chucvunv; ?>" name="chucvunv" placeholder="insert : CHUCVUNV">
        <input type="text" class="form-control m-3" value="<?php echo $sodienthoainv; ?>" name="sodienthoainv" placeholder="insert : SODIENTHOAINV">
        <select name="mapb" class="form-control m-3">
            <option value="PB01" <?php if($mapb == 'PB01') echo "selected"; ?>>Phòng ban 01</option>
            <option value="PB02" <?php if($mapb == 'PB02') echo "selected"; ?>>Phòng ban 02</option>
            <option value="PB03" <?php if($mapb == 'PB03') echo "selected"; ?>>Phòng ban 03</option>
            <option value="PB04" <?php if($mapb == 'PB04') echo "selected"; ?>>Phòng ban 04</option>
            <option value="PB05" <?php if($mapb == 'PB05') echo "selected"; ?>>Phòng ban 05</option>
        </select>
        <button type="text" class="btn btn-success" name="success" type="submit">UPDATE</button>
    </form>
</body>
</html>