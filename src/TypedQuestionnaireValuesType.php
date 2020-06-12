<?php

namespace AsyncChannelNs\RequestFormImport;

/**
 * Class representing TypedQuestionnaireValuesType
 *
 * 
 * XSD Type: typedQuestionnaireValues
 */
class TypedQuestionnaireValuesType
{

    /**
     * @var string $code
     */
    private $code = null;

    /**
     * @var \ArrayObject $values
     */
    private $values;

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
     * Adds as values
     *
     * @return self
     * @param \AsyncChannelNs\RequestFormImport\TypedQuestionnaireValueType $values
     */
    public function addToValues(\AsyncChannelNs\RequestFormImport\TypedQuestionnaireValueType $values)
    {
        foreach ($this->objectToArray($values) as $ark => $arv) {
            if(!empty($arv)) {
                $this->values->append(new \SoapVar("<$ark>$arv</$ark>", XSD_ANYXML));
            }
        }
        return $this;
    }

    /**
     * isset values
     *
     * @param int|string $index
     * @return bool
     */
    public function issetValues($index)
    {
        return isset($this->values[$index]);
    }

    /**
     * unset values
     *
     * @param int|string $index
     * @return void
     */
    public function unsetValues($index)
    {
        unset($this->values[$index]);
    }

    /**
     * Gets as values
     *
     * @return \AsyncChannelNs\RequestFormImport\TypedQuestionnaireValueType[]
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * Sets a new values
     *
     * @param \AsyncChannelNs\RequestFormImport\TypedQuestionnaireValueType[] $values
     * @return self
     */
    public function setValues(array $values)
    {
        foreach($values as $a) {
            foreach ($this->objectToArray($a) as $ark => $arv) {
                if(!empty($arv)) {
                    $this->values->append(new \SoapVar("<$ark>$arv</$ark>", XSD_ANYXML));
                }
            }
        }
        return $this;
    }
    
    public function objectToArray($object) : array {
        $output = [];
        foreach ((array) $object as $key => $value) {
            $output[preg_replace('/\000(.*)\000/', '', $key)] = $value;
        }
        return $output;
    }
    
    function __construct() {
        $this->values = new \ArrayObject();
    }

}

