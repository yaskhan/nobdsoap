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
            return new SoapVar('<response>
                                    <messageId>123</messageId>
                                    <correlationId>23</correlationId>
                                    <responseDate>33</responseDate>
                                    <sessionId>5545454</sessionId>
                                </response>', XSD_ANYXML);
        } else if ($rand == 2) {
			return new SoapFault("Server", "Сообщение об ошибке");
        }
    }
    
    public function getMessageStatus()
    {
        return new SoapVar('<response>
                                <sessionId>2464f684-d085-45ac-b63e-9bc951696b39</sessionId>
                                <messageState>1</messageState>
                                <responseDate>2019-08-21T11:09:05.719+06:00</responseDate>
                                <status>
                                    <statusCode>200</statusCode>
                                    <statusMessage>OK</statusMessage>
                                    <statusDate>2019-08-21T11:09:05.719+06:00</statusDate>
                                </status>
			    </response>', XSD_ANYXML);
    }
}
