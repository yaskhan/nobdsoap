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
        return new SoapVar('
            <ns2:sendMessage
                xmlns:ns2="http://bip.bee.kz/AsyncChannel/v10/Types">
                <request>
                    <messageInfo>
                        <messageId>YzgtjaqW-TQvK-PqOu-57SN-70yBQmLZuZxv</messageId>
                        <correlationId>2516623</correlationId>
                        <serviceId>MON_ES_REQUEST_FORM_IMPORT</serviceId>
                        <messageType>NOTIFICATION</messageType>
                        <messageDate>2020-05-31T21:10:20+06:00</messageDate>
                        <sender>
                            <senderId>es</senderId>
                            <password>es</password>
                        </sender>
                    </messageInfo>
                    <messageData>
                        <data>
                            <typedRequestFormImportData>
                                <importSource>ORLEU</importSource>
                                <updatedValues>
                                    <code>processing_status</code>
                                    <values>
                                        <domainItemData>
                                            <code>IN_PROCESSING</code>
                                            <kkValue>Өңделу ұстінде</kkValue>
                                            <ruValue>В обработке</ruValue>
                                        </domainItemData>
                                    </values>
                                </updatedValues>
                                <externalRequestChainId>2516623</externalRequestChainId>
                                <externalRequestId>10109001186066</externalRequestId>
                                <processingStatus>IN_PROGRESS</processingStatus>
                                <requesterIin>860717450455</requesterIin>
                                <resolutionType>NO_RESOLUTION</resolutionType>
                            </typedRequestFormImportData>
                        </data>
                    </messageData>
                </request>
            </ns2:sendMessage>', XSD_ANYXML);
    }
}
