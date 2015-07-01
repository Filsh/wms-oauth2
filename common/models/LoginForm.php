<?php
namespace common\models;

class LoginForm extends \dektrium\user\models\LoginForm
{
    /**
     * @return \yii\web\IdentityInterface|false
     */
    public function identity()
    {
        if ($this->validate()) {
            return $this->user;
        } else {
            return false;
        }
    }
}
