<?php


namespace app\models;


use yii\db\ActiveRecord;

class User extends ActiveRecord
{

    public static function tableName(){


        return 'users';
    }



    public function rules(){

        return[
            [
                'username', 'password', 'birthday','counter', 'authKey', 'accessToken'
            ]
        ];
    }

    public function  attributeLabels(){

        return [
            'id' => 'ID',
            'username' => 'username',
            'password' => 'password',
            'birthday' => 'birthday',
            'counter' => 'counter',
            'authKey' => 'authKey',
            'accessToken' => 'accessToken',
        ];
    }

}