<?php
    $wsdl_url = "file.wsdl";

    if(isset($_POST["valoreInput"]) && !empty($_POST["valoreInput"])) {
        $client = new SoapClient($wsdl_url, ["location" => "serverSOAP.php"]);

        print_r($client->converti(htmlentities($_POST["valoreInput"])));
    }
?>