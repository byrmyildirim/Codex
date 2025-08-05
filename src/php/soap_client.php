<?php
// Basic example of calling the Ticimax Product WSDL using PHP's SOAP client.
$wsdl = "http://www.goatjump.com/Servis/UrunServis.svc?wsdl";
$options = [
    'trace' => true,
    'cache_wsdl' => WSDL_CACHE_NONE,
];

try {
    $client = new SoapClient($wsdl, $options);
    // Parameters would depend on the actual WSDL definition
    $params = ['UrunKodu' => '12345'];
    $response = $client->__soapCall('UrunGetir', [$params]);
    print_r($response);
} catch (SoapFault $e) {
    echo 'SOAP Error: ' . $e->getMessage();
}
