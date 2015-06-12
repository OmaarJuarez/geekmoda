<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Hello World</title>
	<link rel="stylesheet" href="">
	<script type="text/javascript" src="js/fabric.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

</head>
<body style="background-color: #FFFFFF;">
	<center><div class="row">
	  <div class="col-md-4"><canvas id="1" width="292" height="350" style='background-color: red; background-size: 100% 100%; background-repeat: no-repeat; background-image:url(img/crew_front.png);'></canvas></div>
	  <div class="col-md-4"><canvas id="2" width="292" height="350" style='background-color: gray; background-size: 100% 100%; background-repeat: no-repeat; background-image:url(img/crew_front.png);'></canvas></div>
	  <div class="col-md-4"><canvas id="3" width="292" height="350" style='background-color: green; background-size: 100% 100%; background-repeat: no-repeat; background-image:url(img/crew_front.png);'></canvas></div>
	</div></center>
	<center><div class="row">
	  <div class="col-md-4"><canvas id="4" width="292" height="350" style='background-color: yellow; background-size: 100% 100%; background-repeat: no-repeat; background-image:url(img/crew_front.png);'></canvas></div>
	  <div class="col-md-4"><canvas id="5" width="292" height="350" style='background-color: pink; background-size: 100% 100%; background-repeat: no-repeat; background-image:url(img/crew_front.png);'></canvas></div>
	  <div class="col-md-4"><canvas id="6" width="292" height="350" style='background-color: black; background-size: 100% 100%; background-repeat: no-repeat; background-image:url(img/crew_front.png);'></canvas></div>
	</div></center>
<script  type="text/javascript">
	var canvas = window._canvas = new fabric.Canvas('1');

	var json = '{"objects":[{"type":"image","left":145,"top":208,"width":150,"height":170,"fill":"rgb(0,0,0)","overlayFill":null,"stroke":null,"strokeWidth":1,"strokeDashArray":null,"scaleX":0.7,"scaleY":0.7,"angle":179.84,"flipX":false,"flipY":false,"opacity":1,"selectable":false,"hasControls":true,"hasBorders":true,"hasRotatingPoint":true,"transparentCorners":true,"perPixelTargetFind":false,"src":"http://localhost/usuarioformultimo/archivos_subidos/hola@mundo.com/_1432681154.png","filters":[]}],"background":"rgba(0, 0, 0, 0)"}';

	canvas.loadFromJSON(json, canvas.renderAll.bind(canvas), function(o, object) {
	    fabric.log(o, object);
	});

</script>
<!-- left: 24, top: -92, width: -140, height: -145-->
<!-- left: 155, top: 100-->
</body>
</html>
