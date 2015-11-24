<?php

namespace frontend\models;

use yii\base\Model;

class Application extends Model
{
    public $name;
    public $email;
    public $phoneNumber;
    public $city;
    public $device;
    public $discountCard;
    public $call;
    public $image;

    public function attributeLabels()
    {
        return [
            'name' => 'Full name',
            'email' => 'E-mail',
            'discountCard' => 'Do you have a discount card?',
            'call' => 'Allow to call me'
        ];
    }

    public function rules()
    {
        return [
            [['name', 'email', 'phoneNumber','city', 'device', 'discountCard'], 'required'],
            ['email', 'email'],
            ['phoneNumber', 'match', 'pattern' => '/^\+?[0-9]{10,12}$/'],
            ['image', 'image', 'extensions' => ['png', 'jpg', 'gif']],

        ];
    }

    public function getCity()
    {
        return [
            '0' => 'Черкассы',
            '1' => 'Киев',
            '2' => 'Полтава',
            '3' => 'Кривой Рог',
            '4' => 'Житомир'
        ];
    }

    public function getCityLabel($city)
    {
        if ($city == 0) {
            return 'Черкассы';
        } elseif ($city == 1) {
            return 'Киев';
        } elseif ($city == 2) {
            return 'Полтава';
        } elseif ($city == 3) {
            return 'Кривой Рог';
        } else {
            return 'Житомир';
        }
    }

    public function getDiscountCard()
    {
        return [
            '0' => 'Yes',
            '1' => 'No'
        ];
    }

    public function getDiscountCardLabel($discountCard)
    {
        if($discountCard == 0) {
            return 'Yes';
        } else {
            return 'No';
        }
    }
}