<?php

class sendMessageResponse
{

    /**
     * @var AsyncSendMessageResponse $response
     * @access public
     */
    public $response = null;

    /**
     * @param AsyncSendMessageResponse $response
     * @access public
     */
    public function __construct($response)
    {
      $this->response = $response;
    }

}
