<?php

namespace frontend\models;

use yii\base\Model;
use Yii;

class Application extends Model
{
    public $name;
    public $email;
    public $phoneNumber;
    public $city;
    public $device;
    public $description;
    public $discountCard;

    public function rules()
    {
        return [
            [['name', 'email', 'phoneNumber','city', 'device', 'description', 'discountCard'], 'required', 'message' => 'Заполните поле'],
            ['email', 'email', 'message' => 'Некорректный адрес'],
            ['phoneNumber', 'match', 'pattern' => '/^\+?[0-9]{10,12}$/', 'message' => 'Некорректный телефон'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => 'Имя:',
            'email' => 'E-mail:',
            'phoneNumber' => 'Номер телефона:',
            'city' => 'Город:',
            'device' => 'Устройство:',
            'description' => 'Описание проблемы:',
            'discountCard' => 'Есть скидочная карта?',
        ];
    }

    public function addUser()
    {
        if ($this->validate()){
            $users = new Users();

            $users->full_name = $this->name;
            $users->email = $this->email;
            $users->city = $this->city;
            $users->phone_number = $this->phoneNumber;

            if ($users->save()) {
                return $users;
            }
        }

        return null;
    }

    public function addUserRequest()
    {
        if ($this->validate()){
            $usersRequest = new UsersRequest();

            $usersRequest->device = $this->device;
            $usersRequest->description = $this->description;
            $usersRequest->discount_card = $this->discountCard;
//            $usersRequest->allow_to_call = $this->call;
//            $usersRequest->image = $this->imageFiles;

            if ($usersRequest->save()) {
                return $usersRequest;
            }
        }

        return null;
    }

}