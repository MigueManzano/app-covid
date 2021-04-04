<!DOCTYPE html>
<html lang="en">
<!--kevin quevedo-->
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index</title>
  <!---Archivos materialize-->
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

  <!---Inicializa icons-------->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="../css/index.css">
</head>



<body>
  <main>


    <!-- nabvar -->
    <nav>
      <div class="nav-wrapper light-blue accent-4">
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="Registro_Usuario.html">Registro Usuario</a></li>
          <li><a href="RegistroMedico.html">Registro Médico</a></li>
          <li><a href="Login.php">Iniciar Sesión</a></li>
        </ul>
      </div>
    </nav>

    <!-- Barra deslizante lateral -->

    <ul class="sidenav" id="mobile-demo">
      <li><img src="" alt="">LDC</li>
      <li><a href="Registro_Usuario.html">Registro Usuario</a></li>
      <li><a href="Registro.html">Registro Médico</a></li>
      <li><a href="Login.html">Iniciar Sesión</a></li>
    </ul>

    <!-- Primer slider -->
    <div class="slider">
      <ul class="slides">
        <li>
          <img src="../img/Medico/wash-4934590_1920.jpg" alt="">
          <div class="caption center-align">
          </div>
        </li>

        <!-- Segundo slider -->
        <li>
          <img src="../img/Medico/protective-suit-5716753_1920.jpg" alt="">
          <div class="caption left-align">
          </div>
        </li>


        <!-- Tercer Slider -->
        <li>
          <img src="../img/Medico/covid-19-4940487_1920.jpg" alt="">
          <div class="caption right-align">
          </div>
        </li>

    </div>




    <!-------------------------- Contenedor------------------- -->
    <div class="container">
      <div class="section">
        <!--   Localizacion   -->
        <div class="row">

          <!-- Diagnostico -->
          <div class="col s12 m4">
            <div class="icon-block">
              <h2 class="center light-blue-text accent-4"><i class="material-icons medium">filter_frames</i></h2>
              <h5 class="center">Diagnóstico</h5>
              <p class="justify">¿Crees tener sintomas de Covid-19? Tenemos un cuestionario en el cual tu especificas
                los sintomas que presentas y te damos la probabilidad de padecer la enfermedad.</p>
            </div>
          </div>

          <!-- Localización -->
          <div class="col s12 m4">
            <div class="icon-block">
              <h2 class="center light-blue-text accent-4"><i class="material-icons medium">add_location</i></h2>
              <h5 class="center">Localización</h5>
              <p class="justify">¿Necesitas tanques de oxigeno, cubrebocas, oximetro? Te podemos mostrar localizaciones
                de los productos que necesitas.</p>
            </div>
          </div>

          <!-- Citas -->
          <div class="col s12 m4">
            <div class="icon-block">
              <h2 class="center light-blue-text accent-4"><i class="material-icons medium">storage</i></h2>
              <h5 class="center">Citas</h5>
              <p class="justify">Agenda tu cita con el doctor de manera en linea, así el podra darte un tratamiento de
                acuerdo a la probabilidad de presentar sintomas de Covid-19.</p>
            </div>
          </div>
        </div>
      </div>
    </div>



    <!-- Parallax -->
    <div class="parallax-container">
      <div class="parallax"><img src="../img/Citas/syringe-1884784_1920.jpg"></div>
    </div>


    <!-- Texto siguiente del parallax -->
    <br>

    <!-------------------- Titulo de covid-19----------------- -->
    <div class="center-align">
      <h3 class="justify">¿No sabes donde realizan pruebas de detección de Covid-19?</h3>
    </div>


    <!------------- parrafo inferior---------------- -->
    <div class="container">
      <section>
        <div class="row">
          <div class="col s12 m6">

            <p class="justify" style="font-family: Verdana, Geneva, Tahoma, sans-serif;">Se han instalado 17 módulos de
              toma muestra a personas que presenten síntomas del virus SARS-CoV-02 que provoca la enfermedad de
              Covid-19.</p>
            <br>
            <p class="justify" style="font-family: Verdana, Geneva, Tahoma, sans-serif;">Los módulos se ubican en
              Zócalo, Asta Bandera, La Diana, El Rollo, Plazuela de la Base,
              Crucero de Puerto Marqúes, Plaza Las Palmas en la Colosio, Colonia Jardin, Calzada Pie de la Cuesta,
              Iglesia Mozimba, En la Unidad Deportiva Vicente Suárez, Parque La Laja, Iglesia de la Garita, La Cima (20
              de noviembre),
              Módulo Renacimiento, Módulo Zapata 1 y Módulo Cayaco.</p>

            <!-- Segundo texto -->
            <br>
            <p class="justify" style="font-family: Verdana, Geneva, Tahoma, sans-serif;">La dependencia pide que las
              personas que acudan a estos sitios deben mantener el orden,
              usar cubrebocas y respetar las medidas de sana distancia.
              Los módulos estan operando desde <b>las 10 de la mañana hasta las 2 de tarde.</b></p>
          </div>

          <br>

          <!-- iframe de mapa de localizaciones  -->
          <div class="col s12 m5 offset-m1" id="frame">
            <iframe src="https://www.google.com/maps/d/embed?mid=1l1_AvvkNBdXNc9sJputP3p02U6Mntj0p" id="map"></iframe>
          </div>
        </div>
      </section>
    </div>



    <!-- Footer de la pagina -->
    <footer class="page-footer blue">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            <h5 class="white-text">Company Bio</h5>
            <p class="grey-text text-lighten-4">.</p>

          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container center-align">
          Copyright 2021 © <a class="white-text text-indigo-4" href="">Todos los derechos reservados</a>
        </div>
      </div>
    </footer>
  </main>
</body>



<!------------------------- Scripts--------------------- -->

<!-- Inicializa Slider -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    var elems = document.querySelectorAll('.slider');
    var instances = M.Slider.init(elems,);
  });
</script>

<!-- Inicializa Parallax -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    var elems = document.querySelectorAll('.parallax');
    var instances = M.Parallax.init(elems,);
  });
</script>


<!-- Inicializa sidenav -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems,);
  });
</script>
<!-- Inicializa Preloader -->


</html>