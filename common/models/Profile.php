<?php

namespace common\models;

class Profile extends \dektrium\user\models\Profile
{
    public function fields()
    {
        return [
            'name',
            'email' => 'public_email',
            'location',
            'website',
            'bio'
        ];
    }
}