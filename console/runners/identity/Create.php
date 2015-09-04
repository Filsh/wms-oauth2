<?php

namespace console\runners\identity;

use dektrium\user\Finder;
use dektrium\user\models\User;
use dektrium\user\models\Account;
use filsh\wamp\exceptions\ErrorException;
use filsh\wamp\exceptions\ModelValidationException;

class Create extends \console\runners\Identity
{
    public $email;
    
    public $username;
    
    public $password;
    
    public $accountId;
    
    protected function doRun()
    {
        $account = null;
        if($this->accountId !== null) {
            $finder = \Yii::$container->get(Finder::className());
            $account = $finder->findAccountById($this->accountId);
        }
        
        $user = $this->create($account);
        
        if ($user->hasErrors()) {
            return $this->formatError($user);
        }
        return [null, $this->formatResult($user)];
    }
    
    protected function create(Account $account = null)
    {
        /* @var $user \dektrium\user\models\User */
        $user = \Yii::createObject([
            'class'    => User::className(),
            'scenario' => $account === null ? 'create' : 'connect',
            'email' => $this->email,
            'username' => $this->username,
            'password' => $this->password,
        ]);
        
        if($user->create() && $account !== null) {
            $account->link('user', $user);
        }
        return $user;
    }
}