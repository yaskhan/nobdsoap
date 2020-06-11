<?php

class AsyncGetMessageStatusResponse
{

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
     * @param string $messageState
     * @param MessageStatusInfo $status
     * @param dateTime $responseDate
     * @param string $sessionId
     * @access public
     */
    public function __construct($messageState, $status, $responseDate, $sessionId)
    {
      $this->messageState = $messageState;
      $this->status = $status;
      $this->responseDate = $responseDate;
      $this->sessionId = $sessionId;
    }

}
