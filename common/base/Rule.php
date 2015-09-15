<?php

namespace common\base;

abstract class Rule extends \yii\base\Object
{
    public $name;
    
    abstract function isValid();
}