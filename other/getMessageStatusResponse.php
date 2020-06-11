<?php

class getMessageStatusResponse
{

    /**
     * @var AsyncGetMessageStatusResponse $response
     * @access public
     */
    public $response = null;

    /**
     * @param AsyncGetMessageStatusResponse $response
     * @access public
     */
    public function __construct($response)
    {
      $this->response = $response;
    }

}
