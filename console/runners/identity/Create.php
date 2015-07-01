<?php

namespace console\runners\identity;

use dektrium\user\models\User;
use filsh\wamp\exceptions\ErrorException;
use filsh\wamp\exceptions\ModelValidationException;

class Create extends \console\runners\Identity
{
    public $email;
    
    public $username;
    
    public $password;
    
    protected function doRun()
    {
        /* @var $user \dektrium\user\models\User */
        $user = \Yii::createObject([
            'class'    => User::className(),
            'scenario' => 'create',
            'email' => $this->email,
            'username' => $this->username,
            'password' => $this->password,
        ]);

        if ($user->create()) {
            return $this->formatIdentityResult($user);
        }
        return $this->formatModelError($user);
    }
}