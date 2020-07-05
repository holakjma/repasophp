<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link href="estilos.css" rel="stylesheet" type="text/css"/>
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
<title>Ejercicio 3: Contador de días</title>
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
<section style=" height:740px;">

	<?php

$dia= date ('d');
echo "<h1>"."ciclo for"."</h1>";
for ($i=1; $i<=$dia ; $i++) { 
	echo "<p> Día".$i."</p>";
}
$m=1;
echo "<h1>"."Ciclo while"."</h1>";
while ($m <= $dia) {
	echo "<p> Día".$m."</p>";
	$m++;
}
$K=1;
echo "<h1>"."Ciclo do while"."</h1>";
do {
	echo "<p> Día".$K."</p>";
	$K++;
} while ($K <= $dia);

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