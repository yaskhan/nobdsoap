<?php
/*
  * Server
  */
class TestSoapServer
{

    public function getMessages()
    {
        return new SoapVar('<ns1:getMessagesResult>Hello, World!</ns1:getMessagesResult>', XSD_ANYXML);
    }
    
    public function sendMessage()
    {
        $rand = random_int(1, 2);
        if($rand == 1) {
            /* Пример чтения пришедших XML данных */
            $postdata = file_get_contents("php://input");
            $dom = new DOMDocument();
            $dom->loadXML($postdata);
            $rr = $dom->getElementsByTagName('importSource')->item(0)->nodeValue;
			
            return new sendMessageResponse(new AsyncSendMessageResponse($rr,'dsfg','fdgh','3211'));                                     
        } else if ($rand == 2) {
            return new SoapFault("Server", "Сообщение об ошибке");
        }
    }
    
    public function getMessageStatus()
    {
        return new getMessageStatusResponse(
                new AsyncGetMessageStatusResponse(MessageState::DELIVERED,
                        new MessageStatusInfo(200, 'OK', date(DATE_ATOM)),
                            date(DATE_ATOM),'2464f684-d085-45ac-b63e-9bc951696b39'));
    }
}
