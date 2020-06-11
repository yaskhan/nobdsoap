<?php

namespace AsyncChannelNs\RequestFormImport;

/**
 * Class representing DomainItemDataType
 *
 * 
 * XSD Type: domainItemData
 */
class DomainItemDataType
{

    /**
     * @var string $code
     */
    private $code = null;

    /**
     * @var string $kkValue
     */
    private $kkValue = null;

    /**
     * @var string $ruValue
     */
    private $ruValue = null;

    /**
     * Gets as code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as kkValue
     *
     * @return string
     */
    public function getKkValue()
    {
        return $this->kkValue;
    }

    /**
     * Sets a new kkValue
     *
     * @param string $kkValue
     * @return self
     */
    public function setKkValue($kkValue)
    {
        $this->kkValue = $kkValue;
        return $this;
    }

    /**
     * Gets as ruValue
     *
     * @return string
     */
    public function getRuValue()
    {
        return $this->ruValue;
    }

    /**
     * Sets a new ruValue
     *
     * @param string $ruValue
     * @return self
     */
    public function setRuValue($ruValue)
    {
        $this->ruValue = $ruValue;
        return $this;
    }


}

