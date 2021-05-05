function logearse(){
    var correo=$("#correo").val();
    var contra=$("#password").val();
    if(correo === '' || contra ===''){
      $("#resultado").html("Todos los campos son obligatorios");
      $("#iniciar").attr('disabled',false);
    }
    else{
      //var pass=hex_md5(contra);
      var parametros = {
        correo : correo,
        contra : contra
      };
      $.ajax({
        data:  parametros,
        url:   '../models/loginModel.php',
        type:  'post',
        beforeSend: function () {
          $('#iniciar').val("Conectando...");
        },
        success:  function (data) {
          $('#iniciar').val('Iniciar');
         if(data=="1"){
            $("#resultado").html("Iniciando sesion...");
            
            //alert(data);
            location.href='../views/Usuario/PerfilUsuario.php';
          }
          else{
            $("#resultado").html("El usuario y/o la contraseña esta mal.....");
            $("#iniciar").attr('disabled',false);
          }
        },
        error: function(){
          alert("No se establecio comunicacion con el servidor.");
          $("#iniciar").attr('disabled',false);
        }
      });
    }
  }