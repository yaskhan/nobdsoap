<?php

class AsyncChangeStatusNotifyRequest
{

    /**
     * @var ChangeStatusNotification $notification
     * @access public
     */
    public $notification = null;

    /**
     * @var dateTime $requestDate
     * @access public
     */
    public $requestDate = null;

    /**
     * @var string $sessionId
     * @access public
     */
    public $sessionId = null;

    /**
     * @param ChangeStatusNotification $notification
     * @param dateTime $requestDate
     * @param string $sessionId
     * @access public
     */
    public function __construct($notification, $requestDate, $sessionId)
    {
      $this->notification = $notification;
      $this->requestDate = $requestDate;
      $this->sessionId = $sessionId;
    }

}
