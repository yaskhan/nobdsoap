<?php

class AsyncSendDeliveryNotificationResponse
{

    /**
     * @var string $notificationId
     * @access public
     */
    public $notificationId = null;

    /**
     * @var dateTime $responseDate
     * @access public
     */
    public $responseDate = null;

    /**
     * @var string $sessionId
     * @access public
     */
    public $sessionId = null;

    /**
     * @param string $notificationId
     * @param dateTime $responseDate
     * @param string $sessionId
     * @access public
     */
    public function __construct($notificationId, $responseDate, $sessionId)
    {
      $this->notificationId = $notificationId;
      $this->responseDate = $responseDate;
      $this->sessionId = $sessionId;
    }

}
