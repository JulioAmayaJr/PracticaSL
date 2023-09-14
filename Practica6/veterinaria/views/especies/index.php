<?php
require '../../db/db.php';
require '../../constantes.php';
$css = CDN_BS_CSS;
$js = CDN_BS_JS;
$query = "SELECT * FROM tbl_especies";
$ejecutar = $conn->prepare($query);
$ejecutar->execute();
$data = $ejecutar->fetchAll(PDO::FETCH_OBJ);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?= $css?>
    <?= $js?>
</head>
<body>
    
    <div class="container">
        <div class="row">
        <div class="col-md-10">
        <h1>Listado de especies</h1>
        </div>
    
        <div class="col-md-2">
            <a href="">Crear</a>
        </div>
        </div>
    <div class="card">
        <div class="card-geader bg-primary">
        <h3 class="text-white">Listado de especies</h3>
    </div>

    <div class="card-body">
        <table>
            <thead>
                <th>Nombre: </th>
                <th>Estado: </th>
                <th>Fecha creacion: </th>
                <th>Acciones</th>
            </thead>
            <tbody>
                <?php
                foreach($data as $especie){
                ?>
                <tr>
                    <td><?=$especie->nombre?></td>
                    <td><?=$especie->estado?></td>
                    <td><?=$especie->fecha?></td>
                    <td>
                    <button>Editar</button>
                    <button>Eliminar</button>
                    </td>
                </tr>
                <?php
                } 
                ?>

            </tbody>
        </table>
    </div>
        </div>
    </div>
    
</body>
</html>