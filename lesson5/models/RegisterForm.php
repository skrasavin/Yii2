<?php


namespace app\models;


use yii\base\Model;

class RegisterForm extends Model
{
    public $username;
    public $password;

    public function rules()
    {
        return [
            // username and password are both required
            [['username', 'password'], 'required'],

        ];
    }
}