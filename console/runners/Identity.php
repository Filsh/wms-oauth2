<?php

namespace console\runners;

use filsh\wamp\exceptions\ErrorException;
use filsh\wamp\exceptions\ModelValidationException;

abstract class Identity extends Runner
{
    protected function formatIdentityResult(\yii\web\IdentityInterface $identity = null)
    {
        $argKw = null;
        if($identity !== null) {
            $argKw = [
                'id' => $identity->getId(),
                'authKey' => $identity->getAuthKey()
            ];
        }
        return new \Thruway\Result(null, $argKw);
    }
    
    protected function formatModelError(\yii\base\Model $model)
    {
        if($model->hasErrors()) {
            throw new ModelValidationException($model);
        }
        throw new ErrorException('Failed to create the object for unknown reason.');
    }
}