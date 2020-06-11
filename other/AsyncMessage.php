<?php

class AsyncMessage
{

    /**
     * @var AsyncMessageInfo $messageInfo
     * @access public
     */
    public $messageInfo = null;

    /**
     * @var MessageData $messageData
     * @access public
     */
    public $messageData = null;

    /**
     * @param AsyncMessageInfo $messageInfo
     * @param MessageData $messageData
     * @access public
     */
    public function __construct($messageInfo, $messageData)
    {
      $this->messageInfo = $messageInfo;
      $this->messageData = $messageData;
    }

}
