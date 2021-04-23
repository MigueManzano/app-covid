
function medi(){
    var option=$("#medico").val();
    //alert(option);
    var apellido=$('#'+option).data('apellido');
    var nombre= $('#'+option).data('nombre');
    $("#nombreMed").html("Nombre: "+ nombre);
    $("#apellidoMed").html("Apellido: "+ apellido);
    $("#fecha").attr('disabled',false);
}
function fechin(){
    var medico=$("#medico").val();
    var fecha=$("#fecha").val();
    var parametros = {
        medico : medico,
        fecha : fecha
    };
    $.ajax({
      data:  parametros,
      url:   '../../models/verificarCitas.php',
      type:  'post',
      dataType: 'json',
      beforeSend: function () {
        $('#action').val("Conectando...");
       },
      success:  function (data) {
        $('#action').val('aceptar');
       // alert(data[1].descripcion);
        select = $("#horario");
        var x = document.getElementById("horario");
        n=Object.keys(data).length;
        var i=0;
        while(n>=0){
            id=data[i].id;
            descripcion=data[i].descripcion;
            alert (descripcion);
            
            //var option = document.createElement("option");
            //option.value=id;
            //option.text = descripcion;
            //x.add(option);
            n--;
            i++;
        }
        
       },
       error: function(){
        alert("No se establecio comunicaion con el servidor.");
        $("#action").attr('disabled',false);
       }
      });
    
}