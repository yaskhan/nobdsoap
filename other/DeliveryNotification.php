<?php

class DeliveryNotification
{

    /**
     * @var string $messageId
     * @access public
     */
    public $messageId = null;

    /**
     * @var string $serviceId
     * @access public
     */
    public $serviceId = null;

    /**
     * @var dateTime $notificationDate
     * @access public
     */
    public $notificationDate = null;

    /**
     * @var DeliveryStatusInfo $deliveryStatus
     * @access public
     */
    public $deliveryStatus = null;

    /**
     * @param string $messageId
     * @param string $serviceId
     * @param dateTime $notificationDate
     * @param DeliveryStatusInfo $deliveryStatus
     * @access public
     */
    public function __construct($messageId, $serviceId, $notificationDate, $deliveryStatus)
    {
      $this->messageId = $messageId;
      $this->serviceId = $serviceId;
      $this->notificationDate = $notificationDate;
      $this->deliveryStatus = $deliveryStatus;
    }

}
