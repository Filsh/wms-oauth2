<?php

namespace common\models;

class Account extends \dektrium\user\models\Account
{
    public function fields()
    {
        return [
            'id',
            'userId' => 'user_id',
            'provider',
            'clientId' => 'client_id'
        ];
    }
}