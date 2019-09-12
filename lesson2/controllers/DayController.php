<?php

namespace app\controllers;

use app\models\Day;

class DayController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $day = new Day();
        $day->nameOfDay = 'sunday';
        return $this->render('index', ['day'=>$day]);
    }

}
