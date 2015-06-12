<?php 
  session_start();
?>
<!DOCTYPE html>
<html>
    <!-- MEMO: update me with `git checkout gh-pages && git merge master && git push origin gh-pages` -->
    <head>
        <meta charset="utf-8">
        <title>Perfil</title>
        <link href="dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="dist/css/perfil.css" rel="stylesheet">
        <link href="dist/css/xbjron.css" rel="stylesheet">
        <link href="dist/css/roboto.min.css" rel="stylesheet">
        <link href="dist/css/material-fullpalette.min.css" rel="stylesheet">
        <link href="dist/css/ripples.min.css" rel="stylesheet">
        <link href="dist/css/snackbar.min.css" rel="stylesheet">
        <link rel="shortcut icon" href="img/geek.png">
        <link href="dist/css/style.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="HandheldFriendly" content="true" />
        <style>
            #mimenu{
                padding-left: 0;
                padding-right: 0;
                width: 100%;
                background-color: #00BCD4;
            }
        </style>
    </head>
    <body style="background:#F0F2F1;">
        <div class="container" id="mimenu">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bs-component">
                            <div class="navbar navbar-inverse">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <a class="navbar-brand" href="javascript:void(0)">GeekModa</a>
                                </div>
                                <div class="navbar-collapse collapse navbar-inverse-collapse">
                                  <ul class="nav navbar-nav navbar-right">
                                      <li><a href="javascript:void(0)">Inicio</a></li>
                                      <li><a href="editor.php">Crea</a></li>
                                  <?php
                                    if (isset($_SESSION['s_usuario'])) {
                                      echo "<li>
                                      <a href='perfil.php'>".$_SESSION['s_nombres'].' '.$_SESSION['s_apellidos']."</a>
                                            </li>";
                                    } else {
                                      session_destroy();
                                      header ("Location: login.html");
                                      }
                                  ?>
                                        <li><a href="logout.php">Cerrar Sesión</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
            

        <div class='perfil'>
          <div class='perfiles'>
            <div class='perfiles-imagen'></div>
            <div class='perfiles-detalle'>
                <h2><?php echo "".$_SESSION['s_nombres'].' '.$_SESSION['s_apellidos'].""; ?></h2>
            </div>
          </div>
          <div class='stats'>
            <ul>
              <li><h4 class='stats-valor'>220</h4><h5 class='stats-titulo'>Seguidores</h5></li>
              <li><h4 class='stats-valor'>220</h4><h5 class='stats-titulo'>Siguiendo</h5></li>
              <li><h4 class='stats-valor'><?php require('clases/total.php'); ?></h4><h5 class='stats-titulo'>Diseños</h5></li>
            </ul>
          </div>
        </div>
       


        <div class="contenedor-principal-elearning">
    <div class="contenido-principal ">
    <div class="contenedor-zona row">

      <div class="wh2 col-xs-6 col-md-4">
        <div class="headwh2">
          <div class="tit-miPerfil">Mi Información</div>
      </div>
        <div class="zona-puntos">
          <br>
          <div class="pts-e">
            <span class="pts-ac">N° DE DISEÑOS</span>
            <span class="PPX"><?php require('clases/total.php'); ?></span>
          </div>
        </div>
        <div class="iPerfilForm">
           <form id="datos-emp" class='form' action="datos_perfil.php" method="post">
             <textarea class="in-data" placeholder="Acerca de mi" name="acerca" id="acerca" rows="4" cols="50" 
             style="height: 140px;" maxlength="127" disabled><?php print(trim($_SESSION["detalle"])); ?></textarea>
             <button id="edit-idata" type="button" class="e-idata btn-success edit-button" data-style="zoom-out" style="-webkit-border-radius: 20px;
                -moz-border-radius: 20px;
                border-radius: 20px;
                width: 50px;" title="Editar">
                <span class="edit-label mdi-image-edit" style="font-size: 0.8em">Editar</span>
             </button>
             <br>
             <span style="font-size: 0.83em; padding-left: 10px;">Fecha de Nacimiento:</span>
             <br>
             <input class="in-data" type="date" name="fecnac" max="2015-01-01" placeholder="Fecha de Nacimiento" id="fecnac" value='<?php echo $_SESSION["fecnac"];?>' disabled>
             <input class="in-data" type="text" name="linkfb" placeholder="Link de facebook" id="linkfb" value='<?php echo $_SESSION["linkfb"];?>' disabled>
             <input class="in-data" type="text" name="linktw" placeholder="Link de Twitter" id="linktw" value='<?php echo $_SESSION["linktw"];?>' disabled>
             <input class="in-data" type="text" name="linkpt" placeholder="Link de Pinterest" id="linkpt" value='<?php echo $_SESSION["linkpt"];?>' disabled>
             <input class="in-data" type="text" name="correo" placeholder="Correo Electronico" id="email" value='<?php echo $_SESSION["correo"];?>' disabled>
              <button id="iPFS" name="btn_actualizar" class="btn btn-success" disabled="disabled" style="-webkit-border-radius: 20px;
            -moz-border-radius: 20px;
            border-radius: 20px;">
            <span class="ladda-label mdi-av-replay" style="font-size: 1.1em; width: 220px;"> Actualizar Información</span>
          </button>
          </form>
        </div>
            <div class="XiNotificacionTitulo">
                    <span class="XiNotificacionSistema">Ultima Actualización:</span>
                    <span class="XiNotificacionFecha"><?php echo substr($_SESSION["fecreg"], 0, -8); ?></span>
                    <span class="XiNotificacionHora"><?php echo substr($_SESSION["fecreg"], 11); ?></span>
            </div>
      </div>




      <div class="wh1 col-xs-12 col-sm-6 col-md-8">
        <div class="headwh1">
          <div class="tit-untf">Últimos Diseños</div>
          <div class="tit-vntf">
            <a id="verNotificaciones" class="go-notificaciones">Ver Todos</a>
        </div>
        </div>
          <div class="notif">
            <?php require('clases/disenos.php'); ?>
          </div>
        </div>
      </div>


      </div>
    </div>
  </div>
           
        <script type="text/javascript" src="js/modernizr.js"></script>
        <script src="dist/js/jquery-1.10.2.min.js"></script>
        <script src="dist/js/bootstrap.min.js"></script>
        <script src="dist/js/ripples.min.js"></script>
        <script src="dist/js/material.min.js"></script>
        <script src="dist/js/snackbar.min.js"></script>
        <script src="dist/js/perfil.js"></script>
        <script src="dist/js/jquery.nouislider.min.js"></script>
        <script>
            $(function() {
                $.material.init();
                $(".shor").noUiSlider({
                    start: 40,
                    connect: "lower",
                    range: {
                        min: 0,
                        max: 100
                    }
                });

                $(".svert").noUiSlider({
                    orientation: "vertical",
                    start: 40,
                    connect: "lower",
                    range: {
                        min: 0,
                        max: 100
                    }
                });
            });
        </script>
    </body>
</html>
