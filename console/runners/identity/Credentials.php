<?php

namespace console\runners\identity;

use common\models\LoginForm;

class Credentials extends \console\runners\Identity
{
    public $login;
    
    public $password;
    
    protected function doRun()
    {
        /* @var $model \common\models\LoginForm */
        $model = \Yii::createObject([
            'class' => LoginForm::className(),
            'login' => $this->login,
            'password' => $this->password
        ]);
        
        $identity = $model->identity();
        if($identity !== false) {
            return [null, $this->formatResult($identity)];
        }
        return $this->formatError($model);
    }
}