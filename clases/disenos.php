<?php  
    include('conexion.php');

    $con = ("SELECT color, svg, nombre, reg_pedido from prenda
    where id_usuario = (select id from usuarios where usuario = '".$_SESSION['s_usuario']."' and id = id_usuario) order by reg_pedido desc limit 3") or die (mysql_error());

    $res = @mysql_query($con);


    //$file = mysql_fetch_array($res);

    while ($file = @mysql_fetch_array($res, MYSQL_NUM)) {
        //echo "Color= ", $file["0"];
        //echo "Svg= ", $file["1"];
        //echo "Nombre= ", $file["2"];
        //echo "Fecha de Registro= ", $file["3"];  

        echo '
              
                  <!--Carga notificaciones-->
                  <div class="XiNotificacion">
                    <div class="XiNotificacionContenido">
                         <span class="XiNotificacionContenidoC">
                            '.$file["2"].'
                            <img src="dist/img/polo.jpg" alt="" style="width: 154px; height: 154px; float: right;">
                         </span>
                     </div>
                    <div class="XiNotificacionTitulo">
                        <span class="XiNotificacionSistema">Creado el:</span>
                        <span class="XiNotificacionFecha">'.substr($file["3"], 0, -8).'</span>
                        <span class="XiNotificacionHora">'.substr($file["3"], 11).'</span>
                        <span class="XiNotificacionIr"><button id="XiNI" href="#" class="btn btn-success mdi-maps-local-grocery-store"> Agregar al carrito</button></span>
                   </div>
                </div>
        ';
    }

?>