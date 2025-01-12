<?php

//Client SOAP

$wsdl_url = "http://127.0.0.1/SOAP/server/test.wsdl";

if (isset($_POST['valore']) && !empty($_POST['valore']) && isset($_POST['valuta']) && !empty($_POST['valuta'])){ 

    try {

        $client = new SoapClient($wsdl_url,["location" =>"http://127.0.0.1/SOAP/server/"]);

        $valore = htmlentities($_POST['valore'])
        $valuta = htmlentities($_POST['valuta'])
        $risposta = $client->convert($valore, $valuta);

        echo $risposta;

    } catch (SoapFault $e){
        echo '<br>Errore nel client SOAP: ' . $e->getMessage();
    }
}

?>

