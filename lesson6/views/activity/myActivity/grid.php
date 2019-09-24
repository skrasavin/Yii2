<?php

use yii\grid\GridView;
use app\models\Activity;
use yii\data\ActiveDataProvider;

$query = Activity::find();

$provider = new ActiveDataProvider([
    'query' => $query,
    'pagination' => [
        'validatePage' => false,
    ],
]);
echo GridView::widget([
    'dataProvider' => $provider,
]);
