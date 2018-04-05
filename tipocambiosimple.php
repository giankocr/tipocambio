<?php

// EJEMPLO DE UTILIZACION
require_once("Indicador.php");

// Constructor consulta tipo cambio
$i = new Indicador();

// Metodo recibe el tipo de cambio Indicador::VENTA o Indicador::COMPRA
$venta = $i->obtenerIndicadorEconomico(Indicador::VENTA);
$compra = $i->obtenerIndicadorEconomico(Indicador::COMPRA);
//$venta= '{"venta":'.$venta.'}';


//The JSON data.
echo $venta;


?>
