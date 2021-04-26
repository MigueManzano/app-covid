
function medi(){
    var option=$("#medico").val();
    //alert(option);
    var apellido=$('#'+option).data('apellido');
    var nombre= $('#'+option).data('nombre');
    $("#nombreMed").html("Nombre: "+ nombre);
    $("#apellidoMed").html("Apellido: "+ apellido);
    $("#fecha").attr('disabled',false);
}
/*function fechin(){
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
        $('#aceptar').val("Conectando...");
       },
      success:  function (data) {
        $('#aceptar').val('aceptar');
       // alert(data[1].descripcion);
        select = $("#horario");
        var x = document.getElementById("horario");
        n=Object.keys(data).length;
        var i=0;   
    
       
        while(n>=0){
            id=data[i].id;
            //descripcion=data[i].;
            alert (id);
            $("#horario option[value='"+id+"']").remove();
            $("#h-"+id).css("display", "block");
           $("#h-"+id).removeAttr('disabled');
           $("#h-"+id).removeClass('disabled');

           $('li').removeClass('disabled');
           // alert("#h-"+id);
            n--;
            i++;
        }
        
       },
       error: function(){
        alert("No se establecio comunicaion con el servidor.");
        $("#aceptar").attr('disabled',false);
       }
      });
    
}*/
function fechaC(){
    var fecha=$("#fecha").val();
    $("#fechaCita").html("Fecha de Cita: "+ fecha);

}
function boton(){
    $("#aceptar").attr('disabled',false);
    var horario=$("#horario option:selected").text();
    $("#horaCi").html("Hora de la Cita: "+ horario);
    
   
}


function agregar(){
    var medico=$("#medico").val();
    var fecha=$("#fecha").val();
    var horario=$("#horario").val();
    var parametros = {
        medico : medico,
        fecha : fecha,
        horario : horario
    };
    
    
    $.ajax({
      data:  parametros,
      url:   '../../models/agregarCitas.php',
      type:  'post',
      beforeSend: function () {
        $('#aceptar').val("Conectando...");
       },
      success:  function (data) {
        $('#aceptar').val('aceptar');
       if(data==0){
        $('#modal1').show();
        //$('#modal1').modal('open'); 
        
       }else{
           
           $('#modal1').hide();
           $('#body').removeAttr( 'style' );
           alert("ya esta registrada");
       }
        
       },
       error: function(){
        alert("No se establecio comunicaion con el servidor.");
        $("#aceptar").attr('disabled',false);
        $("#horaCi").html("Hora de la cita: ");
       }
      });
    
}