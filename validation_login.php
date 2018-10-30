<?php
  session_start();
  if (isset($_POST['email']) && isset($_POST['senha'])) {
    $usuario =($_POST['email']);
		$senha =($_POST['senha']);

    if(isset($_POST['lembrarUsuario'])) {
      setcookie("email", $_POST ["email"]);
    }else{
      setcookie('email', '', time()-3600);
         }
     header('location:\projeto-integrador-02\home.html');

  } else {
    $_SESSION['loginErro'] = "Usuário ou senha inválidos";
    header("location: login.php");
  }
?>
