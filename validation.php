<<<<<<< HEAD
=======
<?php session_start(); ?>

>>>>>>> 1b085d0650e767edd91dcfb3825356b71b288f3b
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
<<<<<<< HEAD
=======
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Quicksand|Raleway" rel="stylesheet">
>>>>>>> 1b085d0650e767edd91dcfb3825356b71b288f3b
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Document</title>
    <style>
    body{
    background-image:url('image/fundo.jpg');
    width:100%;
    height:100%;
    background-size:cover;
    margin:0 auto;
<<<<<<< HEAD
    font-family: 'Raleway', sans-serif;
=======
    font-family: 'Montserrat';
>>>>>>> 1b085d0650e767edd91dcfb3825356b71b288f3b
    color:white;

}
button{
    background-color:#50a3b8;
   border-radius:30px;
    border:0;
    padding: 10px;
}
h2{
    text-shadow: 2px white;
<<<<<<< HEAD
 
=======

>>>>>>> 1b085d0650e767edd91dcfb3825356b71b288f3b
   width: 50%;
   text-align:center;
   margin: 0 auto;
   margin-top:-10px;
<<<<<<< HEAD
   font-family: 'Raleway', sans-serif;
   text-align:justify;
  
}
h1{
    text-align: center;
    font-family: 'Raleway', sans-serif;
    
   
}
a{
   color:black;
}
a:hover{
    color:black;
  
}
.skill{
  
  width: 100%;
  text-align: center;
} 
.container{
    margin-top:70px;
}
</style>
=======
   font-family: 'Montserrat';
   text-align:justify;

}
h1{
    text-align: center;
    font-family: 'Montserrat';


}
a{
   color:white;
}
a:hover{
    color:white;

}
.skill{

  width: 100%;
  text-align: center;
}
.container{
    margin-top:250px;
}
</style>


>>>>>>> 1b085d0650e767edd91dcfb3825356b71b288f3b
</head>
<body>
    <?php
        include 'header.php';
    ?>
    <div class="container text-center">
<<<<<<< HEAD
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
        ?>
            <h1>Olá, <?php echo $name ?>!</h1> 
            <h2>O seu registro feito com sucesso.
            <div class='skill'>
                <img class='mb-4' src='image/logo.png' alt=''width='140' height='150'>
            </div>
        <p> Você já pode procurar por algum desenvolvedor para o seu tipo de website <u><?php echo $websitetype ?></u>.
            Seu username é <?php echo $username ?>.</h2><button><a href='home.html'>Clique aqui para encontrar um Dev</a></button></p>
        <?php
            }else{
            echo "<h1> As senhas não coincidem <br>
            <button><a href='cadastro.html'>Voltar</button></a>";
            echo "<div class='fundo'> </div>";
            }
        }
        ?>
        </div>
=======
        <h1>Olá, <?php echo $_SESSION['nome_usuario']; ?>!</h1>
        <h4>O seu registro foi feito com sucesso.</h4>
        <button><a href='home.html'>Clique aqui para encontrar um Dev</a></button></p>
    </div>
>>>>>>> 1b085d0650e767edd91dcfb3825356b71b288f3b
    <?php
        include 'footer.php';
    ?>
</body>
<<<<<<< HEAD
</html>
=======
</html>
>>>>>>> 1b085d0650e767edd91dcfb3825356b71b288f3b
