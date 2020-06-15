<?php

session_start();

require 'other/ImportDataEgovServiceService.php';
$loader = require 'vendor/autoload.php';
spl_autoload_register(function ($class_name) {
    include 'src/'. basename($class_name) . '.php';
});


use AsyncChannelNs\RequestFormImport\TypedRequestFormImportData;
use AsyncChannelNs\RequestFormImport\TypedQuestionnaireValuesType;
use AsyncChannelNs\RequestFormImport\TypedQuestionnaireValueType;
use AsyncChannelNs\RequestFormImport\TypedFileDataType;

ini_set("soap.wsdl_cache_enabled", "0"); // отключаем кеширование WSDL-файла для тестирования

try {
    $client = new ImportDataEgovServiceService(['trace' => 1], "http://{$_SERVER['HTTP_HOST']}/IAsyncChanel.wsdl.php");
/*
    $req = new AsyncGetMessagesRequest('1', '1', date(DATE_ATOM), '1', new SenderInfo('TarSPU', '123'), 0);
    $prop[] = new Property('test123', '555');
    $prop[] = new Property('test456', '666');
    $req->properties = $prop;
    $client->getMessages(new getMessages($req));
*/    
    // request  example.txt
    $inf = new AsyncMessageInfo('171468168', '2516623',
            'MON_ES_REQUEST_FORM_IMPORT', 'REQUEST', '',  date(DATE_ATOM), 
            new SenderInfo('pep', '3d66f74fd48822744da1ff290dd7c6b3c664f833e0aaca3671f93eefbf0ba6c4'), '{a7f4b65f-d9c8-4303-9ad7-bfd3b91e0d33}');
    
    $inf->properties = [new Property('ADDL_CLIENT_KEY', 'RR_P50.06')];
    
    
    
    $datatr = new TypedRequestFormImportData();
    $datatr->setImportSource('EGOV_PORTAL');
    $datatr->setUpdatedValues([
        setUpdKV('School_Name_applic', 'ММ №18 ОМ'),
        setUpdKV('AreaCode_applic', '711310000'),
        setUpdKV('country', 'КАЗАХСТАН'),
        /* ... */
        setUpdKV('doc_expirationdate', '2023-02-03', 2),
        setUpdKV('PMPK_info', 'pasta.txt', 3)
    ]);
    
    $datatr->setExternalRequestChainId('2516594');
    $datatr->setExternalRequestId('10109001186061');
    $datatr->setRequestOriginSystemId('EGOV_PORTAL');
    $datatr->setRequesterIin('860717450455');
    $datatr->setServiceProviderBin('810840000017');
    $datatr->setServiceType('UNIVERSITY_ADMISSION');
    
    
    $data = new MessageData($datatr);
    $req = new AsyncSendMessageRequest($inf, $data);
    $ret = $client->sendMessage(new sendMessage($req));
    if(!empty($ret->response)) {
        $ret = $client->getMessageStatus(new getMessageStatus(new AsyncGetMessageStatusRequest('171468168', date(DATE_ATOM), 
                                    new SenderInfo('pep', '3d66f74fd48822744da1ff290dd7c6b3c664f833e0aaca3671f93eefbf0ba6c4'))));
            var_dump($ret);
    }
    //echo($client->__getLastResponse());

} catch(SoapFault $e){
    var_dump($e);
}

function setUpdKV($key, $val, $type = 1) {
    $tmp = new TypedQuestionnaireValuesType();
    $tmp2 = new TypedQuestionnaireValueType();
    if($type == 1) {
       $tmp3 = $tmp2->setString($val);
    } else if ($type == 2) {
       $tmp3 = $tmp2->setDate(new DateTime($val));
    } else if ($type == 3) {
        $tmp3 = $tmp2->setFileData(new TypedFileDataType($val));
    }
    
    $tmp->setCode($key);
    $tmp->setValues([$tmp3]);
    return $tmp;
}