<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Topy 2015</title>
<link rel="stylesheet" type="text/css" href="miWeb2.css">
<style type="text/css"> 
</style>   
</head>  
<body>
<div id="container1" onmouseover="transicionDentro()" onmouseout="transicionFuera()">     
</div>
    <iframe id="video" width="380" height="250" src="https://www.youtube.com/embed/videoseries?list=PLQBly0q5deZZPH3J25o_jcJjfohO3o6T7"  frameborder="0" allowfullscreen></iframe>
<div id="container2"> 

<img id="usuarioImagen" src="GraciasMondrian.jpg"/>
</div>   
</form>







</body>
<script>
//Transición que se lanza cuando accedemos al div container1
function transicionDentro()
    {
         document.getElementById("container1").innerHTML="<style>@-webkit-keyframes fondo{0%{opacity:1; z-index: 3;} 50%{opacity:0.5; z-index: 2;} 100%{opacity:0;z-index: -1;}} #container1{-webkit-animation:fondo  3s;  animation-fill-mode: forwards; }</style>";
    }

</script>
</html>
