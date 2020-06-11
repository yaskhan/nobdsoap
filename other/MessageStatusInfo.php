<?php

class MessageStatusInfo
{

    /**
     * @var string $statusCode
     * @access public
     */
    public $statusCode = null;

    /**
     * @var string $statusMessage
     * @access public
     */
    public $statusMessage = null;

    /**
     * @var dateTime $statusDate
     * @access public
     */
    public $statusDate = null;

    /**
     * @param string $statusCode
     * @param string $statusMessage
     * @param dateTime $statusDate
     * @access public
     */
    public function __construct($statusCode, $statusMessage, $statusDate)
    {
      $this->statusCode = $statusCode;
      $this->statusMessage = $statusMessage;
      $this->statusDate = $statusDate;
    }

}
