<?php

namespace frontend\models;

use yii\db\ActiveRecord;
use Yii;

/**
 * This is the model class for table "request".
 *
 * @property integer $id
 * @property string $device
 * @property string $description
 * @property string $discount_card
 */
class UsersRequest extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{request}}';
    }
}
