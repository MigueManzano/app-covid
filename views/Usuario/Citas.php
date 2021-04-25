<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!---Archivos materialize-->
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!---Inicializa icons-------->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="../../controllers/controladorCitas.js"></script>
    <title>Citas</title>
</head>
<?php
    include('../../models/medicosCitas.php');
?>

<body id="body" name="body">
    <main>
        <nav class="light-blue accent-4">
            <!-- navbar content here  -->
            <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </nav>

        <ul id="slide-out" class="sidenav sidenav-fixed ">
            <li>
                <div class="user-view">
                    <div class="background">
                        <img src="">
                    </div>
                    <a href="#user"><img class="circle" src="../../resource/img/Medico/doctor-2346235_1280.jpg"></a>
                </div>
            </li>
            <br>

            <div class="center-align">
                <a href="#name"><span class="black-text name ">Nombre</span></a>
                <a href="#email"><span class="black-text email">Apellidos</span></a>
            </div>

            <li>
                <div class="divider"></div>
            </li>
            <li><a href="../Usuario/Inicio.html"><i class="material-icons light-blue-text accent-4-text small">cloud</i>
                    Inicio</a>
            </li>
            <li><a class="waves-effect" href="../Usuario/PerfilUsuario.html">Perfil<i
                        class="material-icons light-blue-text accent-4-text small">assignment_ind</i></a></li>
            <li><a class="waves-effect" href="../Usuario/Diagnostico.html">Diagnóstico<i
                        class="material-icons light-blue-text accent-4-text small">filter_frames</i></a></li>
            <li><a class="waves-effect" href="../Usuario/Localizacion.html">Localización<i
                        class="material-icons light-blue-text accent-4-text small">pin_drop</i></a></li>
            <li><a class="waves-effect" href="../Usuario/Citas.html">Citas<i
                        class="material-icons light-blue-text accent-4-text small">storage</i></a></li>
            <li><a class="waves-effect" href="../Usuario/Videollamada.html">Videollamadas<i
                        class="material-icons light-blue-text accent-4-text small">video_call</i></a></li>
            <li><a class="waves-effect" href="../../View/index.html">Cerrar Sesión<i
                        class="material-icons light-blue-text accent-4-text small">keyboard_tab</i></a></li>
        </ul>

        <!-- contenedor -->
        <div class="container">
            <div class="row">
                <div class="col s8 m9 offset-s2 offset-m4">
                    <form action="">
                        <div class="row">
                            <h4
                                style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">
                                Agenda el día de tu cita</h4>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Contenedor del dia de la cita, hora y modal -->

        <div class="container">
            <div class="row">
                <form action="">
                    <div class="col s12 m4 offset-m2">
                        <div class="input-field">
                            <i class="material-icons prefix blue-text accent-2-text">person</i>
                            <select name="medico" id="medico" onchange="medi()" >
                                <option value="" disabled selected>MEDICOS DISPONIBLES: </option>
                                <?php
                                    foreach ($medicosCat as $i => $med){
                                    ?>
                                    <option value= "<?php echo $med->id; ?>" 
                                        id='<?=$med->id;?>'
                                        data-id='<?=$med->id;?>'
                                        data-nombre='<?=$med->nombre;?>'
                                        data-apellido='<?=$med->apellido;?>'><?=utf8_encode($med->nombre); ?></option>
                                    <?php
                                    };
                                ?>

                            </select>
                        </div>
                    </div>
                    <div class="col s12 m3 offset-m2">
                        <div class="input-field">
                            <i class="material-icons prefix blue-text accent-4-text">event_available
                            </i>
                            <input type="date" min="<?=$fecha;?>" required disabled id="fecha" name="fecha">
                            <label for="Fecha_Naci">Día de la cita</label>
                        </div>
                    </div>

                    <!-- Eleccion del dia para consulta -->
                    <div class="col s12 m3 offset-m2">
                        <div class="input-field" >
                            <i class="material-icons prefix blue-text accent-4-text">access_time</i>
                            
                            <select id="horario" name="horario" onchange="boton()" >
                            <option value="" disabled selected>ELIGE LA HORA: </option>
                            <?php
                                    foreach ($horario as $i => $hor){
                                    ?>
                                    <option value= "<?php echo $hor->id; ?>" name='<?="h-" , $hor->id;?>'
                                        id='<?="h-" , $hor->id;?>'
                                        data-id='<?=$hor->id;?>'
                                        data-nombre='<?=$hor->descripcion;?>' ><?=utf8_encode($hor->descripcion); ?></option>
                                    <?php
                                    };
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col s12 m2 offset-m1 offset-s3">
                            <br>
                            <button class="btn waves-effect waves-light light-blue accent-4 modal-trigger"
                            data-target="modal1" type="submit" name="aceptar" id="aceptar" style="border-radius: 20px;" onclick="agregar()" disabled>Aceptar</button>
                        </div>
                    </div>


                    <!-- modal -->
                    <div class="container">
                        <div class="row">
                            <div class="col s12 m8 offset-s1 offset-m2">
                                <div id="modal1" name="modal1" class="modal">
                                    <div class="modal-content">
                                        <h5 class=""
                                            style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">
                                            Ahora copia
                                            este código y
                                            dirigete a la sección de Videollamadas
                                            para pegar el código y se te brinde el acceso.</h5>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="#!" class="modal-close waves-effect waves-green btn-float left">Código:
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <h4
                                    style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">
                                    DATOS DEL MEDICO</h4>
                            </div>
                            <!-- Card -->
                            <section>
                                <div class="row">
                                    <div class="col s12 m12 offset-m2">
                                        <div class="row">
                                            <div class="card horizontal">
                                                <div class="card-image">
                                                    <img src="../../resource/img/doctor/retrato-femenino-doctor-pasillo-hospital_53419-7869.jpg"
                                                        alt="" class="responsive-img" width="8px" height="270px">
                                                </div>
                                                <div class="card-content">
                                                    <p id="nombreMed" name="nombreMed">Nombre:</p>
                                                    <br>
                                                    <p id="apellidoMed" name="apellidoMed">Apellido:</p>
                                                    
                                                    <br>
                                                    <p>Hora de la cita: </p>
                                                    <br>
                                                    <p>Fecha de Cita: </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>


    <!-----Inicializa sidenav------>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var elems = document.querySelectorAll('.sidenav');
            var instances = M.Sidenav.init(elems,);
        });

    </script>
    <!-- Script para selección  -->

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var elems = document.querySelectorAll('select');
            var instances = M.FormSelect.init(elems,);
        });

        // Or with jQuery

        //$(document).ready(function () {
          //  $('horario').formSelect();
        //});
    </script>

    <!-- Script del calendario en español -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var elems = document.querySelectorAll('.datepicker');
            var instances = M.Datepicker.init(elems, {
                showClearBtn: false,
                firstDay: 1,
                yearRange: [2020, 2021],
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



    <!-- Inicializa modal -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var elems = document.querySelectorAll('.modal');
            var instances = M.Modal.init(elems);
        });

        // Or with jQuery

        /*$(document).ready(function () {
            $('.modal').modal();
        });*/
    </script>
</body>

</html>