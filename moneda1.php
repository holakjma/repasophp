<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link href="estilos.css" rel="stylesheet" type="text/css"/>
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
<title>Ejercicio 1: Convertidor de moneda</title>
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
	<section>
		<form method="get" name="conversor" action="moneda.php">
			<label>Captura cantidad</label>
			<input type="text" name="moneda1"><br><br>
  			<label>Selecciona tu moneda:
  			<select name="lista1">
  				<option value="dolar">Dolar</option>
  				<option value="peso">Peso</option>
  				<option value="euro">Euro</option>
  			</select><br><br>
  		</label><br>

  		<label>Selecciona la moneda a la que quieres convertir:
  			<select name="lista2">
  				<option value="dolar1">Dolar</option>
  				<option value="peso1">Peso</option>
  				<option value="euro1">Euro</option>
  			</select>
  		</label><br><br>

  		<input type="submit" value="Convertir">

</form>

		<p></p>
	
<?php
if(isset($x))
{
  echo $x;
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