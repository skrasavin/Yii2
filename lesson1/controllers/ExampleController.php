<?php

namespace app\controllers;

class ExampleController extends \yii\web\Controller
{
    public function actionAnotherLongActionName()
    {
        return $this->render('another-long-action-name');
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionTest()
    {
        return $this->render('test');
    }

    public function actionView()
    {
        return $this->render('view');
    }

}
