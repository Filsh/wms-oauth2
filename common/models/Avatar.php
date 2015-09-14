<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "avatar".
 *
 * @property integer $user_id
 * @property string $prefix
 * @property string $suffix
 * @property integer $create_time
 * @property integer $update_time
 *
 * @property User $user
 */
class Avatar extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'avatar';
    }

    /**
     * @inheritdoc
     */
    public function fields()
    {
        return [
            'prefix',
            'suffix',
        ];
    }
    
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'prefix', 'suffix'], 'required'],
            [['user_id'], 'integer'],
            [['prefix', 'suffix'], 'string', 'max' => 255],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'prefix' => 'Prefix',
            'suffix' => 'Suffix',
            'create_time' => 'Create Time',
            'update_time' => 'Update Time',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
