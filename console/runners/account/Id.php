<?php

namespace console\runners\account;

class Id extends \console\runners\Account
{
    public $id;
    
    protected function doRun()
    {
        $account = $this->finder->findAccountById($this->id);

        $argKw = null;
        if ($account !== null) {
            $argKw = $account->getAttributes();
        }
        
        return new \Thruway\Result(null, $argKw);
    }
}