<?php
/**
 * Created by Artyom Manchenkov
 * artyom@manchenkoff.me
 * manchenkoff.me © 2019
 */

namespace app\controllers;

use yii\helpers\ArrayHelper;
use yii\web\Controller;

class ActivityController extends Controller
{
    public function actionIndex()
    {
        return 'Activity@index';
    }

    public function actionView()
    {
        return 'Activity@view';
    }

    public function actionCreate()
    {
        return 'Activity@create';
    }

    public function actionArrayHelper()
    {
        $arr = [
            [
                'id' => 1,
                'login' => 'admin',
            ],
            [
                'id' => 2,
                'login' => 'manager',
            ],
        ];

        $logins = ArrayHelper::getColumn($arr, 'login');

        //var_dump($logins);

        $loginFirst = ArrayHelper::getValue($arr, '0.user_info.data.email'); // $arr[0]['user_info']['data']['email']
    }
}