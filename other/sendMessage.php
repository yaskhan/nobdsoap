<?php

class sendMessage
{

    /**
     * @var AsyncSendMessageRequest $request
     * @access public
     */
    public $request = null;

    /**
     * @param AsyncSendMessageRequest $request
     * @access public
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

}
