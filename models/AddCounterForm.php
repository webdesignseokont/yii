<?php


namespace app\models;


use yii\base\Model;
use app\models\Users;


class AddCounterForm extends Model
{


    public $counter;


    public function rules()
    {
        return [

           [['counter'], required ]
        ];
    }



    public static function Db($u, $myCounter)
    {


        $creating = Users::find()->where(['username' => $u])->one();

        $creating->counter = $myCounter + 1;

        $creating->save();


    }







}