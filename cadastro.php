<?php

$local_arquivo = "cadastro.php";
$arquivo = file_get_contents($local_arquivo);
$arquivo .= "usuarios.json\n";
file_put_contents($arquivo);
 ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Quicksand|Raleway" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


    <title>Cadastro Skillancer</title>

    <!-- Bootstrap core CSS -->

    <!-- Custom styles for this template -->
    <link href="css/cadastro.css" rel="stylesheet">
  </head>

  <body class="bg-light">
    <div class="skill">
    <img class="mb-4" src="image/logo.png" alt=""width="140" height="150">
  </div>
    <div class="container">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h1 class="h1 mb-3 font-weight-bold text-white">Cadastre-se</h2>
      </div>
         <div class="container1">
        <div>
          <form class="needs-validation" action="validation.php" method="POST">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstname=">Nome</label>
                <input type="text" name="name" class="form-control" id="firstname=" placeholder="" value="<?php echo isset($_POST['firstname'])? $_POST['firstname']: '';?>" required>
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastname=">Sobrenome</label>
                <input type="text" name="sobrenome" class="form-control" id="lastname=" placeholder="" value=""<?php echo isset($_POST['firstname'])? $_POST['firstname'] : '';?>"" required>
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="username=">Username</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">@</span>
                </div>
                <input type="text" name="username" class="form-control" id="username" placeholder="Username" value="<?php echo isset($_POST['firstname'])? $_POST['firstname']: '';?>" required>
                <div class="invalid-feedback" style="width: 100%;">
                  Your username is required.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Email <span class="text-muted"></span></label>
              <input type="email" required name="email" class="form-control" id="email" value="<?php echo (isset($_POST['firstname']) ? $_POST['firstname'] : '');?>" placeholder="you@example.com">
              <div class="invalid-feedback">
                Please enter a valid email address.
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Senha </label>
              <input type="password" name="password" class="form-control" id="password" value="" placeholder="eX@mPlE" required>

            </div>
            <div class="mb-3">
              <label for="email">Confirme sua Senha </label>
              <input type="password" name="confirmation" class="form-control" id="confirmation" value="" placeholder="eX@mPlE" required>

            </div>


            <div class="mb-3">
              <label for="state">Tipo de Website</label>
              <select  id="website" name="type" class="form-control" required>
                <option value="">Escolher...</option>
                <option >Educação</option>
                <option >Vestuário</option>
                <option >Food Service</option>

              </select>
            </div>

            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="country">País</label>
                <select name="pais" class="custom-select d-block w-100 form-control" id="country" required>
                  <option value="">Escolher...</option>
                  <option>Brasil</option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid country.
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="state">Estado</label>
                <select name="estado" class="custom-select d-block w-100 form-control" id="state" required>
                  <option value="">Escolher...</option>
                  <option>São Paulo</option>
                </select>
                <div class="invalid-feedback">
                  Please provide a valid state.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="zip">Código-Postal</label>
                <input name="postal" type="text" class="form-control" id="zip" value="<?php echo isset($_POST['firstname'])? $_POST['firstname']: '';?>" placeholder="Código-Postal" required>
                <div class="invalid-feedback">
                  Zip code required.
                </div>
              </div>
            </div>
            <hr class="mb-4">

            <hr class="mb-4">


            <hr class="mb-4">
            <button class="btn btn-info btn-lg btn-block" type="submit">Cadastro</button>
          </form>
        </div>
      </div>
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p style="color: black">&copy; 2018 Skillancer. &middot; <a style="color: black" href="#">Privacy</a> &middot; <a style="color: black" href="#">Terms</a></p>
      </footer>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
usuarios.json
