<?php

namespace frontend\models;

use yii\db\ActiveRecord;
use Yii;

/**
 * This is the model class for table "users".
 *
 * @property integer $id
 * @property string $full_name
 * @property string $email
 * @property string $city
 * @property string $phone_number
 */
class Users extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['full_name', 'email', 'city', 'phone_number'], 'required'],
            [['full_name', 'email', 'city', 'phone_number'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'full_name' => 'Full Name',
            'email' => 'Email',
            'city' => 'City',
            'phone_number' => 'Phone Number',
        ];
    }
}
