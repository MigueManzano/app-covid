<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!---Archivos materialize-->

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!---Inicializa icons-------->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="../controllers/controladorlogin.js"></script>
</head>


<body>
    <main>

        <nav class="light-blue accent-4"></nav>
        <br><br>

        <div class="container">
            <div class="row">
                <div class="col s12 m8 offset-m2">
                    <div class="card center-align">
                        <h3>Iniciar Sesión</h3>
                        <div class="row">
                            <div class="input-field col s10 m8 offset-s1 offset-m2">
                                <i class="material-icons prefix blue-text accent-4-text">email</i>
                                <input type="email" class="validate" id="correo" name="correo">
                                <label for="email">Correo </label>
                            </div>
                        </div>

                        <!-- Contraseña -->
                        <div class="row">
                                <div class="input-field col s10 m8 offset-s1 offset-m2">
                                    <i class="material-icons prefix blue-text accent-4-text">lock</i>                               
                                    <input type="text" class="validate" id="password" name="password">
                                    <label for="password">Contraseña</label>
                                </div>
                        </div>

                        <button onclick="$(this).attr('disabled',true);logearse()" class="btn waves-effect waves-light light-blue accent-4" type="submit" name="iniciar" id="iniciar" style="border-radius: 15px;"><a class="white-text">Ingresar</a>
                            <i class="material-icons right">send</i>
                        </button>
                        <br><br>
                        <div  style="text-align: center">
                            <a href="RegistroUsuario.php">¿No tienes cuenta aun?</a>
                        </div>
                        <div name="resultado" id="resultado"></div>
                        <br><br><br>
                    </div>       
                </div>
            </div>
        </div>

    </main>

    

    <footer>

    </footer>
</body>

</html>