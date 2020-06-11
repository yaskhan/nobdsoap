<?php

namespace AsyncChannelNs\RequestFormImport;

/**
 * Class representing TypedFileDataType
 *
 * 
 * XSD Type: typedFileData
 */
class TypedFileDataType
{

    /**
     * @var string $base64Data
     */
    private $base64Data = null;

    /**
     * @var \AsyncChannelNs\RequestFormImport\TypedQuestionnaireValuesType[] $filePassportValues
     */
    private $filePassportValues = [
        
    ];

    /**
     * @var string $name
     */
    private $name = null;

    /**
     * Gets as base64Data
     *
     * @return string
     */
    public function getBase64Data()
    {
        return $this->base64Data;
    }

    /**
     * Sets a new base64Data
     *
     * @param string $base64Data
     * @return self
     */
    public function setBase64Data($base64Data)
    {
        $this->base64Data = $base64Data;
        return $this;
    }

    /**
     * Adds as filePassportValues
     *
     * @return self
     * @param \AsyncChannelNs\RequestFormImport\TypedQuestionnaireValuesType $filePassportValues
     */
    public function addToFilePassportValues(\AsyncChannelNs\RequestFormImport\TypedQuestionnaireValuesType $filePassportValues)
    {
        $this->filePassportValues[] = $filePassportValues;
        return $this;
    }

    /**
     * isset filePassportValues
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFilePassportValues($index)
    {
        return isset($this->filePassportValues[$index]);
    }

    /**
     * unset filePassportValues
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFilePassportValues($index)
    {
        unset($this->filePassportValues[$index]);
    }

    /**
     * Gets as filePassportValues
     *
     * @return \AsyncChannelNs\RequestFormImport\TypedQuestionnaireValuesType[]
     */
    public function getFilePassportValues()
    {
        return $this->filePassportValues;
    }

    /**
     * Sets a new filePassportValues
     *
     * @param \AsyncChannelNs\RequestFormImport\TypedQuestionnaireValuesType[] $filePassportValues
     * @return self
     */
    public function setFilePassportValues(array $filePassportValues)
    {
        $this->filePassportValues = $filePassportValues;
        return $this;
    }

    /**
     * Gets as name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }


}

