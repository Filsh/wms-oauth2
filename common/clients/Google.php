<?php

namespace common\clients;

class Google extends \dektrium\user\clients\Google
{
    /** @inheritdoc */
    public function getEmail()
    {   
        $email = parent::getEmail();
        if(empty($email)) {
            $emails = isset($this->getUserAttributes()['emails'])
                ? $this->getUserAttributes()['emails']
                : [];
            
            if(!empty($emails) && isset($emails[0]['value'], $emails[0]['type']) && $emails[0]['type'] === 'account') {
                $email = $emails[0]['value'];
            } 
        }
        return $email;
    }
}