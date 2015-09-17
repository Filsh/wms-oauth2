<?php

namespace common\base;

abstract class Rule extends \yii\base\Object
{
    abstract function isValid();
}