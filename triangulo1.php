<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link href="estilos.css" rel="stylesheet" type="text/css"/>
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
<title>Ejercicio 2: Área del triángulo o circulo</title>
</head>
<header>
<nav>
<ul>
   <a href="index.php">Indice</a>
   <a href="moneda1.php">Ejercicio 1: Convertidor de moneda</a>
   <a href="triangulo1.php">Ejercicio 2: Área del triángulo o circulo</a>
   <a href="dias1.php">Ejercicio 3: Contador de días</a>
</ul>
</nav>
</header>
<section style="background-color:#FFDAB9;">
	<img src="im2.png" id="imagen2" style="width:300px; height:150px;">	
	<form method="get" action="triangulo.php">
		<select name="figura">
			<option value="areatriangulo">Área triángulo</option>
			<option value="areacirculo">Área círculo</option>
		</select>

		<input type="submit" name="submit">
	</form>


<?php
if(isset($regreso))
{
  echo $regreso;
}
else
?> 
</section>
<footer>

   <article>
    <p id="datos"><br><br>Martínez Aguiñaga Karla Julieta  19002335 <br> 5 de Julio de 2020 <br> Correo: karlamtz8@gmail.com</p>
    <img src="im1.jpg" id="imagen1">
   </article>
</footer>
</body>
</html>