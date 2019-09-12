<?php
/**
 * Created by Artyom Manchenkov
 * artyom@manchenkoff.me
 * manchenkoff.me © 2019
 */

use app\models\UserMessage;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Html;
use yii\web\View;

/**
 * @var View $this
 * @var UserMessage $model
 */

?>

<h1>Новое сообщение</h1>

<?php $form = ActiveForm::begin([
    'action' => '/message/submit',
]) // <form> ?>

<h3>Заполните форму</h3>

<?= $form->field($model, 'email')->textInput()->hint('Просто подсказка') ?>
<?= $form->field($model, 'title')->textInput() ?>
<?= $form->field($model, 'content')->textarea() ?>

<?= Html::submitButton('Отправить сообщение', ['class' => 'btn btn-success']) ?>

<?php ActiveForm::end() // </form> ?>
