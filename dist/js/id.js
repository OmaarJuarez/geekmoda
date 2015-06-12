function enviar()
{
alert("eliminado correctamente") ;
location.href="principal.php" ;
}

function comentario(id){
	location.href="app/form.php?id="+id ;
}

function redirec(id){
    location.href="form.php?id="+id ;
}

function seguir(id){
    location.href="app/seguir.php?id="+id ;
}

function seguidores(id){
    location.href="seguidores.php?id="+id ;
}