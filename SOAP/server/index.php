<?php

//Server SOAP

function convert($valore, $valuta){

  $tassiCambio = ["USD" => 1.04, "GBP" => 0.83, "CNY" => 7.59,"JPY" => 163.41];

  $conversione = $tassiCambio[$valuta];
  $valutaConvertita = number_format($valore * $conversione, 2); 

  $conv = "conversione euro-$valuta: " . $valutaConvertita;
  return $conv; 
}

$server= new SoapServer("test.wsdl");
$server->addFunction("convert");
$server->handle();

?>

