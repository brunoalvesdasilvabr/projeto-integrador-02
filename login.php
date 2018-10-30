<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="css/login.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Quicksand|Raleway" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Skillancer-Login</title>
  </head>

  <body class="text-center">
    <form class="form-signin" method="post" action="validation_login.php">
      <img class="mb-4" src="image/logo.png" alt="Logo Skillancer" width="140" height="150">
      <h1 class="h2 mb-3 font-weight-bold text-white">Login</h1>
      <label for="inputEmail" class="sr-only">Email</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email" value="<?php echo @$_COOKIE["email"];?>" required autofocus>
      <br>
      <label for="inputPassword" class="sr-only">Senha</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Senha" required>
      <div class="text-right p-t-8 p-b-31">
        <a href="#" class="badge badge-info">Esqueceu a senha?</a>
      </div>
      <div class="checkbox mb-3 text-center">
        <label>
          <input type="checkbox" name="lembrarUsuario" value="remember-me">Lembrar-me
        </label>
      </div>
      <button href='home.html' class="btn btn-lg btn-info btn-block" type="submit"><a>Entrar</a></button>
       <!-- Opção Botão -->
      <!-- <input class="btn btn-lg btn-info btn-block" href="/home.html" type="submit" value="Entrar"> -->
      <!-- <a href="home.html" class="btn btn-lg btn-info btn-block">Entrar</a> -->
      <p class="mt-5 mb-3 text-info">&copy; 2018 Skillancer. &middot; <a>Privacy</a> &middot; <a>Terms</a></p>
    </form>
  </body>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</html>
