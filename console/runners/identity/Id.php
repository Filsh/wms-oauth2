<?php

namespace console\runners\identity;

class Id extends \console\runners\Identity
{
    public $id;
    
    protected function doRun()
    {
        /* @var $identity \yii\web\IdentityInterface */
        $identity = \common\models\User::findIdentity($this->id);
        return $this->formatIdentityResult($identity);
    }
}