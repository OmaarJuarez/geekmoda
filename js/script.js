// Credits to Mohammad Shehbaaz for the design
// https://dribbble.com/shots/1819287-Register-Form?list=shots&sort=popular&timeframe=now&offset=387

$('input').bind('focus', function() {
  $(this).parent('.field').css({ 'background-color' : '#f5f8f9'});
});
$('input').bind('blur', function() {
  $(this).parent('.field').css({ 'background-color' : 'none'});
});

function validacion() {
var p1 = document.getElementById("password").value;
var p2 = document.getElementById("rpassword").value;

if (p1 != p2) {
  alert("Las contraseñas deben coincidir");
  return false;
} 

}

$(document).on('change', '.btn-file :file', function() {
  var input = $(this),
      numFiles = input.get(0).files ? input.get(0).files.length : 1,
      label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
  input.trigger('fileselect', [numFiles, label]);
});

$(document).ready( function() {
    $('.btn-file :file').on('fileselect', function(event, numFiles, label) {
        
        var input = $(this).parents('.input-group').find(':text'),
            log = numFiles > 1 ? numFiles + ' files selected' : label;
        
        if( input.length ) {
            input.val(log);
        } else {
            if( log ) alert(log);
        }
        
    });
});

/*-_-*/

function changeSize() {
            var width = parseInt($("#Width").val());
            var height = parseInt($("#Height").val());

            if(!width || isNaN(width)) {
                width = 600;
            }
            if(!height || isNaN(height)) {
                height = 400;
            }
            $("#scroll").width(width).height(height);

            // update perfect scrollbar
            $('#scroll').perfectScrollbar('update');
        }
        $(function() {
            $('#scroll').perfectScrollbar();
        });

            function subirArchivos() {
              if (true) {
                $("#archivo").upload('subir_archivo.php',
                {
                    nombre_archivo: $("#nombre_archivo").val()
                },
                function(respuesta) {
                    //Subida finalizada.
          $("#barra_de_progreso").val(0);
                    if (respuesta === 1) {
                      mostrarRespuesta(smoke.alert("Archivo subido", function(){
              console.log(true);
            }, {
              ok: "Listo!",
              cancel: "Error!!",
              classname: "custom-class"
            }), true);
                        //mostrarRespuesta(alert('El archivo ha sido subido correctamente.'), true);
                        $("#nombre_archivo, #archivo").val('');
                    } else if(respuesta === 2){
            mostrarRespuesta(smoke.alert("Excedio el limite de imagenes", function(){
              console.log(false);
            }, {
              ok: "Listo!",
              cancel: "Error!!",
              classname: "custom-class"
            }), false);
                        //mostrarRespuesta(alert('El archivo NO se ha podido subir.'), false);
                    }else if(respuesta === 0){
            mostrarRespuesta(smoke.alert("El archivo NO se ha podido subir", function(){
              console.log(false);
            }, {
              ok: "Listo!",
              cancel: "Error!!",
              classname: "custom-class"
            }), false);
                    }
                    mostrarArchivos();
                }, function(progreso, valor) {
                    //Barra de progreso.
                    $("#barra_de_progreso").val(valor);
                });
            }
      }

            function eliminarArchivos(archivo) {
                $.ajax({
                    url: 'eliminar_archivo.php',
                    type: 'POST',
                    timeout: 10000,
                    data: {archivo: archivo},
                    error: function() {
                      mostrarRespuesta(smoke.alert("Error al intentar eliminar el archivo", function(){
              console.log(false);
            }, {
              ok: "Listo!",
              cancel: "Error!!",
              classname: "custom-class"
            }), false);
                        //mostrarRespuesta(alert('Error al intentar eliminar el archivo.'), false);
                    },
                   
                    success: function(respuesta) {
                      if (respuesta == 1) {
              mostrarRespuesta(smoke.alert("El archivo ha sido eliminado", function(){
                console.log(true);
              }, {
                ok: "Listo!",
                cancel: "Correcto!",
                classname: "custom-class"
              }), true);
                  //mostrarRespuesta(alert('El archivo ha sido eliminado.'), true);
                        } else {
              mostrarRespuesta(smoke.alert("Error al intentar eliminar el archivo", function(){
                  console.log(false);
                }, {
                  ok: "Listo!",
                  cancel: "Error!!",
                  classname: "custom-class"
                }), false);
                            //mostrarRespuesta(alert('Error al intentar eliminar el archivo.'), false);                            
                        }
                        mostrarArchivos();
                    }


                });
            }


            function mostrarArchivos() {
                $.ajax({
                    url: 'mostrar_archivos.php',
                    dataType: 'JSON',
                    success: function(respuesta) {
                        if (respuesta) {
                            var html = '';
                            for (var i = 0; i < respuesta.length; i++) {
                                if (respuesta[i] != undefined) {
                                    html += '<div class="row"> <span hidden="hidden" class="col-lg-2"> ' + respuesta[i] + ' </span> <center><img class="col-lg-2" src="archivos_subidos/'+ respuesta[i] +'" width="75px" height="75px"> <div class="col-lg-2"> <a class="eliminar_archivo btn btn-danger" href="javascript:void(0);" style="background: #F44336; -webkit-border-radius: 60px; -moz-border-radius: 60px; border-radius: 60px;"> Eliminar </a></center><br>  </div> </div>';
                                }
                            }
                            $("#archivos_subidos").html(html);
                        }
                    }
                });
            }
            function mostrarRespuesta(mensaje, ok){
                $("#respuesta").removeClass('alert-success').removeClass('alert-danger').html(mensaje);
                if(ok){
                    $("#respuesta").addClass('alert-success');
                }else{
                    $("#respuesta").addClass('alert-danger');
                }
            }
            $(document).ready(function() {
                    mostrarArchivos();
                $("#boton_subir").on('click', function() {
                    subirArchivos();
                });
                $("#archivos_subidos").on('click', '.eliminar_archivo', function() {
                    var archivo = $(this).parents('.row').eq(0).find('span').text();
                    archivo = $.trim(archivo);

                    smoke.confirm("Deseas eliminar el archivo?", function(result){
                      console.log("Resultado: "+result);
            if (result === true){
              eliminarArchivos(archivo);
            }else{
              smoke.alert("El archivo no se elimino.", function(){
                  console.log(false);
                }, {
                  ok: "Listo!",
                  cancel: "Correcto!!",
                  classname: "custom-class"
              })
            }
          }, {
            ok: "Si",
            cancel: "No",
            classname: "custom-class",
            reverseButtons: true
          });

                });
            });

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-35639689-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

    function color1(){
      if (document.getElementsByTagName("li")[0]){
        document.formdatos.color.value = "White";
      }
    }

    function color2(){
      if (document.getElementsByTagName("li")[1]){
        document.formdatos.color.value = "Dark Heather";
      }
    }

    function color3(){
      if(document.getElementsByTagName("li")[2]){
        document.formdatos.color.value = "Gray";
      }
    }

    function color4(){
      if (document.getElementsByTagName("li")[3]){
        document.formdatos.color.value = "Charcoal";
      }
    }

    function color5(){
      if (document.getElementsByTagName("li")[4]){
        document.formdatos.color.value = "Black";
      }
    }

    function color6(){
      if(document.getElementsByTagName("li")[5]){
        document.formdatos.color.value = "Heather Orange";
      }
    }

    function color7(){
      if (document.getElementsByTagName("li")[6]){
        document.formdatos.color.value = "Heather Dark Chocolate";
      }
    }

    function color8(){
      if (document.getElementsByTagName("li")[7]){
        document.formdatos.color.value = "Salmon";
      }
    }

    function color9(){
      if(document.getElementsByTagName("li")[8]){
        document.formdatos.color.value = "Chesnut";
      }
    }

    function color10(){
      if (document.getElementsByTagName("li")[9]){
        document.formdatos.color.value = "Dark Chocolate";
      }
    }

    function color11(){
      if (document.getElementsByTagName("li")[10]){
        document.formdatos.color.value = "Citrus Yellow";
      }
    }

    function color12(){
      if(document.getElementsByTagName("li")[11]){
        document.formdatos.color.value = "Avocado";
      }
    }

    function color13(){
      if (document.getElementsByTagName("li")[12]){
        document.formdatos.color.value = "Kiwi";
      }
    }

    function color14(){
      if (document.getElementsByTagName("li")[13]){
        document.formdatos.color.value = "Irish Green";
      }
    }

    function color15(){
      if(document.getElementsByTagName("li")[14]){
        document.formdatos.color.value = "Scrub Green";
      }
    }
    function color16(){
      if (document.getElementsByTagName("li")[15]){
        document.formdatos.color.value = "Teal Ice";
      }
    }

    function color17(){
      if (document.getElementsByTagName("li")[16]){
        document.formdatos.color.value = "Heather Sapphire";
      }
    }

    function color18(){
      if(document.getElementsByTagName("li")[17]){
        document.formdatos.color.value = "Sky";
      }
    }

    function color19(){
      if (document.getElementsByTagName("li")[18]){
        document.formdatos.color.value = "Antique Sapphire";
      }
    }

    function color20(){
      if (document.getElementsByTagName("li")[19]){
        document.formdatos.color.value = "Heather Navy";
      }
    }

    function color21(){
      if(document.getElementsByTagName("li")[20]){
        document.formdatos.color.value = "Cherry Red";
      }
    }

  function es_vacio(){
  var campo1 = document.getElementById("text-string").value;
  var n = campo1.length;

  if(n == null){
    document.getElementById("add-text").setAttribute('disabled', 'disabled');
  }
  else if(n != null){
    document.getElementById("add-text").removeAttribute('disabled');
  }
}