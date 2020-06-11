<?php

class AsyncMessageInfo
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
     * @var string $serviceId
     * @access public
     */
    public $serviceId = null;

    /**
     * @var string $messageType
     * @access public
     */
    public $messageType = null;

    /**
     * @var string $routeId
     * @access public
     */
    public $routeId = null;

    /**
     * @var dateTime $messageDate
     * @access public
     */
    public $messageDate = null;

    /**
     * @var SenderInfo $sender
     * @access public
     */
    public $sender = null;

    /**
     * @var Property[] $properties
     * @access public
     */
    public $properties = null;

    /**
     * @var string $sessionId
     * @access public
     */
    public $sessionId = null;

    /**
     * @param string $messageId
     * @param string $correlationId
     * @param string $serviceId
     * @param string $messageType
     * @param string $routeId
     * @param dateTime $messageDate
     * @param SenderInfo $sender
     * @param string $sessionId
     * @access public
     */
    public function __construct($messageId, $correlationId, $serviceId, $messageType, $routeId, $messageDate, $sender, $sessionId)
    {
      $this->messageId = $messageId;
      $this->correlationId = $correlationId;
      $this->serviceId = $serviceId;
      $this->messageType = $messageType;
      $this->routeId = $routeId;
      $this->messageDate = $messageDate;
      $this->sender = $sender;
      $this->sessionId = $sessionId;
    }

}
