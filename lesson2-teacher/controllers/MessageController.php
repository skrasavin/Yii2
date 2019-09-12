<?php
/**
 * Created by Artyom Manchenkov
 * artyom@manchenkoff.me
 * manchenkoff.me © 2019
 */

namespace app\controllers;

use app\models\UserMessage;
use Yii;
use yii\web\Controller;

class MessageController extends Controller
{
    public function actionIndex()
    {
        // показать форму
        $model = new UserMessage();

        //return $this->render('index', [
        //    'model' => $model
        //]);

        return $this->render(
            'index',
            compact('model') // $model => ('model' => $model)
        );
    }

    public function actionSubmit()
    {
        // принимать данные из формы
        $model = new UserMessage();

        $model->load(Yii::$app->request->post());

        //var_dump($model);

        if ($model->validate()) {
            return $this->redirect(['/message/result']);
        } else {
            return $this->redirect(['/message/index']);
        }
    }

    public function actionResult()
    {
        // исход операции
        return 'Thanks!';
    }
}