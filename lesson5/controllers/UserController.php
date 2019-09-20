<?php


namespace app\controllers;


use app\models\RegisterForm;
use yii\web\Controller;

class UserController extends Controller
{
    public function actionRegisterForm()
    {
        $model = new RegisterForm();
        return $this->render('register-form', compact('model'));
    }

    public function actionRegisterUsers()
    {
        return var_dump(\Yii::$app->request->post());
    }
}