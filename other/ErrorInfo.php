<?php

class ErrorInfo
{

    /**
     * @var string $errorCode
     * @access public
     */
    public $errorCode = null;

    /**
     * @var string $errorMessage
     * @access public
     */
    public $errorMessage = null;

    /**
     * @var string $errorData
     * @access public
     */
    public $errorData = null;

    /**
     * @var dateTime $errorDate
     * @access public
     */
    public $errorDate = null;

    /**
     * @var ErrorInfo $subError
     * @access public
     */
    public $subError = null;

    /**
     * @var string $sessionId
     * @access public
     */
    public $sessionId = null;

    /**
     * @param string $errorCode
     * @param string $errorMessage
     * @param string $errorData
     * @param dateTime $errorDate
     * @param ErrorInfo $subError
     * @param string $sessionId
     * @access public
     */
    public function __construct($errorCode, $errorMessage, $errorData, $errorDate, $subError, $sessionId)
    {
      $this->errorCode = $errorCode;
      $this->errorMessage = $errorMessage;
      $this->errorData = $errorData;
      $this->errorDate = $errorDate;
      $this->subError = $subError;
      $this->sessionId = $sessionId;
    }

}

