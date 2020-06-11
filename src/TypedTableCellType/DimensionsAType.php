<?php

namespace AsyncChannelNs\RequestFormImport\TypedTableCellType;

/**
 * Class representing DimensionsAType
 */
class DimensionsAType
{

    /**
     * @var \AsyncChannelNs\RequestFormImport\TypedTableCellType\DimensionsAType\EntryAType[] $entry
     */
    private $entry = [
        
    ];

    /**
     * Adds as entry
     *
     * @return self
     * @param \AsyncChannelNs\RequestFormImport\TypedTableCellType\DimensionsAType\EntryAType $entry
     */
    public function addToEntry(\AsyncChannelNs\RequestFormImport\TypedTableCellType\DimensionsAType\EntryAType $entry)
    {
        $this->entry[] = $entry;
        return $this;
    }

    /**
     * isset entry
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEntry($index)
    {
        return isset($this->entry[$index]);
    }

    /**
     * unset entry
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEntry($index)
    {
        unset($this->entry[$index]);
    }

    /**
     * Gets as entry
     *
     * @return \AsyncChannelNs\RequestFormImport\TypedTableCellType\DimensionsAType\EntryAType[]
     */
    public function getEntry()
    {
        return $this->entry;
    }

    /**
     * Sets a new entry
     *
     * @param \AsyncChannelNs\RequestFormImport\TypedTableCellType\DimensionsAType\EntryAType[] $entry
     * @return self
     */
    public function setEntry(array $entry)
    {
        $this->entry = $entry;
        return $this;
    }


}

