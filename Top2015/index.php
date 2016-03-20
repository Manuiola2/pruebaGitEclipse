
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Topy 2015</title>
<link rel="stylesheet" type="text/css" href="miWeb.css">
<style>  
</style>
</head>
<body>
<div id="container1" onmouseover="transicionDentro()" onmouseout="transicionFuera()">

</div>
<iframe id="video" width="380" height="250" src="https://www.youtube.com/embed/videoseries?list=PLQBly0q5deZY0RS8F2fzEMafXjvZyTK3Y" frameborder="0" allowfullscreen></iframe>


<div id="container2">
<form action="Model.php" method="post">
<img id="usuarioImagen" src="usuarioMondrian.jpg"/><input  type="text" id="usuarioInput" name="usuario">
</div>

<div id="containerCanciones">
<img id="cancionImagen" src="Cancion1.jpg"/><input type="text" id="cancionInput" name="cancion1">
<img id="cancionImagen" src="Cancion2.jpg"/><input type="text" id="cancionInput" name="cancion2">
<img id="cancionImagen" src="Cancion3.jpg"/><input type="text" id="cancionInput" name="cancion3">
<img id="cancionImagen" src="Cancion4.jpg"/><input type="text" id="cancionInput" name="cancion4">
<img id="cancionImagen" src="Cancion5.jpg"/><input type="text" id="cancionInput" name="cancion5">
<input type="submit"></input>
</form>

</div>
<div id="container3">

<iframe width="100%" height="100%" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/184028831&amp;color=0066cc&amp;auto_play=false&amp;hide_related=false&amp;show_comments=false&amp;show_user=true&amp;show_reposts=false"></iframe>

</div>



</body>
<script>
//Transición que se lanza cuando accedemos al div container1
function transicionDentro()
{
	document.getElementById("container1").innerHTML="<style>@-webkit-keyframes fondo{0%{opacity:1; z-index: 3;} 50%{opacity:0.5; z-index: 2;} 100%{opacity:0;z-index: -1;}} #container1{-webkit-animation:fondo  3s;  animation-fill-mode: forwards; }</style>";
}

</script>
</html>

