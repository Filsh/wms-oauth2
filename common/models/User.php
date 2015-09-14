<?php

namespace common\models;

use Yii;
use OAuth2\Storage\UserCredentialsInterface;

/**
 * User model
 *
 * @property integer $id
 * @property string $username
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property string $auth_key
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $password write-only password
 */
class User extends \dektrium\user\models\User implements UserCredentialsInterface
{
    /**
     * @inheritdoc
     */
    public function fields()
    {
        return [
            'id',
            'email',
            'username',
            'profile' => function() {
                return $this->getProfile()->one();
            }
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAvatar()
    {
        return $this->hasOne(Avatar::className(), ['user_id' => 'id']);
    }
    
    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return boolean if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password_hash);
    }
    
    /**
     * @inheritdoc
     */
    public function checkUserCredentials($username, $password)
    {
        $user = self::findByUsername($username);
        if ($user !== null) {
            return $user->validatePassword($password);
        }

        return false;
    }

    /**
     * @inheritdoc
     */
    public function getUserDetails($username)
    {
        $details = [];
        $user = self::findByUsername($username);
        if($user !== null) {
            $details['user_id'] = $user->id;
        }
        return $details;
    }
    
    public function createAvatar($imageUrl)
    {
        $result = Yii::$app->wampLocator->uploadImageFile(
            ['url' => $imageUrl, 'type' => 'avatar'],
            function() {
                var_dump(func_get_args());exit;
            },
            function() {
                var_dump(func_get_args());exit;
            }
        );
        var_dump($imageUrl, $result);exit;
    }
}
