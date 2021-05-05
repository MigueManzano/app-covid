function editar(){
    /*$("#Correo").attr('disabled',false);*/
    $("#Fecha").attr('disabled',false);
    $("#Nombre").attr('disabled',false);
    $("#Apellidos").attr('disabled',false);
    $("#Curp").attr('disabled',false);
    $("#Domicilio").attr('disabled',false);
    $("#btnperfil").html('Actualizar');
    $("#btnperfil").attr('onClick','actualizar()');
}
function actualizar(){
  var nombre= $("#Nombre").val();
  var fecha=$("#Fecha").val();
  var apellidos=$("#Apellidos").val();
  var curp=$("#Curp").val();
  var domicilio=$("#Domicilio").val();
  var parametros = {
      nombre : nombre,
      fecha : fecha,
      apellidos : apellidos,
      curp : curp,
      domicilio : domicilio
    };
   /* $.ajax({
      data:  parametros,
      url:   '../models/actualizarPerfil.php',
      type:  'post',
      beforeSend: function () {
        $('#btnperfil').val("Actualizando...");
      },
      success:  function (data) {

        //alert(data);
        if(!data){
          $("#resultado").html("Intente mas tarde");
        }

      },
      error: function(){
        alert("No se establecio comunicaion con el servidor.");
      }
    });*/
    deshabilitar();
}
function deshabilitar(){
   /* $("#Correo").attr('disabled',true);*/
    $("#Fecha").attr('disabled',true);
    $("#Nombre").attr('disabled',true);
    $("#Apellidos").attr('disabled',true);
    $("#Curp").attr('disabled',true);
    $("#Domicilio").attr('disabled',true);
    $("#btnperfil").html('Editar');
    $("#btnperfil").attr('onClick','editar()');
}