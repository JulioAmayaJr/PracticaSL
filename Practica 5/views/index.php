<?php
require 'constantes.php';
$css= CDN_BS_CSS; 
$js= CDN_BS_JS;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
<?= $css?>
<?= $js?>

</head>

<body>
    <h3> Ingresar a especies</h3>
    <form action="views/especies/index-especies.php" method="post">
        <button type="submit">Ingresar</button>
    </form>

    <h3> Ingresar a razas</h3>
    <form action="views/razas/index-especies.php" method="post">
        <button type="submit">Ingresar</button>
    </form>
</body>
</html>