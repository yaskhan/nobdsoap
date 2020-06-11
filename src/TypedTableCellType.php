<?php

namespace AsyncChannelNs\RequestFormImport;

/**
 * Class representing TypedTableCellType
 *
 * 
 * XSD Type: typedTableCell
 */
class TypedTableCellType
{

    /**
     * @var \AsyncChannelNs\RequestFormImport\TypedTableCellType\DimensionsAType\EntryAType[] $dimensions
     */
    private $dimensions = null;

    /**
     * @var \AsyncChannelNs\RequestFormImport\TypedQuestionnaireValueType $value
     */
    private $value = null;

    /**
     * Adds as entry
     *
     * @return self
     * @param \AsyncChannelNs\RequestFormImport\TypedTableCellType\DimensionsAType\EntryAType $entry
     */
    public function addToDimensions(\AsyncChannelNs\RequestFormImport\TypedTableCellType\DimensionsAType\EntryAType $entry)
    {
        $this->dimensions[] = $entry;
        return $this;
    }

    /**
     * isset dimensions
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDimensions($index)
    {
        return isset($this->dimensions[$index]);
    }

    /**
     * unset dimensions
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDimensions($index)
    {
        unset($this->dimensions[$index]);
    }

    /**
     * Gets as dimensions
     *
     * @return \AsyncChannelNs\RequestFormImport\TypedTableCellType\DimensionsAType\EntryAType[]
     */
    public function getDimensions()
    {
        return $this->dimensions;
    }

    /**
     * Sets a new dimensions
     *
     * @param \AsyncChannelNs\RequestFormImport\TypedTableCellType\DimensionsAType\EntryAType[] $dimensions
     * @return self
     */
    public function setDimensions(array $dimensions)
    {
        $this->dimensions = $dimensions;
        return $this;
    }

    /**
     * Gets as value
     *
     * @return \AsyncChannelNs\RequestFormImport\TypedQuestionnaireValueType
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * @param \AsyncChannelNs\RequestFormImport\TypedQuestionnaireValueType $value
     * @return self
     */
    public function setValue(\AsyncChannelNs\RequestFormImport\TypedQuestionnaireValueType $value)
    {
        $this->value = $value;
        return $this;
    }


}

