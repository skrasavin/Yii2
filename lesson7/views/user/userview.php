<?php

use yii\helpers\Html;
use yii\web\YiiAsset;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title = $model->username;
$this->params['breadcrumbs'][] = $this->title;

YiiAsset::register($this);

?>
<div class="user-view">

    <h1><?= Html::encode($this->title) ?></h1>


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'username',
            'password_hash',
            'auth_key',
            'access_token',
            'created_at:date',
            'updated_at:date',
        ],
    ]) ?>

</div>
