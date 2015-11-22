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

    public function rules()
    {
        return [
            [['name', 'email', 'phoneNumber','city', 'device'], 'required'],
            ['email', 'email'],
            ['phoneNumber', 'number'],
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
}