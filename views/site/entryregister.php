<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Регистрация';
$this->params['breadcrumbs'][] = $this->title;

?>
    <h1 style="text-align: center;"><?= Html::encode($this->title) ?></h1>

    <p style="text-align: center;">Пожалуйста, заполните следующие поля для регистрации::</p>

<?php $form = ActiveForm::begin(); ?>

<div style=" width: 300px; margin: 0 auto;">

    <?= $form->field($registerUser, 'username')->label('Логин')?>

    <?= $form->field($registerUser, 'password')->input('password')->label('Пароль') ?>

    <?= $form->field($registerUser, 'birthday')->input('date')->label('Дата рождения') ?>

    <div class="form-group" style="text-align: center">
        <?= Html::submitButton('Зарегаться', ['class' => 'btn btn-primary']) ?>

    </div>

</div>




<?php ActiveForm::end(); ?>