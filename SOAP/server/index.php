<?php

//Server SOAP

function convert($valore, $valuta){

  $tassiCambioPath = "tassiCambio.json";
  $conversione = json_decode(file_get_contents($tassiCambio), true)

  $valutaConvertita = number_format($valore * $conversione, 2); 

  $conv = "conversione euro-$valuta: " . $valutaConvertita;
  return $conv; 
}

$server= new SoapServer("test.wsdl");
$server->addFunction("convert");
$server->handle();

?>

