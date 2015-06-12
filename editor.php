<?php 
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>GeekModa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

	<link rel="shortcut icon" href="img/geek.png">
	<script type="text/javascript" src="js/modernizr.js"></script>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/fabric.js"></script>
	<script type="text/javascript" src="js/tshirtEditor.js"></script>
	<script type="text/javascript" src="js/jquery.miniColors.min.js"></script>
	<script type="text/javascript" src="js/upload.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<script type="text/javascript" src="js/perfect-scrollbar.min.js"></script>
	<script type="text/javascript" src="js/smoke.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script> 
    <script type="text/javascript" src="js/parsley.min.js" ></script>
	<script type="text/javascript" src="http://canvg.googlecode.com/svn/trunk/rgbcolor.js"></script> 
	<script type="text/javascript" src="http://canvg.googlecode.com/svn/trunk/StackBlur.js"></script>
	<script type="text/javascript" src="http://canvg.googlecode.com/svn/trunk/canvg.js"></script> 
    <!-- Le styles -->
    <link type="text/css" rel="stylesheet" href="css/jquery.miniColors.css" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/perfect-scrollbar.min.css"/>
    <link type="text/css" rel="stylesheet" href="css/smoke.css"/>
    <link type="text/css" rel="stylesheet" href="css/estilo.css"/>
  </head>

  <body class="preview" data-spy="scroll" data-target=".subnav" data-offset="80">

  <!-- Navbar
    ================================================== -->
	 <div class="navbar navbar-fixed-top">
	   <div class="navbar-inner" style="background: #3F51B5">
	     <div class="container">
	       <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse" style="background: #3F51B5">
	         <span class="icon-bar"></span>
	         <span class="icon-bar"></span>
	         <span class="icon-bar"></span>
	       </a>
	       <a class="brand" href="#">Geekmoda</a>
	       <div class='nav-collapse' id='main-menu' style='float:right'>
				<ul class='nav'>
					<li><a href='logout.php'>Cerrar Sessión</a></li>
				</ul>
			</div>
	       <?php
				if (isset($_SESSION['s_usuario'])) {
					echo "<div class='nav-collapse' id='main-menu' style='float:right'>
						<ul class='nav'>
							<li><a href='perfil.php'>".$_SESSION['s_nombres'].' '.$_SESSION['s_apellidos']."</a></li>
						</ul>
					</div>";
				} else {
					session_destroy();
					header ("Location: login.html");
					}
			?>

	       <!--<div class="nav-collapse" id="main-menu" style="float:right;">			
				<ul class="nav">
					<li><a href="case.html">Smartphone</a></li>
				</ul>
	       </div>-->
	       <div class="nav-collapse" id="main-menu" style="float:right;">			
				<ul class="nav">
					<li><a href="editor.php">Crea</a></li>
				</ul>
	       </div>
	       <div class="nav-collapse" id="main-menu" style="float:right;">			
				<ul class="nav">
					<li><a href="case.html">Inicio</a></li>
				</ul>
	       </div>
	     </div>
	   </div>
	 </div>

    <div class="container">
		<section id="typography">
 		<div class="page-header">
		    <h1 style="color: #3F51B5">Zona de Diseño</h1>
		  </div>
		
		  <!-- Headings & Paragraph Copy -->
		  <div class="row">			
		    <div class="span3">
				    	<div class="well">
						      	<!--<select id="">                        
				                    <option value="1" selected="selected">Short Sleeve Shirts</option>
				                    <option value="2">Long Sleeve Shirts</option>                                        
				                    <option value="3">Hoodies</option>                    
				                    <option value="4">Tank tops</option>
								</select>-->			
				    		<div class="input-append">
							  <input class="span2" id="text-string" name="text-string" onkeypress="es_vacio()" type="text" placeholder="Ingrese su texto" style="background: #ffffff; -webkit-border-radius: 60px; -moz-border-radius: 60px; border-radius: 60px;">
							  	<button id="add-text" name="add-text" class="btn" title="Ingrese su texto" disabled="disabled" 
							  	style="background: #26A69A; -webkit-border-radius: 60px; -moz-border-radius: 60px; border-radius: 60px;">
							  		<i class="icon-share-alt"></i>
								</button>
							  <hr>
							  <form action="javascript:void(0);">
						                <div class="row">
						                    <div class="col-lg-2">
						                        <center><input type="hidden" value="archivo" name="nombre_archivo" id="nombre_archivo"/></center>
						                    </div>
											    <div class="row">
											            <center><div class="input-group" style="text-align: center">
											            	<span class="input-group-btn">
											                    <span class="btn btn-primary btn-file" style="-webkit-border-radius: 60px;
																	-moz-border-radius: 60px;
																	border-radius: 60px;
																	background: #00BCD4;">
											                        ...<input type="file" name="archivo" id="archivo">
											                    </span>
											                </span>
											                <input type="text" class="form-control" readonly style="width:40%; background: #ffffff; -webkit-border-radius: 60px; -moz-border-radius: 60px; border-radius: 60px;">
											            </div></center>
											    </div>
						                    <!--<div class="col-lg-2">
						                        <center><input type="file" name="archivo" id="archivo" style='border:0; ; heigth:24px; width:248px;'/></center>
						                    </div> -->             
						                </div>
						                <br>
						                <div class="row">
						                    <center><div class="col-lg-2" style="width:100px">
						                        <input type="submit" name="boton" id="boton_subir" value="Subir" class="btn btn-mediun btn-block btn-success"
						                         style="-webkit-border-radius: 60px;
								-moz-border-radius: 60px;
								border-radius: 60px;
								background: #4CAF50"/>
						                    </div></center>
						                </div>
						                <hr>
						            </form>
						            <center><div id="scroll" style="width:250px; height:350px; background: #F5F5F5">
						            <div id="archivos_subidos" style="cursor:pointer; background: #F5F5F5; border-color: #F5F5F5;
									   border-width: 1px;
									   border-style: solid;" class="img-polaroid"></div>
									</div></center>
							</div>	    		
				    	</div>			
		    </div>		
		    <div class="span6">		    
		    		<div align="center" style="min-height: 32px;">
		    			<div class="clearfix">
							<div class="btn-group inline pull-left" id="texteditor" style="display:none">						  
								<button id="font-family" class="btn dropdown-toggle" data-toggle="dropdown" title="Font Style"><i class="icon-font" style="width:19px;height:19px;"></i></button>		                      
							    <ul class="dropdown-menu" role="menu" aria-labelledby="font-family-X">
								    <li><a tabindex="-1" href="#" onclick="setFont('Arial');" class="Arial">Arial</a></li>
								    <li><a tabindex="-1" href="#" onclick="setFont('Helvetica');" class="Helvetica">Helvetica</a></li>
								    <li><a tabindex="-1" href="#" onclick="setFont('Myriad Pro');" class="MyriadPro">Myriad Pro</a></li>
								    <li><a tabindex="-1" href="#" onclick="setFont('Delicious');" class="Delicious">Delicious</a></li>
								    <li><a tabindex="-1" href="#" onclick="setFont('Verdana');" class="Verdana">Verdana</a></li>
								    <li><a tabindex="-1" href="#" onclick="setFont('Georgia');" class="Georgia">Georgia</a></li>
								    <li><a tabindex="-1" href="#" onclick="setFont('Courier');" class="Courier">Courier</a></li>
								    <li><a tabindex="-1" href="#" onclick="setFont('Comic Sans MS');" class="ComicSansMS">Comic Sans MS</a></li>
								    <li><a tabindex="-1" href="#" onclick="setFont('Impact');" class="Impact">Impact</a></li>
								    <li><a tabindex="-1" href="#" onclick="setFont('Monaco');" class="Monaco">Monaco</a></li>
								    <li><a tabindex="-1" href="#" onclick="setFont('Optima');" class="Optima">Optima</a></li>
								    <li><a tabindex="-1" href="#" onclick="setFont('Hoefler Text');" class="Hoefler Text">Hoefler Text</a></li>
								    <li><a tabindex="-1" href="#" onclick="setFont('Plaster');" class="Plaster">Plaster</a></li>
								    <li><a tabindex="-1" href="#" onclick="setFont('Engagement');" class="Engagement">Engagement</a></li>
				                </ul>
							    <button id="text-bold" class="btn" data-original-title="Bold"><img src="img/font_bold.png" height="" width=""></button>
							    <button id="text-italic" class="btn" data-original-title="Italic"><img src="img/font_italic.png" height="" width=""></button>
							    <button id="text-strike" class="btn" title="Strike" style=""><img src="img/font_strikethrough.png" height="" width=""></button>
							 	<button id="text-underline" class="btn" title="Underline" style=""><img src="img/font_underline.png"></button>
							 	<a class="btn" href="#" rel="tooltip" data-placement="top" data-original-title="Font Color"><input type="hidden" id="text-fontcolor" class="color-picker" size="7" value="#000000"></a>
						 		<a class="btn" href="#" rel="tooltip" data-placement="top" data-original-title="Font Border Color"><input type="hidden" id="text-strokecolor" class="color-picker" size="7" value="#000000"></a>
								  <!--- Background <input type="hidden" id="text-bgcolor" class="color-picker" size="7" value="#ffffff"> --->
							</div>							  
							<div class="pull-right" align="" id="imageeditor" style="display:none">
							  <div class="btn-group">										      
							      <button class="btn" id="bring-to-front" title="Bring to Front"><i class="icon-fast-backward rotate" style="height:19px;"></i></button>
							      <button class="btn" id="send-to-back" title="Send to Back"><i class="icon-fast-forward rotate" style="height:19px;"></i></button>
							      <button id="flip" type="button" class="btn" title="Show Back View"><i class="icon-retweet" style="height:19px;"></i></button>
							      <button id="remove-selected" class="btn" title="Delete selected item"><i class="icon-trash" style="height:19px;"></i></button>
							  </div>
							</div>			  
						</div>												
					</div>					  		
				<!--	EDITOR      -->					
					<div id="shirtDiv" class="page" style="width: 530px; height: 630px; position: relative; background-color: rgb(255, 255, 255);">
						<img id="tshirtFacing" src="img/crew_front.png"></img>
						<div id="drawingArea" style="position: absolute;top: 100px;left: 160px;z-index: 10;width: 200px;height: 400px;">					
							<canvas id="tcanvas" width="200" height="400" class="hover" style="-webkit-user-select: none;"></canvas>
						</div>
					</div>
<!--					<div id="shirtBack" class="page" style="width: 530px; height: 630px; position: relative; background-color: rgb(255, 255, 255); display:none;">-->
<!--						<img src="img/crew_back.png"></img>-->
<!--						<div id="drawingArea" style="position: absolute;top: 100px;left: 160px;z-index: 10;width: 200px;height: 400px;">					-->
<!--							<canvas id="backCanvas" width=200 height="400" class="hover" style="-webkit-user-select: none;"></canvas>-->
<!--						</div>-->
<!--					</div>						-->
								
				<!--	/EDITOR		-->
		    </div>
		
		    <div class="span3">
		      <div class="well">
			  	<p style="font-size: 1.3em">Eliga el color de la prenda</p>
			  		      <div>
							<ul class="nav">
								<li class="color-preview" onclick="color1()" value="White" id="White" title="White" style="background-color:#ffffff;"></li>
								<li class="color-preview" onclick="color2()" value="Dark" id="Dark" title="Dark Heather" style="background-color:#616161;"></li>
								<li class="color-preview" onclick="color3()" value="Gray" id="Gray" title="Gray" style="background-color:#f0f0f0;"></li>
								<li class="color-preview" onclick="color4()" value="Charcoal" id="Charcoal" title="Charcoal" style="background-color:#5b5b5b;"></li>
								<li class="color-preview" onclick="color5()" value="Black" id="Black" title="Black" style="background-color:#222222;"></li>
								<li class="color-preview" onclick="color6()" value="Heather Orange" id="Heather Orange" title="Heather Orange" style="background-color:#fc8d74;"></li>
								<li class="color-preview" onclick="color7()" value="Heather Dark Chocolate" id="Heather Dark Chocolate" title="Heather Dark Chocolate" style="background-color:#432d26;"></li>
								<li class="color-preview" onclick="color8()" value="Salmon" id="Salmon" title="Salmon" style="background-color:#eead91;"></li>
								<li class="color-preview" onclick="color9()" value="Chesnut" id="Chesnut" title="Chesnut" style="background-color:#806355;"></li>
								<li class="color-preview" onclick="color10()" value="Dark Chocolate" id="Dark Chocolate" title="Dark Chocolate" style="background-color:#382d21;"></li>
								<li class="color-preview" onclick="color11()" value="Citrus Yellow" id="Citrus Yellow" title="Citrus Yellow" style="background-color:#faef93;"></li>
								<li class="color-preview" onclick="color12()" value="Avocado" id="Avocado" title="Avocado" style="background-color:#aeba5e;"></li>
								<li class="color-preview" onclick="color13()" value="Kiwi" id="Kiwi" title="Kiwi" style="background-color:#8aa140;"></li>
								<li class="color-preview" onclick="color14()" value="Irish Green" id="Irish Green" title="Irish Green" style="background-color:#1f6522;"></li>
								<li class="color-preview" onclick="color15()" value="Scrub Green" id="Scrub Green" title="Scrub Green" style="background-color:#13afa2;"></li>
								<li class="color-preview" onclick="color16()" value="Teal Ice" id="Teal Ice" title="Teal Ice" style="background-color:#b8d5d7;"></li>
								<li class="color-preview" onclick="color17()" value="Heather Sapphire" id="Heather Sapphire" title="Heather Sapphire" style="background-color:#15aeda;"></li>
								<li class="color-preview" onclick="color18()" value="Sky" id="Sky" title="Sky" style="background-color:#a5def8;"></li>
								<li class="color-preview" onclick="color19()" value="Antique Sapphire" id="Antique Sapphire" title="Antique Sapphire" style="background-color:#0f77c0;"></li>
								<li class="color-preview" onclick="color20()" value="Heather Navy" id="Heather Navy" title="Heather Navy" style="background-color:#3469b7;"></li>							
								<li class="color-preview" onclick="color21()" value="Cherry Red" id="Cherry Red" title="Cherry Red" style="background-color:#c50404;"></li>
							</ul>
						</div>	
			  
		      </div>		      		       		   
		    </div>


		    <div class="span3" style="background:#F5F5F5">
			      	<form class='form' onSubmit="return validar()" action="capturar_datos.php" method="post" name="formdatos" id="formdatos"
			      	 data-parsley-validate onSubmit="return validacion()">
				      <div class='field'>
				        <label for='datos' hidden><spam hidden>Nombres y Apellidos:</spam>
				        <input id='datos' name='datos' type='nombres' 
				        value='<?php echo $_SESSION["s_nombres"]." ".$_SESSION["s_apellidos"] ?>' hidden>
				        </label>
				        <!-- -->
				        <label for='color' hidden><spam hidden>Color:</spam>
				        <input id='color' name='color' value='white' hidden>
				        </label>
				        <!-- -->
				        <label for='titulo' style="padding-left: 15px">
				        <input type="text" placeholder="Nombre del Diseño" data-parsley-required="true" data-parsley-trigger="keyup" id='titulo' name='titulo' 
				        style="background: #ffffff; -webkit-border-radius: 60px; -moz-border-radius: 60px; border-radius: 60px;">
				        </label>
				        <!-- -->
				        <label for='svg' hidden><spam hidden>Imagen:</spam>
				        <input id='svg' name='svg' value='' hidden>
				        </label>
				        <button class="btn btn-large btn-block btn-success" name="btn_salvar" id="btn_salvar"
				         style="-webkit-border-radius: 60px;
								-moz-border-radius: 60px;
								border-radius: 60px;
								background: #4CAF50">Guardar Diseño  <i class="icon-briefcase icon-white"></i></button>
				      </div>
				    </form>
		    </div>
		

		  </div>
		
		</section>
    </div><!-- /container -->
  </body>
  <script  type="text/javascript">
  		var CLSBtn = document.getElementById('btn_salvar');  
    	CLSBtn.onclick = function() {

         var json = JSON.stringify(canvas);
           //console.log(json);      
        //var img    = canvas.toDataURL("image/png");
        //document.getElementById("svg").innerHTML = canvas.toSVG();
        document.formdatos.svg.value = json;
        //var canvas = document.getElementById("mycanvas");
		//var img    = canvas.toDataURL("image/png");
        //document.formdatos.svg.value = json;
        //console.log(canvas.toSVG());            
        //return json;
    
    };
  </script>
</html>