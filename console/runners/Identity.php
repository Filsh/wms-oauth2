<?php

namespace console\runners;

use filsh\wamp\exceptions\ErrorException;
use filsh\wamp\exceptions\ModelValidationException;

abstract class Identity extends \filsh\wamp\components\Runner
{
    protected function formatResult(\yii\web\IdentityInterface $identity = null)
    {
        if($identity !== null) {
            return [
                'id' => $identity->getId(),
                'authKey' => $identity->getAuthKey()
            ];
        }
    }
    
    protected function formatError(\yii\base\Model $model)
    {
        if($model->hasErrors()) {
            throw new ModelValidationException($model);
        }
        throw new ErrorException('Failed to create the object for unknown reason.');
    }
}