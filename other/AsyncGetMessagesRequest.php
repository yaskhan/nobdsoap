<?php

class AsyncGetMessagesRequest
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
     * @var dateTime $requestDate
     * @access public
     */
    public $requestDate = null;

    /**
     * @var string $serviceId
     * @access public
     */
    public $serviceId = null;

    /**
     * @var SenderInfo $sender
     * @access public
     */
    public $sender = null;

    /**
     * @var int $amount
     * @access public
     */
    public $amount = null;

    /**
     * @var Property[] $properties
     * @access public
     */
    public $properties = null;

    /**
     * @param string $messageId
     * @param string $correlationId
     * @param dateTime $requestDate
     * @param string $serviceId
     * @param SenderInfo $sender
     * @param int $amount
     * @access public
     */
    public function __construct($messageId, $correlationId, $requestDate, $serviceId, $sender, $amount)
    {
      $this->messageId = $messageId;
      $this->correlationId = $correlationId;
      $this->requestDate = $requestDate;
      $this->serviceId = $serviceId;
      $this->sender = $sender;
      $this->amount = $amount;
    }

}
