<?php

class getMessageStatus
{

    /**
     * @var AsyncGetMessageStatusRequest $request
     * @access public
     */
    public $request = null;

    /**
     * @param AsyncGetMessageStatusRequest $request
     * @access public
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

}
