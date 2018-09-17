<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Quicksand|Raleway" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Document</title>
    <style>
    body{
    background-image:url('image/fundo.jpg');
    width:100%;
    height:100%;
    background-size:cover;
    margin:0 auto;
    font-family: 'Montserrat';
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

   width: 50%;
   text-align:center;
   margin: 0 auto;
   margin-top:-10px;
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


</head>
<body>
    <?php
        include 'header.php';
    ?>
    <div class="container text-center">
      <?php
      if ($_POST) {
          $local_file = "usuarios.json";
          if(file_exists($local_file)){
            $file = file_get_contents($local_file);
            $json = json_decode($file, true);
          }else{
            $json = [
              "usuarios" => []
            ];
          }
          $error = [];
          foreach ($_POST as $key => $value) {
            if($value == ""){
              $error[] = "$key em branco!";
            }
          }
          if(!count($error)){
            $json["usuarios"][] = $_POST;
            $file = json_encode($json);
            file_put_contents($local_file, $file);
            }
        }
      // if ($_POST){
      //   $local_arquivo = "usuarios.json";
      //   $arquivo = file_get_contents($local_arquivo);
      //   $arquivo['usuarios'][]= $_POST;
      //   file_put_contents($local_arquivo, $arquivo);
      // }

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
            if($password===$confirmation){

        ?>
            <h1>Olá, <?php echo $name ?>!</h1>
            <h4>O seu registro foi feito com sucesso.</h4>
            <button><a href='home.html'>Clique aqui para encontrar um Dev</a></button></p>

        <?php
            }else{
            echo "<h2> As senhas não coincidem <br>
            <button><a href='cadastro.php'>Voltar</button></a>";
            echo "<div class='fundo'> </div>";
            }
        }
        ?>
        </div>
    <?php
        include 'footer.php';
    ?>
    <?php
if(isset($error) && count($error)){
  echo implode("<br>", $error);
}
?>
</body>
</html>
