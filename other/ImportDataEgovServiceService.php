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

require __DIR__ . '/../vendor/autoload.php';

use RobRichards\XMLSecLibs\XMLSecurityDSig;
use RobRichards\XMLSecLibs\XMLSecurityKey;

define('PRIVATE_KEY', dirname(__FILE__) . '/../pk-private_key.pem');
define('CERT_FILE', dirname(__FILE__) . '/../cert-public_key.pem');

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
      return $this->__soapCall('getMessages', array($parameters), null, new SoapHeader());
    }

    /**
     * @param sendDeliveryNotification $parameters
     * @access public
     * @return sendDeliveryNotificationResponse
     */
    public function sendDeliveryNotification(sendDeliveryNotification $parameters)
    {
      return $this->__soapCall('sendDeliveryNotification', array($parameters), null, new SoapHeader());
    }

    /**
     * @param getMessageStatus $parameters
     * @access public
     * @return getMessageStatusResponse
     */
    public function getMessageStatus(getMessageStatus $parameters)
    {
      return $this->__soapCall('getMessageStatus', array($parameters), null, new SoapHeader());
    }

    /**
     * @param sendMessage $parameters
     * @access public
     * @return sendMessageResponse
     */
    public function sendMessage(sendMessage $parameters)
    {
      return $this->__soapCall('sendMessage', array($parameters), null, new SoapHeader());
    }

    function __doRequest($request, $location, $action, $version, $one_way = 0) 
    {
        $request = preg_replace('/<[\/]*BOGUS>/', '', $request);

        $request = $this->integrateCert($request);
        $this->log($request, $location, $action, $version);
        return parent::__doRequest($request, $location, $action, $version);
    }

    public function log($request, $location, $action, $version)
    {
        file_put_contents('soap_.log', $request, FILE_APPEND);
    }
    
    private function integrateCert($request)
    {
        $dom = new DOMDocument();
        $dom->loadXML($request);

	$objDSig = new XMLSecurityDSig('ds');
	$objDSig->setCanonicalMethod(XMLSecurityDSig::EXC_C14N);
	$objDSig->addReference($dom, XMLSecurityDSig::SHA1, ['http://www.w3.org/2000/09/xmldsig#enveloped-signature']);
	$objKey = new XMLSecurityKey(XMLSecurityKey::RSA_SHA1, ['type'=>'private']);
	/* load private key */
	$objKey->loadKey(PRIVATE_KEY, TRUE);
	
	/* if key has Passphrase, set it using $objKey->passphrase = <passphrase> " */
	
	$objDSig->sign($objKey);
	
	/* Add associated public key */
	$objDSig->add509Cert(CERT_FILE, true, false, ['issuerSerial' => true, 'subjectName' => true]);
	$objDSig->appendSignature($dom->getElementsByTagName('typedRequestFormImportData')->item(0));
       
        return $dom->saveXML();
    }
}
