<?php

class DeliveryStatusInfo
{

    /**
     * @var string $receiveStatus
     * @access public
     */
    public $receiveStatus = null;

    /**
     * @var dateTime $statusDate
     * @access public
     */
    public $statusDate = null;

    /**
     * @var string $resendMessage
     * @access public
     */
    public $resendMessage = null;

    /**
     * @var ErrorInfo $error
     * @access public
     */
    public $error = null;

    /**
     * @param string $receiveStatus
     * @param dateTime $statusDate
     * @param string $resendMessage
     * @param ErrorInfo $error
     * @access public
     */
    public function __construct($receiveStatus, $statusDate, $resendMessage, $error)
    {
      $this->receiveStatus = $receiveStatus;
      $this->statusDate = $statusDate;
      $this->resendMessage = $resendMessage;
      $this->error = $error;
    }

}
