<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
   .fundo{
    background-image: url('../image/erro-windows.png');
    width:100%;
    height:100%;
    background-size:cover;
    margin:0 auto;
}
    </style>

</head>
<body>
<?php


// var_dump($_POST);
if($_POST){
    $name=$_POST["name"];
    $sobrenome=$_POST["sobrenome"];
    $username=$_POST["username"];
    $websitetype=$_POST["type"];
    $pais=$_POST["pais"];
    $estado=$_POST["estado"];
    $postal=$_POST["postal"];
    $password=$_POST["password"];
    $confirmation=$_POST["confirmation"];
    if($password==$confirmation){
    echo "<h1>Registro feito com sucesso</h1>";
    }else{
    echo "<h1> As senhas não coincidem <a href='cadastro.html'>Voltar</a>";
    echo "<div class='fundo'> </div>";
    }
}
?>
</body>
</html>