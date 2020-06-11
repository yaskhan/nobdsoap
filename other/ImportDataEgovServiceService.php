<?php

include_once('SenderInfo.php');
include_once('Property.php');
include_once('MessageData.php');
include_once('ErrorInfo.php');
include_once('DeliveryNotification.php');
include_once('DeliveryStatusInfo.php');
include_once('MessageStatusInfo.php');
include_once('ChangeStatusNotification.php');
include_once('StatusInfo.php');
include_once('MessageState.php');
include_once('getMessageStatus.php');
include_once('getMessageStatusResponse.php');
include_once('getMessages.php');
include_once('getMessagesResponse.php');
include_once('sendDeliveryNotification.php');
include_once('sendDeliveryNotificationResponse.php');
include_once('sendMessage.php');
include_once('sendMessageResponse.php');
include_once('AsyncGetMessagesRequest.php');
include_once('AsyncGetMessagesResponse.php');
include_once('AsyncMessage.php');
include_once('AsyncMessageInfo.php');
include_once('AsyncSendDeliveryNotificationRequest.php');
include_once('AsyncSendDeliveryNotificationResponse.php');
include_once('AsyncGetMessageStatusRequest.php');
include_once('AsyncGetMessageStatusResponse.php');
include_once('AsyncSendMessageRequest.php');
include_once('AsyncSendMessageResponse.php');
include_once('AsyncChangeStatusNotifyResponse.php');
include_once('AsyncChangeStatusNotifyRequest.php');

class ImportDataEgovServiceService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     * @access private
     */
    private static $classmap = array(
      'SenderInfo' => '\SenderInfo',
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
      'AsyncChangeStatusNotifyRequest' => '\AsyncChangeStatusNotifyRequest');

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     * @access public
     */
    public function __construct(array $options = array(), $wsdl = 'IAsyncChanel.wsdl')
    {
      foreach (self::$classmap as $key => $value) {
    if (!isset($options['classmap'][$key])) {
      $options['classmap'][$key] = $value;
    }
  }
  
  parent::__construct($wsdl, $options);
    }

    /**
     * @param getMessages $parameters
     * @access public
     * @return getMessagesResponse
     */
    public function getMessages(getMessages $parameters)
    {
      return $this->__soapCall('getMessages', array($parameters));
    }

    /**
     * @param sendDeliveryNotification $parameters
     * @access public
     * @return sendDeliveryNotificationResponse
     */
    public function sendDeliveryNotification(sendDeliveryNotification $parameters)
    {
      return $this->__soapCall('sendDeliveryNotification', array($parameters));
    }

    /**
     * @param getMessageStatus $parameters
     * @access public
     * @return getMessageStatusResponse
     */
    public function getMessageStatus(getMessageStatus $parameters)
    {
      return $this->__soapCall('getMessageStatus', array($parameters));
    }

    /**
     * @param sendMessage $parameters
     * @access public
     * @return sendMessageResponse
     */
    public function sendMessage(sendMessage $parameters)
    {
      return $this->__soapCall('sendMessage', array($parameters));
    }
    
    function __doRequest($request, $location, $action, $version, $one_way = 0) 
    {
         $this->log($request, $location, $action, $version);

         $response = $this->soapClient->__doRequest($request, $location, 
                                                    $action, $version, 
                                                    $one_way);

         $this->log($response, $location, $action, $version);
         return $response;
    }

    public function log($request, $location, $action, $version)
    {
        file_put_contents('soap_.log', $request, FILE_APPEND);
    }
}
