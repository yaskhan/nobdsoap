<?php

class AsyncSendDeliveryNotificationRequest
{

    /**
     * @var DeliveryNotification $notification
     * @access public
     */
    public $notification = null;

    /**
     * @var dateTime $requestDate
     * @access public
     */
    public $requestDate = null;

    /**
     * @var SenderInfo $sender
     * @access public
     */
    public $sender = null;

    /**
     * @param DeliveryNotification $notification
     * @param dateTime $requestDate
     * @param SenderInfo $sender
     * @access public
     */
    public function __construct($notification, $requestDate, $sender)
    {
      $this->notification = $notification;
      $this->requestDate = $requestDate;
      $this->sender = $sender;
    }

}
