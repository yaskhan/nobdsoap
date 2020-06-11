<?php

class AsyncGetMessageStatusRequest
{

    /**
     * @var string $messageId
     * @access public
     */
    public $messageId = null;

    /**
     * @var dateTime $requestDate
     * @access public
     */
    public $requestDate = null;

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
     * @param string $messageId
     * @param dateTime $requestDate
     * @param SenderInfo $sender
     * @access public
     */
    public function __construct($messageId, $requestDate, $sender)
    {
      $this->messageId = $messageId;
      $this->requestDate = $requestDate;
      $this->sender = $sender;
    }

}
