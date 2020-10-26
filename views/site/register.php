<?php

use app\models\Users;
use yii\helpers\Html;

?>

<?php
$today = date("Y-m-d");
$et = $today - $registerUser->birthday;

if ($et < 5) {
    echo "<h2>Too young!</h2><p><a href='http://test2.loc/site/register'><<< Вернутся к регистрации</a></p>";

} elseif ($et > 150) {
    echo "<h2>Too old!</h2><p><a href='http://test2.loc/site/register'><<< Вернутся к регистрации</a></p>";
} else
    $customer = new Users;
if ($customer == true) {
    $customer->username = $registerUser->username;
    $customer->password = md5($registerUser->password);
    $customer->birthday = $registerUser->birthday;
    $customer->counter=0;



    $customer->insert();
//    echo "<a href='http://test2.loc/basic/web/index.php?r=site/login'>Вы успешно зарегестрировались - передите на страницу входа</a>";
    return Yii::$app->response->redirect(['site/login']);

}
?>



