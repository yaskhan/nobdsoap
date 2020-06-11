<?php

class AsyncSendMessageResponse
{

    /**
     * @var string $messageId
     * @access public
     */
    public $messageId = null;

    /**
     * @var string $correlationId
     * @access public
     */
    public $correlationId = null;

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
     * @param string $messageId
     * @param string $correlationId
     * @param dateTime $responseDate
     * @param string $sessionId
     * @access public
     */
    public function __construct($messageId, $correlationId, $responseDate, $sessionId)
    {
      $this->messageId = $messageId;
      $this->correlationId = $correlationId;
      $this->responseDate = $responseDate;
      $this->sessionId = $sessionId;
    }

}
