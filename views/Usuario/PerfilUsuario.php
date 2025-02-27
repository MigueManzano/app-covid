<?php
    session_start();
   if(!isset($_SESSION['correo']))
        header("location:../Login.php");
    include("perfil.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!---Archivos materialize-->

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!---Inicializa icons-------->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="../../controllers/controladorPerfil.js"></script>

    <!-- Titulo de la ventana -->
    <title>Perfil</title>
</head>

<body>


    <nav class="light-blue accent-4">
        <!-- navbar content here  -->
        <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </nav>

    <!-- Barra desplegable -->
    <ul id="slide-out" class="sidenav sidenav-fixed ">
        <li>
            <div class="user-view">
                <div class="background">
                </div>
                <!-- Imagen usuario -->
                <a href="#user"><img class="circle" src="../../resource/img/Medico/doctor-2346235_1280.jpg"></a>
            </div>
        </li>
        <br>

        <div class="center-align">
            <a  class="black-text  "><?=$_SESSION['nombre'];?></a>
            <a  class="black-text "><?=$_SESSION['apellidos'];?></a>
        </div>

        <li>
            <div class="divider"></div>
        </li>
        <li><a href="../Usuario/Inicio.php"><i class="material-icons light-blue-text accent-4-text small">cloud</i>
                Inicio</a>
        </li>
        <li><a class="waves-effect" href="../Usuario/PerfilUsuario.html">Perfil<i
                    class="material-icons light-blue-text accent-4-text small">assignment_ind</i></a></li>
        <li><a class="waves-effect" href="../Usuario/Diagnostico.php">Diagnóstico<i
                    class="material-icons light-blue-text accent-4-text small">filter_frames</i></a></li>
        <li><a class="waves-effect" href="../Usuario/Localizacion.html">Localización<i
                    class="material-icons light-blue-text accent-4-text small">pin_drop</i></a></li>
        <li><a class="waves-effect" href="../Usuario/Citas.html">Citas<i
                    class="material-icons light-blue-text accent-4-text small">storage</i></a></li>
        <li><a class="waves-effect" href="../Usuario/Videollamada.html">Videollamadas<i
                    class="material-icons light-blue-text accent-4-text small">video_call</i></a></li>
        <li><a class="waves-effect" href="../models/cerrar.php">Cerrar Sesión<i
                    class="material-icons light-blue-text accent-4-text small">keyboard_tab</i></a></li>
    </ul>

    <br>


    <!-- Contenedor principal -->
    <main>
        <div class="container">
            <section>
                <div class="row">
                    <div class="col s12 m11 offset-m2">
                        <div >
                            <div class="row">
                                <div class="card horizontal">
                                    <div class="card-image">
                                        <!-- Card donde va la imagen -->
                                        <img src="../../resource/img/Citas/human-digestive-system-163714_1280.jpg" alt="" id="Foto"
                                            class="responsive-img" width="270px" height="180px">

                                        <!-- Boton para cambiar la imagen ->

                                        <div class="file-field input-field">
                                            <div class="btn light-blue accent-4" id="foto">
                                                <span class="">Cambiar foto de perfil:</span>
                                                <input type="file" name="archivo" id="archivo">
                                            </div>
                                            <div class="file-path-wrapper">
                                                <input class="file-path validate" type="text">
                                            </div>

                                        </div-->

                                        <!-- Contraseña ->
                                        <b style="font-family: 'Times New Roman', Times, serif;">Contraseña</b>
                                        <input type="text" name="Password" id="Password" class="materialize-textarea"-->

                                        <b>Correo</b>
                                        <input type="text" name="Correo" id="Correo" value="<?=$correo;?>" class="materialize-textarea" disabled>
                                        <!-- Fecha de Nacimiento -->
                                        <b style="font-family: 'Times New Roman', Times, serif;">Fecha de Nacimiento</b>
                                        <input type="date" name="Fecha" id="Fecha" value="<?=$fecha;?>" disabled>

                                    </div>

                                    <!-- Comienza formulario  -->
                                    <div class="card-stacked">
                                        <div class="card-content" style="font-family: 'Times New Roman', Times, serif;">
                                            <b>Nombre</b>
                                            <input type="text" name="Nombre" id="Nombre" value="<?=$nombre;?>" class="materialize-textarea"
                                                style="text-transform: capitalize;" disabled>
                                            <b>Apellidos</b>
                                            <input type="text" name="Apellidos" id="Apellidos"
                                                class="materialize-textarea" value="<?=$apellido;?>" style="text-transform: capitalize;" disabled>
                                            <b>Curp</b>
                                            <input type="text" name="Curp" id="Curp" value="<?=$curp;?>" class="materialize-textarea" no
                                                disabled>
                                           
                                            <b>Domicilio</b>
                                            <input type="text" name="Domicilio" id="Domicilio" value="<?=$domicilio;?>"
                                                class="materialize-textarea" disabled>
                                            <br>
                                            <div class="card-action center">
                                                <button type="submit"
                                                    class="btn waves-effect waves-light light-blue accent-4" name="btnperfil"
                                                    id="btnperfil" style="border-radius: 25px;" onclick="editar()">Editar
                                                </button>
                                            </div>
                                            <div id="resultado" name="resultado"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="divider light-blue accent-4"></div>

        <!-- seccion de cuestionarios realizados -->

        <section>
            <div class="container">
                <div class="row">
                    <form action="">
                        <div class="col s12 m5 offset-m5">
                            <h4 class="center-align" style="font-family: 'Times New Roman', Times, serif">
                                Cuestionarios</h4>
                        </div>
                        <div class="col s12 m4 offset-m2">
                            <div class="card">
                                <div class="card-image">
                                    <img
                                        src="../../resource/img/cuestionario-forma-prueba-lista-de-control-concepto-la-encuesta-vector-aislado-dibujado-mano-131423865.jpg">
                                </div>
                                <div class="card-content">
                                    <span class="card-title black-text center-align">Cuestionario</span>
                                    <br>
                                    <p>Cuestionario: </p>
                                    <br>
                                    <p>Fecha: </p>
                                </div>
                                <!-- Boton ver cuestionario-->
                                <div class="card-action center">
                                    <button class="btn waves-effect waves-light light-blue accent-4">
                                        <a href="VerCuestionario.html" class="white-text">Ver cuestionario</button> </a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>


        <!--Seccion de Pruebas  -->
        <div class="divider light-blue accent-4"> </div>
        <section>
            <div class="container">
                <div class="row">
                    <form action="">
                        <div class="col s12 m5 offset-m5">
                            <!-- Titulo de la seccion -->
                            <h4 class="center-align" style="font-family: 'Times New Roman', Times, serif">
                                Pruebas realizadas
                            </h4>
                        </div>

                        <section>
                            <!-- Card de pruebas -->
                            <div class="col s12 m3 offset-m2">
                                <div class="left">
                                    <div class="card">
                                        <div class="card-image">
                                            <img src="../../resource/img/80762027-tubos-de-análisis-médicos-a-la-prescripción-de-biología.jpg"
                                                alt="">
                                        </div>
                                        <!-- Contenido de la card -->
                                        <div class="card-content">
                                            <br>
                                            <p>Nombre del archivo: </p>
                                            <br>
                                            <p>Descripción: </p>
                                            <br>

                                            <!-- Boton ver cuestionario-->
                                            <div class="card-action">
                                                <button class="btn waves-effect waves-light light-blue accent-4">
                                                    <a href="" class="white-text">Ver
                                                        cuestionario</button> </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Boton modal para subir documento -->
                            <div class="row">
                                <div class="right">
                                    <div class="col s12 m12 offset-m2">
                                        <a class="waves-effect waves-light light-blue accent-4 btn modal-trigger"
                                            href="#modal1" style="border-radius: 25px;"> Subir documento </a>
                                    </div>
                                </div>
                            </div>
                        </section>


                        <!-- Modal Structure -->
                        <div id="modal1" class="modal">
                            <div class="modal-content">
                                <h4 class="center-align" style="font-family: 'Times New Roman', Times, serif;">Subir
                                    análisis</h4>
                                <!-- Contenido del modal -->
                                <div class="col s12 m6 offset-m3">
                                    <div class="input-field">
                                        <input type="text" name="Nombre" id="Nombre">
                                        <label for="Nombre">Nombre</label>
                                    </div>

                                    <!-- campo Descripcion -->
                                    <div class="input-field">
                                        <input type="text" name="descripcion" id="descripcion">
                                        <label for="descripcion">Descripción</label>
                                    </div>

                                    <!-- Subir foto -->
                                    <div class="file-field input-field ">
                                        <div class="btn light-blue accent-4" id="Foto_Perfil">
                                            <span class="" style="border-radius: 10px;">Subir foto: </span>
                                            <input type="file" name="Foto" id="Foto">
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input class="file-path validate" type="text">
                                        </div>
                                    </div>

                                    <!-- Boton guardar -->
                                    <div class="center-align">
                                        <a href="" class="modal-close waves-effect waves-green btn light-blue accent-4"
                                            style="border-radius: 25px;">Guardar</a>

                                    </div>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <!-- Seccion de nueva publicacion -->
        <div class="divider light-blue accent-4"></div>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col s12 m5 offset-m5">
                        <!-- Titulo de la seccion -->
                        <h4 class="center-align" style="font-family: 'Times New Roman', Times, serif">
                            Nueva Publicación
                        </h4>
                    </div>
                </div>
            </div>


            <!--  -->
            <!-- Contenedor -->
            <div class="container">
                <div class="row">
                    <div class="col s12 m8  offset-m2">
                        <div class="row">
                            <form class="">

                                <!-- Card -->
                                <section>
                                    <div class="row">
                                        <div class="col s12 m4 offset-m1">
                                            <div class="row">
                                                <div class="card">
                                                    <div class="card-image">
                                                        <img src="../../resource/img/productos/tanque-oxigeno-web.jpg" alt=""
                                                            class="responsive-img" width="8px" height="270px">
                                                    </div>
                                                    <div class="card-content">
                                                        <p>Nombre:</p>
                                                        <p>Ubicación: </p>
                                                        <p>Fecha de publicación: </p>
                                                    </div>
                                                        <div class="card-action">
                                                            <button class="btn waves-effect waves-light light-blue accent-4"> 
                                                                <a href="../Usuario/VerPublicacion.html" class="white-text">Ver Publicación</button></a> 
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </div>
    </main>



    <!-----Inicializa sidenav------>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var elems = document.querySelectorAll('.sidenav');
            var instances = M.Sidenav.init(elems,);
        });

    </script>

    <!-- inicializa modal -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var elems = document.querySelectorAll('.modal');
            var instances = M.Modal.init(elems,);
        });

        // Or with jQuery

        $(document).ready(function () {
            $('.modal').modal();
        });
    </script>


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

</body>

</html>