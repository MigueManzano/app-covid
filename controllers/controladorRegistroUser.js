function registrar(){
    var usuario= $("#nombre").val();
    var apellidos= $("#apellidos").val();
    var curp= $("#curp").val();
    var fecha= $("#Fecha").val();
    var email=$("#email").val();
    var domicilio=$("#domicilio").val();
    var pass=$("#password").val();
    var pass1=$("#password1").val();
    
    if (usuario=="" || apellidos==""||curp=="" || fecha=="" || domicilio=="" || email==""|| pass==""|| pass1==""){
        $("#resultado").html("DEBES RELLENAR TODOS LOS CAMPOS");
        $("#btnRegistrar").attr('disabled',false);
    }else{
        if(pass != pass1){
        $("#resultado").html("LAS CONTRASEÑAS DEBEN COINCIDIR");
        $("#btnRegistrar").attr('disabled',false);
        }
        else{
        //var contra=hex_md5(pass);
        var parametros = {
            usuario : usuario,
            apellidos : apellidos,
            curp : curp,
            fecha : fecha,
            domicilio : domicilio,
            email : email,
            pass : pass
        };
        $.ajax({
            data:  parametros,
            url:   '../models/registrarUsuario.php',
            type:  'post',
            beforeSend: function () {
            $('#btnRegistrar').val("Creando...");
            },
            success:  function (data) {
            $('#btnRegistrar').val("Guardar");
            //alert(data);
            if(data="0"){
                $("#resultado").html("SE REGISTRO CON EXITO");
                //location.reload(true); 
                location.href='../views/Login.php';
                
            }
            else{
                $("#resultado").html("Ya esta registrado");
                $("#btnRegistrar").attr('disabled',false);
            }
            },
            error: function(){
            alert("No se establecio comunicacion con el servidor.");
            }
        });
        }
    }
  }