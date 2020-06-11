<?php
header("Content-Type: text/xml; charset=utf-8");
header('Cache-Control: no-store, no-cache');
header('Expires: '.date('r'));

require 'exampleclass.php';

ini_set("soap.wsdl_cache_enabled", "0"); // отключаем кеширование WSDL-файла для тестирования

$options = ['uri' => "http://{$_SERVER['HTTP_HOST']}/examppleservice.php"];
$server = new SoapServer(null, $options);
$server->setClass('TestSoapServer');
$server->handle();
