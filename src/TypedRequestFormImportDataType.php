<?php

namespace AsyncChannelNs\RequestFormImport;

/**
 * Class representing TypedRequestFormImportDataType
 *
 * 
 * XSD Type: typedRequestFormImportData
 */
class TypedRequestFormImportDataType extends TypedQuestionnaireImportDataType
{

    /**
     * @var string $externalRequestChainId
     */
    private $externalRequestChainId = null;

    /**
     * @var string $externalRequestId
     */
    private $externalRequestId = null;

    /**
     * @var string $negativeResolutionMissingDocumentsListKk
     */
    private $negativeResolutionMissingDocumentsListKk = null;

    /**
     * @var string $negativeResolutionMissingDocumentsListRu
     */
    private $negativeResolutionMissingDocumentsListRu = null;

    /**
     * @var string $negativeResolutionReason
     */
    private $negativeResolutionReason = null;

    /**
     * @var string $negativeResolutionReasonKkValue
     */
    private $negativeResolutionReasonKkValue = null;

    /**
     * @var string $negativeResolutionReasonRuValue
     */
    private $negativeResolutionReasonRuValue = null;

    /**
     * @var string $negativeResolutionReasonTextKk
     */
    private $negativeResolutionReasonTextKk = null;

    /**
     * @var string $negativeResolutionReasonTextRu
     */
    private $negativeResolutionReasonTextRu = null;

    /**
     * @var string $processingStatus
     */
    private $processingStatus = null;

    /**
     * @var string $requestOriginSystemId
     */
    private $requestOriginSystemId = null;

    /**
     * @var string $requesterBin
     */
    private $requesterBin = null;

    /**
     * @var \DateTime $requesterBirthDate
     */
    private $requesterBirthDate = null;

    /**
     * @var \DateTime $requesterDelegateBirthDate
     */
    private $requesterDelegateBirthDate = null;

    /**
     * @var string $requesterDelegateFirstName
     */
    private $requesterDelegateFirstName = null;

    /**
     * @var string $requesterDelegateIin
     */
    private $requesterDelegateIin = null;

    /**
     * @var string $requesterDelegateLastName
     */
    private $requesterDelegateLastName = null;

    /**
     * @var string $requesterDelegateMiddleName
     */
    private $requesterDelegateMiddleName = null;

    /**
     * @var string $requesterFirstName
     */
    private $requesterFirstName = null;

    /**
     * @var string $requesterIin
     */
    private $requesterIin = null;

    /**
     * @var string $requesterLastName
     */
    private $requesterLastName = null;

    /**
     * @var string $requesterMiddleName
     */
    private $requesterMiddleName = null;

    /**
     * @var \DateTime $resolutionDate
     */
    private $resolutionDate = null;

    /**
     * @var string $resolutionType
     */
    private $resolutionType = null;

    /**
     * @var string $serviceProviderAssigneeFullName
     */
    private $serviceProviderAssigneeFullName = null;

    /**
     * @var string $serviceProviderAssigneePositionKk
     */
    private $serviceProviderAssigneePositionKk = null;

    /**
     * @var string $serviceProviderAssigneePositionRu
     */
    private $serviceProviderAssigneePositionRu = null;

    /**
     * @var string $serviceProviderAssigneeTelephoneNumber
     */
    private $serviceProviderAssigneeTelephoneNumber = null;

    /**
     * @var string $serviceProviderBin
     */
    private $serviceProviderBin = null;

    /**
     * @var string $serviceProviderIin
     */
    private $serviceProviderIin = null;

    /**
     * @var string $serviceProviderLocationCode
     */
    private $serviceProviderLocationCode = null;

    /**
     * @var string $serviceType
     */
    private $serviceType = null;

    /**
     * @var string $serviceTypeKkName
     */
    private $serviceTypeKkName = null;

    /**
     * @var string $serviceTypeRuName
     */
    private $serviceTypeRuName = null;

    /**
     * Gets as externalRequestChainId
     *
     * @return string
     */
    public function getExternalRequestChainId()
    {
        return $this->externalRequestChainId;
    }

    /**
     * Sets a new externalRequestChainId
     *
     * @param string $externalRequestChainId
     * @return self
     */
    public function setExternalRequestChainId($externalRequestChainId)
    {
        $this->externalRequestChainId = $externalRequestChainId;
        return $this;
    }

    /**
     * Gets as externalRequestId
     *
     * @return string
     */
    public function getExternalRequestId()
    {
        return $this->externalRequestId;
    }

    /**
     * Sets a new externalRequestId
     *
     * @param string $externalRequestId
     * @return self
     */
    public function setExternalRequestId($externalRequestId)
    {
        $this->externalRequestId = $externalRequestId;
        return $this;
    }

    /**
     * Gets as negativeResolutionMissingDocumentsListKk
     *
     * @return string
     */
    public function getNegativeResolutionMissingDocumentsListKk()
    {
        return $this->negativeResolutionMissingDocumentsListKk;
    }

    /**
     * Sets a new negativeResolutionMissingDocumentsListKk
     *
     * @param string $negativeResolutionMissingDocumentsListKk
     * @return self
     */
    public function setNegativeResolutionMissingDocumentsListKk($negativeResolutionMissingDocumentsListKk)
    {
        $this->negativeResolutionMissingDocumentsListKk = $negativeResolutionMissingDocumentsListKk;
        return $this;
    }

    /**
     * Gets as negativeResolutionMissingDocumentsListRu
     *
     * @return string
     */
    public function getNegativeResolutionMissingDocumentsListRu()
    {
        return $this->negativeResolutionMissingDocumentsListRu;
    }

    /**
     * Sets a new negativeResolutionMissingDocumentsListRu
     *
     * @param string $negativeResolutionMissingDocumentsListRu
     * @return self
     */
    public function setNegativeResolutionMissingDocumentsListRu($negativeResolutionMissingDocumentsListRu)
    {
        $this->negativeResolutionMissingDocumentsListRu = $negativeResolutionMissingDocumentsListRu;
        return $this;
    }

    /**
     * Gets as negativeResolutionReason
     *
     * @return string
     */
    public function getNegativeResolutionReason()
    {
        return $this->negativeResolutionReason;
    }

    /**
     * Sets a new negativeResolutionReason
     *
     * @param string $negativeResolutionReason
     * @return self
     */
    public function setNegativeResolutionReason($negativeResolutionReason)
    {
        $this->negativeResolutionReason = $negativeResolutionReason;
        return $this;
    }

    /**
     * Gets as negativeResolutionReasonKkValue
     *
     * @return string
     */
    public function getNegativeResolutionReasonKkValue()
    {
        return $this->negativeResolutionReasonKkValue;
    }

    /**
     * Sets a new negativeResolutionReasonKkValue
     *
     * @param string $negativeResolutionReasonKkValue
     * @return self
     */
    public function setNegativeResolutionReasonKkValue($negativeResolutionReasonKkValue)
    {
        $this->negativeResolutionReasonKkValue = $negativeResolutionReasonKkValue;
        return $this;
    }

    /**
     * Gets as negativeResolutionReasonRuValue
     *
     * @return string
     */
    public function getNegativeResolutionReasonRuValue()
    {
        return $this->negativeResolutionReasonRuValue;
    }

    /**
     * Sets a new negativeResolutionReasonRuValue
     *
     * @param string $negativeResolutionReasonRuValue
     * @return self
     */
    public function setNegativeResolutionReasonRuValue($negativeResolutionReasonRuValue)
    {
        $this->negativeResolutionReasonRuValue = $negativeResolutionReasonRuValue;
        return $this;
    }

    /**
     * Gets as negativeResolutionReasonTextKk
     *
     * @return string
     */
    public function getNegativeResolutionReasonTextKk()
    {
        return $this->negativeResolutionReasonTextKk;
    }

    /**
     * Sets a new negativeResolutionReasonTextKk
     *
     * @param string $negativeResolutionReasonTextKk
     * @return self
     */
    public function setNegativeResolutionReasonTextKk($negativeResolutionReasonTextKk)
    {
        $this->negativeResolutionReasonTextKk = $negativeResolutionReasonTextKk;
        return $this;
    }

    /**
     * Gets as negativeResolutionReasonTextRu
     *
     * @return string
     */
    public function getNegativeResolutionReasonTextRu()
    {
        return $this->negativeResolutionReasonTextRu;
    }

    /**
     * Sets a new negativeResolutionReasonTextRu
     *
     * @param string $negativeResolutionReasonTextRu
     * @return self
     */
    public function setNegativeResolutionReasonTextRu($negativeResolutionReasonTextRu)
    {
        $this->negativeResolutionReasonTextRu = $negativeResolutionReasonTextRu;
        return $this;
    }

    /**
     * Gets as processingStatus
     *
     * @return string
     */
    public function getProcessingStatus()
    {
        return $this->processingStatus;
    }

    /**
     * Sets a new processingStatus
     *
     * @param string $processingStatus
     * @return self
     */
    public function setProcessingStatus($processingStatus)
    {
        $this->processingStatus = $processingStatus;
        return $this;
    }

    /**
     * Gets as requestOriginSystemId
     *
     * @return string
     */
    public function getRequestOriginSystemId()
    {
        return $this->requestOriginSystemId;
    }

    /**
     * Sets a new requestOriginSystemId
     *
     * @param string $requestOriginSystemId
     * @return self
     */
    public function setRequestOriginSystemId($requestOriginSystemId)
    {
        $this->requestOriginSystemId = $requestOriginSystemId;
        return $this;
    }

    /**
     * Gets as requesterBin
     *
     * @return string
     */
    public function getRequesterBin()
    {
        return $this->requesterBin;
    }

    /**
     * Sets a new requesterBin
     *
     * @param string $requesterBin
     * @return self
     */
    public function setRequesterBin($requesterBin)
    {
        $this->requesterBin = $requesterBin;
        return $this;
    }

    /**
     * Gets as requesterBirthDate
     *
     * @return \DateTime
     */
    public function getRequesterBirthDate()
    {
        return $this->requesterBirthDate;
    }

    /**
     * Sets a new requesterBirthDate
     *
     * @param \DateTime $requesterBirthDate
     * @return self
     */
    public function setRequesterBirthDate(\DateTime $requesterBirthDate)
    {
        $this->requesterBirthDate = $requesterBirthDate;
        return $this;
    }

    /**
     * Gets as requesterDelegateBirthDate
     *
     * @return \DateTime
     */
    public function getRequesterDelegateBirthDate()
    {
        return $this->requesterDelegateBirthDate;
    }

    /**
     * Sets a new requesterDelegateBirthDate
     *
     * @param \DateTime $requesterDelegateBirthDate
     * @return self
     */
    public function setRequesterDelegateBirthDate(\DateTime $requesterDelegateBirthDate)
    {
        $this->requesterDelegateBirthDate = $requesterDelegateBirthDate;
        return $this;
    }

    /**
     * Gets as requesterDelegateFirstName
     *
     * @return string
     */
    public function getRequesterDelegateFirstName()
    {
        return $this->requesterDelegateFirstName;
    }

    /**
     * Sets a new requesterDelegateFirstName
     *
     * @param string $requesterDelegateFirstName
     * @return self
     */
    public function setRequesterDelegateFirstName($requesterDelegateFirstName)
    {
        $this->requesterDelegateFirstName = $requesterDelegateFirstName;
        return $this;
    }

    /**
     * Gets as requesterDelegateIin
     *
     * @return string
     */
    public function getRequesterDelegateIin()
    {
        return $this->requesterDelegateIin;
    }

    /**
     * Sets a new requesterDelegateIin
     *
     * @param string $requesterDelegateIin
     * @return self
     */
    public function setRequesterDelegateIin($requesterDelegateIin)
    {
        $this->requesterDelegateIin = $requesterDelegateIin;
        return $this;
    }

    /**
     * Gets as requesterDelegateLastName
     *
     * @return string
     */
    public function getRequesterDelegateLastName()
    {
        return $this->requesterDelegateLastName;
    }

    /**
     * Sets a new requesterDelegateLastName
     *
     * @param string $requesterDelegateLastName
     * @return self
     */
    public function setRequesterDelegateLastName($requesterDelegateLastName)
    {
        $this->requesterDelegateLastName = $requesterDelegateLastName;
        return $this;
    }

    /**
     * Gets as requesterDelegateMiddleName
     *
     * @return string
     */
    public function getRequesterDelegateMiddleName()
    {
        return $this->requesterDelegateMiddleName;
    }

    /**
     * Sets a new requesterDelegateMiddleName
     *
     * @param string $requesterDelegateMiddleName
     * @return self
     */
    public function setRequesterDelegateMiddleName($requesterDelegateMiddleName)
    {
        $this->requesterDelegateMiddleName = $requesterDelegateMiddleName;
        return $this;
    }

    /**
     * Gets as requesterFirstName
     *
     * @return string
     */
    public function getRequesterFirstName()
    {
        return $this->requesterFirstName;
    }

    /**
     * Sets a new requesterFirstName
     *
     * @param string $requesterFirstName
     * @return self
     */
    public function setRequesterFirstName($requesterFirstName)
    {
        $this->requesterFirstName = $requesterFirstName;
        return $this;
    }

    /**
     * Gets as requesterIin
     *
     * @return string
     */
    public function getRequesterIin()
    {
        return $this->requesterIin;
    }

    /**
     * Sets a new requesterIin
     *
     * @param string $requesterIin
     * @return self
     */
    public function setRequesterIin($requesterIin)
    {
        $this->requesterIin = $requesterIin;
        return $this;
    }

    /**
     * Gets as requesterLastName
     *
     * @return string
     */
    public function getRequesterLastName()
    {
        return $this->requesterLastName;
    }

    /**
     * Sets a new requesterLastName
     *
     * @param string $requesterLastName
     * @return self
     */
    public function setRequesterLastName($requesterLastName)
    {
        $this->requesterLastName = $requesterLastName;
        return $this;
    }

    /**
     * Gets as requesterMiddleName
     *
     * @return string
     */
    public function getRequesterMiddleName()
    {
        return $this->requesterMiddleName;
    }

    /**
     * Sets a new requesterMiddleName
     *
     * @param string $requesterMiddleName
     * @return self
     */
    public function setRequesterMiddleName($requesterMiddleName)
    {
        $this->requesterMiddleName = $requesterMiddleName;
        return $this;
    }

    /**
     * Gets as resolutionDate
     *
     * @return \DateTime
     */
    public function getResolutionDate()
    {
        return $this->resolutionDate;
    }

    /**
     * Sets a new resolutionDate
     *
     * @param \DateTime $resolutionDate
     * @return self
     */
    public function setResolutionDate(\DateTime $resolutionDate)
    {
        $this->resolutionDate = $resolutionDate;
        return $this;
    }

    /**
     * Gets as resolutionType
     *
     * @return string
     */
    public function getResolutionType()
    {
        return $this->resolutionType;
    }

    /**
     * Sets a new resolutionType
     *
     * @param string $resolutionType
     * @return self
     */
    public function setResolutionType($resolutionType)
    {
        $this->resolutionType = $resolutionType;
        return $this;
    }

    /**
     * Gets as serviceProviderAssigneeFullName
     *
     * @return string
     */
    public function getServiceProviderAssigneeFullName()
    {
        return $this->serviceProviderAssigneeFullName;
    }

    /**
     * Sets a new serviceProviderAssigneeFullName
     *
     * @param string $serviceProviderAssigneeFullName
     * @return self
     */
    public function setServiceProviderAssigneeFullName($serviceProviderAssigneeFullName)
    {
        $this->serviceProviderAssigneeFullName = $serviceProviderAssigneeFullName;
        return $this;
    }

    /**
     * Gets as serviceProviderAssigneePositionKk
     *
     * @return string
     */
    public function getServiceProviderAssigneePositionKk()
    {
        return $this->serviceProviderAssigneePositionKk;
    }

    /**
     * Sets a new serviceProviderAssigneePositionKk
     *
     * @param string $serviceProviderAssigneePositionKk
     * @return self
     */
    public function setServiceProviderAssigneePositionKk($serviceProviderAssigneePositionKk)
    {
        $this->serviceProviderAssigneePositionKk = $serviceProviderAssigneePositionKk;
        return $this;
    }

    /**
     * Gets as serviceProviderAssigneePositionRu
     *
     * @return string
     */
    public function getServiceProviderAssigneePositionRu()
    {
        return $this->serviceProviderAssigneePositionRu;
    }

    /**
     * Sets a new serviceProviderAssigneePositionRu
     *
     * @param string $serviceProviderAssigneePositionRu
     * @return self
     */
    public function setServiceProviderAssigneePositionRu($serviceProviderAssigneePositionRu)
    {
        $this->serviceProviderAssigneePositionRu = $serviceProviderAssigneePositionRu;
        return $this;
    }

    /**
     * Gets as serviceProviderAssigneeTelephoneNumber
     *
     * @return string
     */
    public function getServiceProviderAssigneeTelephoneNumber()
    {
        return $this->serviceProviderAssigneeTelephoneNumber;
    }

    /**
     * Sets a new serviceProviderAssigneeTelephoneNumber
     *
     * @param string $serviceProviderAssigneeTelephoneNumber
     * @return self
     */
    public function setServiceProviderAssigneeTelephoneNumber($serviceProviderAssigneeTelephoneNumber)
    {
        $this->serviceProviderAssigneeTelephoneNumber = $serviceProviderAssigneeTelephoneNumber;
        return $this;
    }

    /**
     * Gets as serviceProviderBin
     *
     * @return string
     */
    public function getServiceProviderBin()
    {
        return $this->serviceProviderBin;
    }

    /**
     * Sets a new serviceProviderBin
     *
     * @param string $serviceProviderBin
     * @return self
     */
    public function setServiceProviderBin($serviceProviderBin)
    {
        $this->serviceProviderBin = $serviceProviderBin;
        return $this;
    }

    /**
     * Gets as serviceProviderIin
     *
     * @return string
     */
    public function getServiceProviderIin()
    {
        return $this->serviceProviderIin;
    }

    /**
     * Sets a new serviceProviderIin
     *
     * @param string $serviceProviderIin
     * @return self
     */
    public function setServiceProviderIin($serviceProviderIin)
    {
        $this->serviceProviderIin = $serviceProviderIin;
        return $this;
    }

    /**
     * Gets as serviceProviderLocationCode
     *
     * @return string
     */
    public function getServiceProviderLocationCode()
    {
        return $this->serviceProviderLocationCode;
    }

    /**
     * Sets a new serviceProviderLocationCode
     *
     * @param string $serviceProviderLocationCode
     * @return self
     */
    public function setServiceProviderLocationCode($serviceProviderLocationCode)
    {
        $this->serviceProviderLocationCode = $serviceProviderLocationCode;
        return $this;
    }

    /**
     * Gets as serviceType
     *
     * @return string
     */
    public function getServiceType()
    {
        return $this->serviceType;
    }

    /**
     * Sets a new serviceType
     *
     * @param string $serviceType
     * @return self
     */
    public function setServiceType($serviceType)
    {
        $this->serviceType = $serviceType;
        return $this;
    }

    /**
     * Gets as serviceTypeKkName
     *
     * @return string
     */
    public function getServiceTypeKkName()
    {
        return $this->serviceTypeKkName;
    }

    /**
     * Sets a new serviceTypeKkName
     *
     * @param string $serviceTypeKkName
     * @return self
     */
    public function setServiceTypeKkName($serviceTypeKkName)
    {
        $this->serviceTypeKkName = $serviceTypeKkName;
        return $this;
    }

    /**
     * Gets as serviceTypeRuName
     *
     * @return string
     */
    public function getServiceTypeRuName()
    {
        return $this->serviceTypeRuName;
    }

    /**
     * Sets a new serviceTypeRuName
     *
     * @param string $serviceTypeRuName
     * @return self
     */
    public function setServiceTypeRuName($serviceTypeRuName)
    {
        $this->serviceTypeRuName = $serviceTypeRuName;
        return $this;
    }


}

