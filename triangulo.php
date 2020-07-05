<?php 
extract($_GET);

switch ($figura) {
	case $figura == 'areatriangulo':
		$regreso="<center>"."<section >"."<form method='get' action='triangulo.php'>"."<label>Ingrese la base : </label>"."<input type='text' name='base'>"."<br>"."<br>"."<label>Ingrese la altura: </label>"."<input type='text' name='altura'>"."<br>"."<br>"."<input type='submit' value='Enviar datos'>"."</form>"."</section>"."</center>";
		break;
	case $figura == 'areacirculo':
	$regreso="<center>"."<section>"."<form method='get' action='triangulo.php'>"."<label>Ingrese el radio: </label>"."<input type='text' name='radio'>"."<br>"."<br>"."<input type='submit' value='Enviar datos'>"."</form>"."</section>"."</center>";
	break;
}

define("pi", 3.1416);

if (isset($radio)) {
	$regreso="El área del círculo es: ".$area=$radio*$radio*pi;
	
}
if (isset($base) && isset($altura)) {
	$regreso="El área del triángulo es: ".$area=($base*$altura)/2;
	
}

include('triangulo1.php');
return $regreso;

 ?>