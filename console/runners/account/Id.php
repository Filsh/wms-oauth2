<?php

namespace console\runners\account;

class Id extends \console\runners\Account
{
    public $id;
    
    protected function doRun()
    {
        $account = $this->finder->findAccountById($this->id);
        return [null, $account];
    }
}