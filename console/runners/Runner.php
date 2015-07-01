<?php

namespace console\runners;

abstract class Runner extends \filsh\yii2\runner\BaseRunner
{
    public function setArgs($args)
    {
    }
    
    public function setArgsKw($argsKw)
    {
        foreach((array) $argsKw as $name => $value) {
            if($this->canSetProperty($name)) {
                $this->$name = $value;
            }
        }
    }
}