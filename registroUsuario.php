
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/style1.css">
    <title>registro usuario </title>
  </head>
  <body>
      <!-- Page Content -->
    <div class="container">
        <div class="card border-0 shadow my-5">
            <div class="card-body p-5">
                <h1 class="font-weight-light">Registro de usuario</h1>
                <p class="lead">
                    <div class="row">
                        <div class="col-sm-12">
                            <form action="servidor/registroUsuario.php" method="POST">
                                
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" name="nombre" id="nombre">

                            <label for="apaterno">Apellido paterno</label>
                            <input type="text" class="form-control" name="apaterno" id="apaterno">
                            
                            <label for="amaterno">Apellido Materno</label>
                            <input type="text" class="form-control" name="amaterno" id="amaterno">

                            <label for="sexo">Sexo</label>
                                <select name="sexo" id="sexo" class="form-control">
                                    <option values=>Selecciona tu sexo</option>
                                    <option values="femenino">Femenino </option>
                                    <option values="masculino">Masculino </option>
                                </select> 
                            
                            <label for="telefono">Telefono</label>
                            <input type="text" class="form-control" name="telefono" id="telefono">

                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email"> 

                            <label for="usuario">Usuario</label>
                            <input type="text" class="form-control" name="usuario" id="usuario"> 

                            <label for="password">password</label>
                            <input type="text" class="form-control" name="password" id="password"> 

                            <br>
                            <hr>
                            <button class="btn btn-lg btn-primary btn-block text-uppercase">Registrar</button>
                            </form>
                            <br>
                            <a href="index.php" class="btn btn-lg btn-info btn-block text-uppercase">Entrar</a>
                        </div>
                    </div>
                    <br>
                </p>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>


