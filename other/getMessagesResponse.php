<?php

class getMessagesResponse
{

    /**
     * @var AsyncGetMessagesResponse $response
     * @access public
     */
    public $response = null;

    /**
     * @param AsyncGetMessagesResponse $response
     * @access public
     */
    public function __construct($response)
    {
      $this->response = $response;
    }

}
