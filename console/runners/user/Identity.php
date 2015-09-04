<?php

namespace console\runners\user;

class Identity extends \console\runners\User
{
    public $id;
    
    public $authKey;
    
    protected function doRun()
    {
        $user = $this->finder->findUserById($this->id);
        if($user !== null && $user->validateAuthKey($this->authKey)) {
            return [null, $user];
        }
        return [null, null];
    }
}