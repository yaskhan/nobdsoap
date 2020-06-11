<?php

require 'other/ImportDataEgovServiceService.php';

ini_set("soap.wsdl_cache_enabled", "0"); // отключаем кеширование WSDL-файла для тестирования

try {
    $client = new ImportDataEgovServiceService(['trace' => 1], "http://{$_SERVER['HTTP_HOST']}/IAsyncChanel.wsdl.php");
/*
    $req = new AsyncGetMessagesRequest('1', '1', date('Y-m-d\TH:i:sP'), '1', new SenderInfo('TarSPU', '123'), 0);
    $prop[] = new Property('test123', '555');
    $prop[] = new Property('test456', '666');
    $req->properties = $prop;
    $client->getMessages(new getMessages($req));
*/    
    $inf = new AsyncMessageInfo('YzgtjaqW-TQvK-PqOu-57SN-70yBQmLZuZxv', '2516623',
                                'MON_ES_REQUEST_FORM_IMPORT', 'REQUEST', '',  date('Y-m-d\TH:i:sP'), new SenderInfo('TarSPU', '123'), '{a7f4b65f-d9c8-4303-9ad7-bfd3b91e0d33}');
    $data = new MessageData(null);
    $req = new AsyncSendMessageRequest($inf, $data);
    $ret = $client->sendMessage(new sendMessage($req));
    
    echo($client->__getLastResponse());
    
} catch(SoapFault $e){
    var_dump($e);
}