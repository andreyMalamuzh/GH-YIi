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
        return '{{users}}';
    }
}
