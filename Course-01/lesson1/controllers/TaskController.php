<?php
/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 15.04.19
 * Time: 11:11
 */

namespace app\controllers;


use yii\web\Controller;

class TaskController extends Controller
{
    public function actionIndex() {
        return $this->render('index');
    }
}