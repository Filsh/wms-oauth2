<?php

namespace common\base;

class NotDetectingException extends \yii\base\Exception
{
    public function getName()
    {
        return 'Not Detecting Sandbox';
    }
}
