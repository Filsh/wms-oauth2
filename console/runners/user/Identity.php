<?php

namespace console\runners\user;

class Identity extends \console\runners\User
{
    public $id;
    
    public $authKey;
    
    protected function doRun()
    {
        $user = $this->finder->findUserById($this->id);
        
        $argKw = null;
        if($user !== null && $user->validateAuthKey($this->authKey)) {
            $argKw = $user->getAttributes();
        }

        return new \Thruway\Result(null, $argKw);
    }
}