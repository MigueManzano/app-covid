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
    <script src="../controllers/controladorRegistroMedico.js"></script>
</head>

<body>

    <main>
        <nav class="light-blue accent-4">
            <ul>
                <li><a href="index.php">REGRESAR</a></li>
            </ul>
            </a>
        </nav>




        <div >
            <div class="container">
                <!-- Formulario -->
                <div class="row">
                    <div class="col s12 m11 offset-m1">
                        <div class="card center-align">
                            <h3 class="">Registro</h3>
                            <div class="row">
                                <div class="input-field col s10 m4 offset-s1 offset-m1">
                                    <i class="material-icons prefix blue-text accent-4-text">face
                                    </i>
                                    <input type="text" id="nombre" name="nombre" class="validate" style="text-transform: capitalize;"
                                        required>
                                    <label for="Nombre">Nombre(s)</label>
                                </div>

                                <!-- Apellido -->
                                <div class="input-field col s10 m4 offset-s1 offset-m1">
                                    <i class="material-icons prefix blue-text accent-4-text">format_color_text
                                    </i>
                                    <input type="text" id="apellidos" name="apellidos" class="validate"
                                        style="text-transform: capitalize;" required>
                                    <label for="Apellidos">Apellidos</label>
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
                                    <a href="https://www.curp-gratis.com.mx/consulta-curp" target="_blank">¿No conoces
                                        tu curp?</a>
                                </div>

                                <!-- Domicilio -->
                                <div class="input-field col s10 m4 offset-s1 offset-m1">
                                    <i class="material-icons prefix blue-text accent-4-text">my_location
                                    </i>
                                    <input type="text" class="validate" id="domicilio" name="domicilio"
                                        style="text-transform: capitalize;" required>
                                    <label for="Domicilio">Domicilio</label>
                                </div>
                            </div>




                            <!-- nacimiento -->
                            <div class="row">
                            <div class="input-field col s10 m4 offset-s1 offset-m1">
                                    <i class="material-icons prefix blue-text accent-4-text">event_available
                                    </i>
                                    <input type="date" id="Fecha" name="Fecha"  required>
                                    <label for="Fecha_Naci">Fecha de Nacimiento</label>
                                </div>
                                

                                <!-- Correo -->
                                <div class="input-field col s10 m4 offset-s1 offset-m1">
                                    <i class="material-icons prefix blue-text accent-4-text">email
                                    </i>
                                    <input type="text" id="email" name="email" class="validate" required>
                                    <label for="Email">Correo</label>
                                </div>
                            </div>



                            <!-- Contraseña -->
                            <div class="row">
                                <div class="input-field col s10 m4 offset-s1 offset-m1">
                                    <i class="material-icons prefix blue-text accent-4-text">lock
                                    </i>
                                    <input type="text" id="password" name="password" class="validate" required>
                                    <label for="Password">Contraseña</label>
                                </div>

                                <!-- Confirma contra -->
                                <div class="input-field col s10 m4 offset-s1 offset-m1">
                                    <i class="material-icons prefix blue-text accent-4-text">lock
                                    </i>
                                    <input type="text" id="password1" name="password1" class="validate" required>
                                    <label for="Password1">Confirmar Contraseña</label>
                                </div>
                            </div>



                            <!-- cedula-->
                            <div class="row">
                            <div class="input-field col s10 m4 offset-s1 offset-m1">
                                    <i class="material-icons prefix blue-text indigo-text">assignment
                                    </i>
                                    <input type="text" id="cedula" name="cedula" class="input-48" required min="8"
                                        maxlenght="13">
                                    <label for="Cedula_Pro">Cedula</label>
                                </div>

                                <!-- Foto de perfil --
                                <div class="file-field input-field col s10 m4 offset-s1 offset-m1">
                                    <div class="btn light-blue accent-4" id="Foto_Perfil">
                                        <span class="" style="border-radius: 10px;">Subir una foto tuya: </span>
                                        <input type="file" name="Foto" id="Foto">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text">
                                    </div>
                                </div-->
                            </div>



                            <!-- Boton de registrar -->
                            <button onclick="registroMedico()" class="btn waves-effect waves-light light-blue accent-4" type="submit" name="btnRegistrar" id="btnRegistrar"
                                style="border-radius: 20px;"> Confirmar
                                <i class="material-icons right">send</i>
                            </button>
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

    });
</script>

<footer>

</footer>

</html>