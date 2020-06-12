<?php

namespace AsyncChannelNs\RequestFormImport;

/**
 * Class representing TypedQuestionnaireValueType
 *
 * 
 * XSD Type: typedQuestionnaireValue
 */
class TypedQuestionnaireValueType
{

    /**
     * @var bool $boolean
     */
    private $boolean = null;

    /**
     * @var \AsyncChannelNs\RequestFormImport\TypedQuestionnaireValuesType[] $complexValue
     */
    private $complexValue = [
        
    ];

    /**
     * @var string $date
     */
    private $date = null;

    /**
     * @var \AsyncChannelNs\RequestFormImport\DomainItemDataType $domainItemData
     */
    private $domainItemData = null;

    /**
     * @var \AsyncChannelNs\RequestFormImport\DomainItemDataType[] $domainItemDataList
     */
    private $domainItemDataList = [
        
    ];

    /**
     * @var \AsyncChannelNs\RequestFormImport\TypedFileDataType $fileData
     */
    private $fileData = null;

    /**
     * @var float $number
     */
    private $number = null;

    /**
     * @var string $string
     */
    private $string = null;

    /**
     * @var string[] $stringList
     */
    private $stringList = [
        
    ];

    /**
     * @var \AsyncChannelNs\RequestFormImport\TypedTableCellType[] $tableCells
     */
    private $tableCells = [
        
    ];

    /**
     * Gets as boolean
     *
     * @return bool
     */
    public function getBoolean()
    {
        return $this->boolean;
    }

    /**
     * Sets a new boolean
     *
     * @param bool $boolean
     * @return self
     */
    public function setBoolean($boolean)
    {
        $this->boolean = $boolean;
        return $this;
    }

    /**
     * Adds as complexValue
     *
     * @return self
     * @param \AsyncChannelNs\RequestFormImport\TypedQuestionnaireValuesType $complexValue
     */
    public function addToComplexValue(\AsyncChannelNs\RequestFormImport\TypedQuestionnaireValuesType $complexValue)
    {
        $this->complexValue[] = $complexValue;
        return $this;
    }

    /**
     * isset complexValue
     *
     * @param int|string $index
     * @return bool
     */
    public function issetComplexValue($index)
    {
        return isset($this->complexValue[$index]);
    }

    /**
     * unset complexValue
     *
     * @param int|string $index
     * @return void
     */
    public function unsetComplexValue($index)
    {
        unset($this->complexValue[$index]);
    }

    /**
     * Gets as complexValue
     *
     * @return \AsyncChannelNs\RequestFormImport\TypedQuestionnaireValuesType[]
     */
    public function getComplexValue()
    {
        return $this->complexValue;
    }

    /**
     * Sets a new complexValue
     *
     * @param \AsyncChannelNs\RequestFormImport\TypedQuestionnaireValuesType[] $complexValue
     * @return self
     */
    public function setComplexValue(array $complexValue)
    {
        $this->complexValue = $complexValue;
        return $this;
    }

    /**
     * Gets as date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * @param \DateTime $date
     * @return self
     */
    public function setDate(\DateTime $date)
    {
        $this->date = $date->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * Gets as domainItemData
     *
     * @return \AsyncChannelNs\RequestFormImport\DomainItemDataType
     */
    public function getDomainItemData()
    {
        return $this->domainItemData;
    }

    /**
     * Sets a new domainItemData
     *
     * @param \AsyncChannelNs\RequestFormImport\DomainItemDataType $domainItemData
     * @return self
     */
    public function setDomainItemData(\AsyncChannelNs\RequestFormImport\DomainItemDataType $domainItemData)
    {
        $this->domainItemData = $domainItemData;
        return $this;
    }

    /**
     * Adds as domainItemDataList
     *
     * @return self
     * @param \AsyncChannelNs\RequestFormImport\DomainItemDataType $domainItemDataList
     */
    public function addToDomainItemDataList(\AsyncChannelNs\RequestFormImport\DomainItemDataType $domainItemDataList)
    {
        $this->domainItemDataList[] = $domainItemDataList;
        return $this;
    }

    /**
     * isset domainItemDataList
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDomainItemDataList($index)
    {
        return isset($this->domainItemDataList[$index]);
    }

    /**
     * unset domainItemDataList
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDomainItemDataList($index)
    {
        unset($this->domainItemDataList[$index]);
    }

    /**
     * Gets as domainItemDataList
     *
     * @return \AsyncChannelNs\RequestFormImport\DomainItemDataType[]
     */
    public function getDomainItemDataList()
    {
        return $this->domainItemDataList;
    }

    /**
     * Sets a new domainItemDataList
     *
     * @param \AsyncChannelNs\RequestFormImport\DomainItemDataType[] $domainItemDataList
     * @return self
     */
    public function setDomainItemDataList(array $domainItemDataList)
    {
        $this->domainItemDataList = $domainItemDataList;
        return $this;
    }

    /**
     * Gets as fileData
     *
     * @return \AsyncChannelNs\RequestFormImport\TypedFileDataType
     */
    public function getFileData()
    {
        return $this->fileData;
    }

    /**
     * Sets a new fileData
     *
     * @param \AsyncChannelNs\RequestFormImport\TypedFileDataType $fileData
     * @return self
     */
    public function setFileData(\AsyncChannelNs\RequestFormImport\TypedFileDataType $fileData)
    {
        $this->fileData = $fileData;
        return $this;
    }

    /**
     * Gets as number
     *
     * @return float
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets a new number
     *
     * @param float $number
     * @return self
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * Gets as string
     *
     * @return string
     */
    public function getString()
    {
        return $this->string;
    }

    /**
     * Sets a new string
     *
     * @param string $string
     * @return self
     */
    public function setString($string)
    {
        $this->string = $string;
        return $this;
    }

    /**
     * Adds as stringList
     *
     * @return self
     * @param string $stringList
     */
    public function addToStringList($stringList)
    {
        $this->stringList[] = $stringList;
        return $this;
    }

    /**
     * isset stringList
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStringList($index)
    {
        return isset($this->stringList[$index]);
    }

    /**
     * unset stringList
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStringList($index)
    {
        unset($this->stringList[$index]);
    }

    /**
     * Gets as stringList
     *
     * @return string[]
     */
    public function getStringList()
    {
        return $this->stringList;
    }

    /**
     * Sets a new stringList
     *
     * @param string[] $stringList
     * @return self
     */
    public function setStringList(array $stringList)
    {
        $this->stringList = $stringList;
        return $this;
    }

    /**
     * Adds as tableCells
     *
     * @return self
     * @param \AsyncChannelNs\RequestFormImport\TypedTableCellType $tableCells
     */
    public function addToTableCells(\AsyncChannelNs\RequestFormImport\TypedTableCellType $tableCells)
    {
        $this->tableCells[] = $tableCells;
        return $this;
    }

    /**
     * isset tableCells
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTableCells($index)
    {
        return isset($this->tableCells[$index]);
    }

    /**
     * unset tableCells
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTableCells($index)
    {
        unset($this->tableCells[$index]);
    }

    /**
     * Gets as tableCells
     *
     * @return \AsyncChannelNs\RequestFormImport\TypedTableCellType[]
     */
    public function getTableCells()
    {
        return $this->tableCells;
    }

    /**
     * Sets a new tableCells
     *
     * @param \AsyncChannelNs\RequestFormImport\TypedTableCellType[] $tableCells
     * @return self
     */
    public function setTableCells(array $tableCells)
    {
        $this->tableCells = $tableCells;
        return $this;
    }


}

