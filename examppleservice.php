<?php
session_start();

header("Content-Type: text/xml; charset=utf-8");
header('Cache-Control: no-store, no-cache');
header('Expires: '.date('r'));

require 'other/ImportDataEgovServiceService.php';
require 'exampleclass.php';

ini_set("soap.wsdl_cache_enabled", "0"); // отключаем кеширование WSDL-файла для тестирования


$options = ['uri' => "http://{$_SERVER['HTTP_HOST']}/examppleservice.php",
     'classmap' => 
      ['SenderInfo' => '\SenderInfo',
      'Property' => '\Property',
      'MessageData' => '\MessageData',
      'ErrorInfo' => '\ErrorInfo',
      'DeliveryNotification' => '\DeliveryNotification',
      'DeliveryStatusInfo' => '\DeliveryStatusInfo',
      'MessageStatusInfo' => '\MessageStatusInfo',
      'ChangeStatusNotification' => '\ChangeStatusNotification',
      'StatusInfo' => '\StatusInfo',
      'getMessageStatus' => '\getMessageStatus',
      'getMessageStatusResponse' => '\getMessageStatusResponse',
      'getMessages' => '\getMessages',
      'getMessagesResponse' => '\getMessagesResponse',
      'sendDeliveryNotification' => '\sendDeliveryNotification',
      'sendDeliveryNotificationResponse' => '\sendDeliveryNotificationResponse',
      'sendMessage' => '\sendMessage',
      'sendMessageResponse' => '\sendMessageResponse',
      'AsyncGetMessagesRequest' => '\AsyncGetMessagesRequest',
      'AsyncGetMessagesResponse' => '\AsyncGetMessagesResponse',
      'AsyncMessage' => '\AsyncMessage',
      'AsyncMessageInfo' => '\AsyncMessageInfo',
      'AsyncSendDeliveryNotificationRequest' => '\AsyncSendDeliveryNotificationRequest',
      'AsyncSendDeliveryNotificationResponse' => '\AsyncSendDeliveryNotificationResponse',
      'AsyncGetMessageStatusRequest' => '\AsyncGetMessageStatusRequest',
      'AsyncGetMessageStatusResponse' => '\AsyncGetMessageStatusResponse',
      'AsyncSendMessageRequest' => '\AsyncSendMessageRequest',
      'AsyncSendMessageResponse' => '\AsyncSendMessageResponse',
      'AsyncChangeStatusNotifyResponse' => '\AsyncChangeStatusNotifyResponse',
      'AsyncChangeStatusNotifyRequest' => '\AsyncChangeStatusNotifyRequest']
];
$server = new SoapServer(null, $options);
$server->setClass('TestSoapServer');
$server->setPersistence(SOAP_PERSISTENCE_SESSION);

ob_start();
$server->handle();
$out1 = ob_get_contents();
$out1 = preg_replace("/<[\/]*return.*?>/", '', $out1);

ob_end_clean();
echo($out1);

