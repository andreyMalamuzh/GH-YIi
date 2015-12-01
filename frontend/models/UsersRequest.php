<?php

namespace frontend\models;

use yii\db\ActiveRecord;
use Yii;

/**
 * This is the model class for table "request".
 *
 * @property integer $id
 * @property string $device
 * @property string $discount_card
 * @property string $allow_to_call
 * @property string $image
 */
class UsersRequest extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'request';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['device', 'discount_card', 'allow_to_call', 'image'], 'required'],
            [['device', 'discount_card', 'allow_to_call', 'image'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'device' => 'Device',
            'discount_card' => 'Discount Card',
            'allow_to_call' => 'Allow To Call',
            'image' => 'Image',
        ];
    }

    public function getUsers()
    {
        return $this->hasOne(Users::className(), ['post_id' => 'id']);
    }
}
