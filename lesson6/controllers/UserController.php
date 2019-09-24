<?php


namespace app\controllers;


use app\models\Activity;
use app\models\User;
use yii\data\ActiveDataProvider;
use yii\web\Controller;

class UserController extends Controller
{
    public function actionIndex()
    {
        // TODO: получение всех событий через pagination (GridView)

        $query = User::find();

        $provider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'validatePage' => false,
            ],
        ]);

        return $this->render('index', [
            'provider' => $provider,
        ]);
    }
}