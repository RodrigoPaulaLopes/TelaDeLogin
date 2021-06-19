<?php

if(isset($_POST['email']) && !empty($_POST['email'])
 && isset($_POST['senha']) && !empty($_POST['senha'])){
    
    require('database.php');
    require('usuario.php');
    $usuario = new Usuario();
    $email = addSlashes($_POST['email']);
    $senha = addSlashes($_POST['senha']);

    $usuario->login($email, $senha);
}else{
    header("location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Logado</title>
</head>
<body>
    <div class="erro">Logado com sucesso</div>
</body>
</html>