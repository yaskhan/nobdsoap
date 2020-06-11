<?php

class SenderInfo
{

    /**
     * @var string $senderId
     * @access public
     */
    public $senderId = null;

    /**
     * @var string $password
     * @access public
     */
    public $password = null;

    /**
     * @param string $senderId
     * @param string $password
     * @access public
     */
    public function __construct($senderId, $password)
    {
      $this->senderId = $senderId;
      $this->password = $password;
    }

}
