<?php

class AsyncChangeStatusNotifyResponse
{

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
     * @param dateTime $responseDate
     * @param string $sessionId
     * @access public
     */
    public function __construct($responseDate, $sessionId)
    {
      $this->responseDate = $responseDate;
      $this->sessionId = $sessionId;
    }

}
