<?php

class MessageData
{

    /**
     * @var anyType $data
     * @access public
     */
    public $data = null;

    /**
     * @param anyType $data
     * @access public
     */
    public function __construct($data)
    {
      $this->data = $data;
    }

}
