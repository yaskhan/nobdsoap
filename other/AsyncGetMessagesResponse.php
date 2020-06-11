<?php

class AsyncGetMessagesResponse
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
     * @var AsyncMessage[] $messages
     * @access public
     */
    public $messages = null;

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
