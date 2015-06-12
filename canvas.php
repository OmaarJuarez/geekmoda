<!DOCTYPE html>

<html>

<head>

	<meta charset="utf-8">
	<link rel="shortcut icon" href="img/geek.png">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>Hello World</title>

	<link rel="stylesheet" href="">

	<script type="text/javascript" src="js/fabric.js"></script>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">



</head>

<body style="background-color: #FFFFFF;">

		<canvas id="1" width="602" height="610" style='border:2px solid #000; background-color: red; background-size: 100% 100%; background-repeat: no-repeat; background-image:url(img/crew_front.png);'></canvas>

		<canvas id="1" width="602" height="610" style='border:2px solid #000; background-color: red; background-size: 100% 100%; background-repeat: no-repeat; background-image:url(img/crew_front.png);'></canvas>

<script  type="text/javascript">

	fabric.Object.prototype.set({

	    transparentCorners: false,

	    cornerColor: 'rgba(102,153,255,0.5)',

	    cornerSize: 12,

	    padding: 5

	});



	var canvas = window._canvas = new fabric.Canvas('1');



	var json = '{"objects":[{"type":"image","left":124,"top":175,"width":135,"height":155,"fill":"rgb(0,0,0)","overlayFill":null,"stroke":null,"strokeWidth":1,"strokeDashArray":null,"scaleX":0.69,"scaleY":0.69,"angle":0,"flipX":false,"flipY":false,"opacity":1,"selectable":false,"hasControls":true,"hasBorders":true,"hasRotatingPoint":true,"transparentCorners":true,"perPixelTargetFind":false,"src":"http://localhost/usuarioform/archivos_subidos/jealeat96@gmail.com/archivo_1432758635.png","filters":[]}],"background":"rgba(0, 0, 0, 0)"}';



	canvas.loadFromJSON(json, canvas.renderAll.bind(canvas), function(o, object) {

	    fabric.log(o, object);

	});



</script>

<!-- left: 24, top: -92, width: -140, height: -145-->

<!-- left: 155, top: 100-->

</body>

</html>

