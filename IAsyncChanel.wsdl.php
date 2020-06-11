<?php

header("Content-Type: text/xml; charset=utf-8");
echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>";
?>
<wsdl:definitions xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:wsdl="http://schemas.xmlsoap.org/wsdl/" xmlns:tns="http://service.ws.es.kz/" xmlns:soap="http://schemas.xmlsoap.org/wsdl/soap/" xmlns:ns3="http://schemas.xmlsoap.org/soap/http" xmlns:ns1="http://bip.bee.kz/AsyncChannel/v10/Interfaces" name="ImportDataEgovServiceService" targetNamespace="http://service.ws.es.kz/">
  <wsdl:import location="http://<?=$_SERVER['HTTP_HOST']?>/IAsyncChannelImport.wsdl" namespace="http://bip.bee.kz/AsyncChannel/v10/Interfaces">
    </wsdl:import>
  <wsdl:binding name="ImportDataEgovServiceServiceSoapBinding" type="ns1:IAsyncChannel">
    <soap:binding style="document" transport="http://schemas.xmlsoap.org/soap/http"/>
    <wsdl:operation name="getMessages">
      <soap:operation soapAction="" style="document"/>
      <wsdl:input name="getMessages">
        <soap:body use="literal"/>
      </wsdl:input>
      <wsdl:output name="getMessagesResponse">
        <soap:body use="literal"/>
      </wsdl:output>
      <wsdl:fault name="GetMessagesGetMessagesFaultMsg">
        <soap:fault name="GetMessagesGetMessagesFaultMsg" use="literal"/>
      </wsdl:fault>
    </wsdl:operation>
    <wsdl:operation name="sendDeliveryNotification">
      <soap:operation soapAction="" style="document"/>
      <wsdl:input name="sendDeliveryNotification">
        <soap:body use="literal"/>
      </wsdl:input>
      <wsdl:output name="sendDeliveryNotificationResponse">
        <soap:body use="literal"/>
      </wsdl:output>
      <wsdl:fault name="SendDeliveryNotificationSendDeliveryNotificationFaultMsg">
        <soap:fault name="SendDeliveryNotificationSendDeliveryNotificationFaultMsg" use="literal"/>
      </wsdl:fault>
    </wsdl:operation>
    <wsdl:operation name="getMessageStatus">
      <soap:operation soapAction="" style="document"/>
      <wsdl:input name="getMessageStatus">
        <soap:body use="literal"/>
      </wsdl:input>
      <wsdl:output name="getMessageStatusResponse">
        <soap:body use="literal"/>
      </wsdl:output>
      <wsdl:fault name="GetMessageStatusGetMessageStatusFaultMsg">
        <soap:fault name="GetMessageStatusGetMessageStatusFaultMsg" use="literal"/>
      </wsdl:fault>
    </wsdl:operation>
    <wsdl:operation name="sendMessage">
      <soap:operation soapAction="" style="document"/>
      <wsdl:input name="sendMessage">
        <soap:body use="literal"/>
      </wsdl:input>
      <wsdl:output name="sendMessageResponse">
        <soap:body use="literal"/>
      </wsdl:output>
      <wsdl:fault name="SendMessageSendMessageFaultMsg">
        <soap:fault name="SendMessageSendMessageFaultMsg" use="literal"/>
      </wsdl:fault>
    </wsdl:operation>
  </wsdl:binding>
  <wsdl:service name="ImportDataEgovServiceService">
    <wsdl:port binding="tns:ImportDataEgovServiceServiceSoapBinding" name="ImportDataEgovServicePort">
      <soap:address location="http://<?=$_SERVER['HTTP_HOST']?>/examppleservice.php"/>
    </wsdl:port>
  </wsdl:service>
</wsdl:definitions>