<?php
session_start();

if(isset($_SESSION["email"])){
    header("Location: ejemplo.php");
}

$email=isset($_POST["correo"])? $_POST["correo"]:'';
$pass=isset($_POST["contra"])? $_POST["contra"]:'';

$emailDB='julio@gmail.com';
$passDB='123';
if($emailDB==$email && $passDB=$pass){
    $_SESSION["email"]=$email;
    header('Location: ejemplo.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>
    <div class="row container">
        <form action="" method="post">

            <div class="col-md-6 mt-2">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="correo">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="col-md-6 mt-2">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="contra">
            </div>

            <button type="submit" class="btn btn-primary ">Submit</button>

        </form>
    </div>
</body>

</html>