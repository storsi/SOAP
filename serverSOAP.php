<?php
    function converti($valore) {
        return $valore / 2.54;
    }

    $server = new SoapServer("file.wsdl");
    $server->addFunction("converti");
    $server->handle();
?>