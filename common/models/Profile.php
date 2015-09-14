<?php

namespace common\models;

/**
 * This is the model class for table "profile".
 *
 * @property integer $user_id
 * @property string  $name
 * @property string  $public_email
 * @property string  $location
 * @property string  $website
 * @property string  $bio
 * @property string  $avatar_id
 */
class Profile extends \dektrium\user\models\Profile
{
    /**
     * @inheritdoc
     */
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
    
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_merge(parent::rules(), [
            'avatarString' => ['avatar_id', 'string', 'max' => 32]
        ]);
    }
    
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return array_merge(parent::rules(), [
            'avatar_id' => \Yii::t('common', 'Avatar')
        ]);
    }
}