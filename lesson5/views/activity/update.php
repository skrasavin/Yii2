<?php

/**
 * @var $this yii\web\View
 * @var $model \app\models\Activity
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
    <div class="row">
        <h1>Редактировать событие</h1>

        <div class="form-group pull-right">
            <?= Html::a('Назад', ['activity/index'], ['class' => 'btn btn-info']) ?>
        </div>
    </div>

<div class="activity-form">
    <?php $form = ActiveForm::begin(['action' => ['/activity/submit']]); ?>

    <?= $form->field($model, 'title')->textInput(['autocomplete' => 'off']) ?>
    <?= $form->field($model, 'date_start')->textInput(['type' => 'date']) ?>
    <?= $form->field($model, 'date_end')->textInput(['type' => 'date']) ?>
    <?= $form->field($model, 'user_id')->textInput(['autocomplete' => 'off']) ?>
    <?= $form->field($model, 'description')->textarea(['rows' => 5]) ?>
    <?= $form->field($model, 'repeat')->checkbox() ?>
    <?= $form->field($model, 'blocked')->checkbox() ?>
    <?php //= $form->field($model, 'attachments[]')->fileInput(['multiple' => true]) ?>

    <div class="form-group" style="margin-top: 40px;">
        <?= Html::submitButton('Продолжить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
