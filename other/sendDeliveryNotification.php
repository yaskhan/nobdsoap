<?php

class sendDeliveryNotification
{

    /**
     * @var AsyncSendDeliveryNotificationRequest $request
     * @access public
     */
    public $request = null;

    /**
     * @param AsyncSendDeliveryNotificationRequest $request
     * @access public
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

}
