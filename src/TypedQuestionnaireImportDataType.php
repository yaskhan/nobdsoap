<?php

namespace AsyncChannelNs\RequestFormImport;

/**
 * Class representing TypedQuestionnaireImportDataType
 *
 * 
 * XSD Type: typedQuestionnaireImportData
 */
class TypedQuestionnaireImportDataType
{

    /**
     * @var string[] $deletedValues
     */
    private $deletedValues = [
        
    ];

    /**
     * @var int $id
     */
    private $id = null;


    /**
     * @var \ArrayObject $updatedValues
     */
    private $typedRequestFormImportData;

    /**
     * Adds as deletedValues
     *
     * @return self
     * @param string $deletedValues
     */
    public function addToDeletedValues($deletedValues)
    {
        $this->deletedValues[] = $deletedValues;
        return $this;
    }

    /**
     * isset deletedValues
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDeletedValues($index)
    {
        return isset($this->deletedValues[$index]);
    }

    /**
     * unset deletedValues
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDeletedValues($index)
    {
        unset($this->deletedValues[$index]);
    }

    /**
     * Gets as deletedValues
     *
     * @return string[]
     */
    public function getDeletedValues()
    {
        return $this->deletedValues;
    }

    /**
     * Sets a new deletedValues
     *
     * @param string[] $deletedValues
     * @return self
     */
    public function setDeletedValues(array $deletedValues)
    {
        $this->deletedValues = $deletedValues;
        return $this;
    }

    /**
     * Gets as id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param int $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as importSource
     *
     * @return string
     */
    public function getImportSource()
    {
        return $this->typedRequestFormImportData->importSource;
    }

    /**
     * Sets a new importSource
     *
     * @param string $importSource
     * @return self
     */
    public function setImportSource($importSource)
    {
        $this->typedRequestFormImportData->append(new \SoapVar('<importSource>'.$importSource.'</importSource>', XSD_ANYXML));
        return $this;
    }

    /**
     * Adds as updatedValues
     *
     * @return self
     * @param \AsyncChannelNs\RequestFormImport\TypedQuestionnaireValuesType $updatedValues
     */
    public function addToUpdatedValues(\AsyncChannelNs\RequestFormImport\TypedQuestionnaireValuesType $updatedValues)
    {
        $this->updatedValues[] = $updatedValues;
        return $this;
    }

    /**
     * isset updatedValues
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUpdatedValues($index)
    {
        return isset($this->updatedValues[$index]);
    }

    /**
     * unset updatedValues
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUpdatedValues($index)
    {
        unset($this->updatedValues[$index]);
    }

    /**
     * Gets as updatedValues
     *
     * @return \AsyncChannelNs\RequestFormImport\TypedQuestionnaireValuesType[]
     */
    public function getUpdatedValues()
    {
        return $this->typedRequestFormImportData;
    }

    /**
     * Sets a new updatedValues
     *
     * @param \AsyncChannelNs\RequestFormImport\TypedQuestionnaireValuesType[] $updatedValues
     * @return self
     */
    public function setUpdatedValues(array $updatedValues)
    {
        foreach($updatedValues as $a) {
            $this->typedRequestFormImportData->append(new \SoapVar($a, SOAP_ENC_OBJECT, null, null, 'updatedValues'));
        }
        return $this;
    }
    
    function __construct() {
        $this->typedRequestFormImportData = new \ArrayObject();
    }


}

