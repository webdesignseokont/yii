<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use app\models\Users;
use app\controllers\SiteController;
use app\models\AddCounterForm;
use yii\widgets\ActiveForm;


$this->title = 'About';
$this->params['breadcrumbs'][] = "Counter";
?>
<div class="site-about">


    <?php
    $u = \Yii::$app->user->identity->username;

    $user = Users::find()->where(['username' => $u])->one();

    echo ' <p style="font-size: 180px; text-align: center;">' . $user->counter . '</p>';

    ?>

    <?php $form = ActiveForm::begin() ?>
    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-10" style="text-align: center">

            <?= Yii::$app->user->identity !== NULL ? ("<span>" . Html::submitButton('+1', ['class' => 'btn btn-primary', 'name' => 'btn']) .'   '. "</span>"
                . "<span>" . Html::submitButton('Выйти', ['class' => 'btn btn-primary', 'name' => 'vhn']) . "</span>") : 'Авторизируйтесь ;-)' ?>


        </div>

        <div class="col-lg-offset-1 col-lg-11">


        </div>
    </div>
    <?php ActiveForm::end() ?>


    <?php
    if (isset($_POST['btn'])) {
        AddCounterForm::Db($u, $user->counter);

        return Yii::$app->response->refresh( '');

    } elseif (isset($_POST['vhn'])) {
        Yii::$app->user->logout();
        return Yii::$app->response->redirect(['site/login']);

    }


    ?>


</div>
