<?php


namespace app\models;


use yii\base\Model;

class RegisterForm extends Model
{

    public $username;
    public $password;
    public $birthday;
    public $counter;





    public function rules()
    {
        return [
            [['username', 'password', 'birthday'], 'required'],

        ];
    }


}