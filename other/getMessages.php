<?php

class getMessages
{

    /**
     * @var AsyncGetMessagesRequest $request
     * @access public
     */
    public $request = null;

    /**
     * @param AsyncGetMessagesRequest $request
     * @access public
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

}
