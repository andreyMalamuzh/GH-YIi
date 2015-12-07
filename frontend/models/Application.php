<?php

namespace frontend\models;

use yii\base\Model;
use Yii;
use frontend\models\Users;
use frontend\models\UsersRequest;

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

    public function rules()
    {
        return [
            [['name', 'email', 'phoneNumber','city', 'device', 'discountCard'], 'required'],
            ['email', 'email'],
            ['phoneNumber', 'match', 'pattern' => '/^\+?[0-9]{10,12}$/'],
            ['image', 'image', 'extensions' => ['png', 'jpg', 'gif']],
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => 'Full name',
            'email' => 'E-mail',
            'discountCard' => 'Do you have a discount card?',
            'call' => 'Allow to call me'
        ];
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