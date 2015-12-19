<?php

namespace frontend\models;

use yii\base\Model;
use Yii;
use yii\web\UploadedFile;
use frontend\models\Users;
use frontend\models\UsersRequest;

class Application extends Model
{
    public $name;
    public $email;
    public $phoneNumber;
    public $city;
    public $device;
    public $description;
    public $discountCard;
    public $call;
    public $imageFiles;

    public function rules()
    {
        return [
            [['name', 'email', 'phoneNumber','city', 'device', 'description', 'discountCard'], 'required', 'message' => 'Заполните поле'],
            ['email', 'email', 'message' => 'Некорректный адрес'],
            ['phoneNumber', 'match', 'pattern' => '/^\+?[0-9]{10,12}$/', 'message' => 'Некорректный телефон'],
            [['imageFiles'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg', 'maxFiles' => 4],
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
            'call' => 'Связаться по телефону?',
            'imageFiles' => 'Изображения',
        ];
    }

    public function upload()
    {
        if ($this->validate()) {
            foreach ($this->imageFiles as $file) {
                $file->saveAs('uploads/' . $file->baseName . '.' . $file->extension);
            }
            return true;
        } else {
            return false;
        }
    }

    public function addUsers()
    {
        $users = new Users();

        $users->full_name = $this->name;
        $users->email = $this->email;
        $users->phone_number = $this->phoneNumber;
        $users->city = $this->city;
        $users->save();
    }

    public function addUsersRequest()
    {
        $usersRequest = new UsersRequest();

        $usersRequest->device = $this->device;
        $usersRequest->discount_card = $this->discountCard;
        $usersRequest->allow_to_call = $this->call;
        $usersRequest->image = $this->image;
        $usersRequest->save();
    }
}