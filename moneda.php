<?php
//convertidor
$moneda=$_GET['lista1'];
$moneda2=$_GET['lista2'];

switch ($moneda and $moneda2){
	case $moneda == "dolar" and $moneda2 =="peso1":
	$regreso="<div>"."$".$_GET['moneda1']*23.16." MXN"."<div>";
	break;

	case $moneda == "dolar" and $moneda2 =="euro1":
	$x="<div>"."€".$_GET['moneda1']*0.89."<div>";
	break;

	case $moneda == "peso" and $moneda2 =="dolar1":
	$x="<div>"."$".$_GET['moneda1']*0.043."<div>";
	break;

	case $moneda == "peso" and $moneda2 =="euro1":
	$x="<div>"."€".$_GET['moneda1']*0.038."<div>";
	break;

	case $moneda == "euro" and $moneda2 =="dolar1":
	$x="<div>"."$".$_GET['moneda1']*1.13."<div>";
	break;

	case $moneda == "euro" and $moneda2 =="peso1":
	$x="<div>"."$".$_GET['moneda1']*26.09." MXN"."<div>";
	break;
}

include('moneda1.php');
return $x;

?>
	