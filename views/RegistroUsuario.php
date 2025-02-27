<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <!--Jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!---Archivos materialize-->

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!---Inicializa icons-------->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="../controllers/controladorRegistroUser.js"></script>
    
</head>

<body>
    <main>
        <nav class="light-blue accent-4">
            <ul>
                <li><a href="index.php">REGRESAR</a></li>
            </ul>
            </a>
        </nav>

        <div>
            <div class="container">
                <!-- Formulario -->
                <div class="row">
                    <div class="col s12 m11 offset-m1">
                        <div class="card center-align">
                            <h3 class="">Registro</h3>
                                                       
                            <div class="row">

                                <!-- Nombre -->
                                <div class="input-field col s10 m4 offset-s1 offset-m1">
                                    <i class="material-icons prefix blue-text accent-4-text">face
                                    </i>
                                    <!--input type="text" id="nombre" name="nombre" class="validate" style="text-transform: capitalize;"
                                        required>
                                    <label for="nombre">Nombre(s)</label>
                                    <input  type="text" id="Nombre" class="validate" style="text-transform: capitalize;"
                                    title="Ingrese su nombre. Máximo 9 caracteres (solamente letras)" pattern="[a-zA-Z]{1,9}" required-->

                                    <input type="text" name="nombre" id="nombre" class="validate"
                                        style="text-transform: capitalize;"
                                        title="Ingrese su nombre. Máximo 20 caracteres (solamente letras)"
                                        pattern="[a-zA-Z]{1,20}" required>
                                    <label for="Nombre">Nombre(s)</label>
                                </div>

                                <!-- Apellido -->
                                <div class="input-field col s10 m4 offset-s1 offset-m1">
                                    <i class="material-icons prefix blue-text accent-4-text">format_color_text
                                    </i>
                                    <input type="text" id="apellidos" name="apellidos" class="validate"
                                        style="text-transform: capitalize;" required>
                                    <label for="apellidos">Apellidos</label>
                                </div>
                            </div>

                            <!-- Curp -->
                            <div class="row">
                                <div class="input-field col s10 m4 offset-s1 offset-m1">
                                    <i class="material-icons prefix blue-text accent-4-text">lock_outline
                                    </i>
                                    <input type="text" id="curp" name="curp" class="validate" maxlength="18"
                                        style="text-transform: uppercase;" required>
                                    <label for="Curp">Curp</label>
                                    <a href="https://www.gob.mx/curp/" target="_blank">¿No conoces
                                        tu curp?</a>
                                </div>

                                <!-- Domicilio -->
                                <div class="input-field col s10 m4 offset-s1 offset-m1">
                                    <i class="material-icons prefix blue-text accent-4-text">my_location
                                    </i>
                                    <input type="text" class="validate" id="domicilio" name="domicilio"
                                        style="text-transform: capitalize;" required>
                                    <label for="domicilio">Domicilio</label>
                                </div>
                            </div>

                            <!-- fecha de Nacimiento -->
                            <div class="row">

                                <div class="input-field col s10 m4 offset-s1 offset-m1">
                                    <i class="material-icons prefix blue-text accent-4-text">event_available
                                    </i>
                                    <input type="date" id="Fecha" name="Fecha"  required>
                                    <label for="Fecha">Fecha de Nacimiento</label>
                                </div>

                                <!-- Correo -->
                                <div class="input-field col s10 m4 offset-s1 offset-m1">
                                    <i class="material-icons prefix blue-text accent-4-text">email
                                    </i>
                                    <!--input type="text" id="email" name="email" class="validate" required>
                                    <input type="text" id="email" class="validate" required name="clien-email" maxlength="50" title="Ingrese un correo valido."-->

                                    <input type="text" name="textCorreo" id="email" class="validate" required
                                         maxlength="50" title="Ingrese un correo valido.">

                                    <label for="email">Correo</label>
                                </div>
                            </div>

                            <!-- Contraseña -->
                            <div class="row">
                                <div class="input-field col s10 m4 offset-s1 offset-m1">
                                    <i class="material-icons prefix blue-text accent-4-text">lock
                                    </i>
                                    <!--input type="password" id="password" name="password" class="validate" required>
                                    <label for="password">Contraseña</label>
                                    <input type="text" id="password" class="validate" required-->
                                    <input type="text" name="textContra" id="password" class="validate" required>
                                    <label for="password">Contraseña</label>
                                </div>

                                <!-- Confirma contra -->
                                <div class="input-field col s10 m4 offset-s1 offset-m1">
                                    <i class="material-icons prefix blue-text accent-4-text">lock
                                    </i>
                                    <input type="password" id="password1" class="validate" required>
                                    <label for="password">Confirmar Contraseña</label>
                                    
                                    
                                </div>
                            </div>

                            <!--div class="row">
                                <!- Foto de perfil ->
                                    <input type="text" name="textContra2" id="Password1" class="validate" required>
                                    <label for="Password1">Confirmar Contraseña</label>
                                </div>
                            </div-->

                            <!-- <div class="row">

                                <!-Foto de perfil -- >
>>>>>>> 2a50a3e60878fa1afa79d6040fc918ea253c6586:views/RegistroUsuario.php
                                <div class="file-field input-field col s10 m4 offset-s1 offset-m1">
                                    <div class="btn light-blue accent-4" id="Foto_Perfil">
                                        <span class="" style="border-radius: 10px;">Subir una foto tuya: </span>
                                        <input type="file" name="txtfoto" id="Foto">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text">
                                    </div>
                                </div>

                                
                            </div>
                            

                            <-- a href="index.html"-->

                            <!-- Boton de registrar -->
                            <button id="btnRegistrar" name="btnRegistrar" class="btn waves-effect waves-light light-blue accent-4" onclick="$(this).attr('disabled',true);registrar()" style="border-radius: 20px;"></a> Confirmar
                                <i class="material-icons right">send</i>
                                </a></button>
                            <div name="resultado" id="resultado"></div>

                            <br><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
</body>

<!-- Script del calendario en español -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var elems = document.querySelectorAll('.datepicker');
        var instances = M.Datepicker.init(elems, {
            showClearBtn: false,
            firstDay: 1,
            yearRange: [1940, 2003],
            i18n: {
                months: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                monthsShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
                weekdays: ['Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado'],
                weekdaysShort: ['Dom', 'Lun', 'Mar', 'Mier', 'Jue', 'Vier', 'Sab'],
                weekdaysAbbrev: ['D', 'L', 'M', 'M', 'J', 'V', 'S']
            }
        })

        //------------------------------Timepicker--------------------------------//
        var elems = document.querySelectorAll('.timepicker');
        var instances = M.Timepicker.init(elems, {
            showClearBtn: false,
            onOpenStart: true,
        })
        /******select*****
        var elems = document.querySelectorAll('select');
        var instances = M.FormSelect.init(elems, options);*/

    });
</script>

<footer>

</footer>
</html>
<script>
    $(document).ready(function(){
    $('select').formSelect();
  });
  
  

</script>
