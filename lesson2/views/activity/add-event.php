<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$forms = ActiveForm::begin();
$forms->action = 'submit';
echo $forms->field($form, 'title');
echo $forms->field($form, 'description')->textarea();
echo Html::submitButton('Создать', ['class'=>'btn btn-success']);
$forms = ActiveForm::end();
?>