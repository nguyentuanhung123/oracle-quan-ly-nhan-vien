<?php

    require_once('../conexion.php');

    $conex = new Conexion();
    $getConection = $conex->Conectar();

    $sql = "select * from NHANVIEN";
    $stmt = $getConection->prepare($sql);
    $stmt->execute();
    $primeraVez = true;
    echo "<br>";
    // echo "<br>";

    // while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    //     // echo $row["tennv"]."<br>";
    //     foreach($row as $key=> $value){
    //         echo $key." __ ".$value."<br>";
    //     }
    //     echo '==============================<br>';
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
    <h1>Hello Employee</h1>

    <div class="container">
        <a href="insertemployee.php" class="btn btn-warning">Add</a>
        <table class="table table-success table-striped m-5">
            <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                if($primeraVez){
                    ?>
                    <thead>
                        <tr>
                            <?php
                                foreach($row as $key=> $value){
                                    echo '<th scope="col">' .$key. '</th>';
                                }
                                $primeraVez = false;
                }

                ?>
                               
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
                                foreach($row as $key=> $value){
                                    echo "<td>$value</td>";
                                }
                            ?>
                            <td><a href="updateemployee.php?id=<?php echo $row["manv"] ?>" class="btn btn-success">UPDATE</a></td>
                            <td><a href="deleteemployee.php?id=<?php echo $row["manv"] ?>" class="btn btn-danger">DELETE</a></td>
                        </tr>
                    </tbody>
                <?php } ?>
        </table>
        <?php
           echo '<h1>Hello php</h1>'
        ?>
    </div>
</body>
</html>