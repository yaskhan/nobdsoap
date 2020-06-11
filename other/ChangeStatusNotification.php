<?php

class ChangeStatusNotification
{

    /**
     * @var string $notificationId
     * @access public
     */
    public $notificationId = null;

    /**
     * @var string $messageId
     * @access public
     */
    public $messageId = null;

    /**
     * @var dateTime $notificationDate
     * @access public
     */
    public $notificationDate = null;

    /**
     * @var string $messageState
     * @access public
     */
    public $messageState = null;

    /**
     * @var MessageStatusInfo $status
     * @access public
     */
    public $status = null;

    /**
     * @var ErrorInfo $error
     * @access public
     */
    public $error = null;

    /**
     * @param string $notificationId
     * @param string $messageId
     * @param dateTime $notificationDate
     * @param string $messageState
     * @param MessageStatusInfo $status
     * @param ErrorInfo $error
     * @access public
     */
    public function __construct($notificationId, $messageId, $notificationDate, $messageState, $status, $error)
    {
      $this->notificationId = $notificationId;
      $this->messageId = $messageId;
      $this->notificationDate = $notificationDate;
      $this->messageState = $messageState;
      $this->status = $status;
      $this->error = $error;
    }

}
