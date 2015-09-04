<?php

namespace console\runners\identity;

class AccessToken extends \console\runners\Identity
{
    public $type;
    
    public $accessToken;
    
    protected function doRun()
    {
        /* @var $identity \yii\web\IdentityInterface */
        $identity = \common\models\User::findIdentityByAccessToken($this->accessToken, $this->type);
        return [null, $this->formatResult($identity)];
    }
}