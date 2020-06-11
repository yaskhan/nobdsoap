<?php

class sendDeliveryNotificationResponse
{

    /**
     * @var AsyncSendDeliveryNotificationResponse $response
     * @access public
     */
    public $response = null;

    /**
     * @param AsyncSendDeliveryNotificationResponse $response
     * @access public
     */
    public function __construct($response)
    {
      $this->response = $response;
    }

}
