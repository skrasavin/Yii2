<?php
/**
 * Created by Artyom Manchenkov
 * artyom@manchenkoff.me
 * manchenkoff.me © 2019
 */

namespace app\controllers;

use app\models\Activity;
use app\models\ActivityForm;
use app\models\Day;
use yii\helpers\ArrayHelper;
use yii\web\Controller;

class ActivityController extends Controller
{
    public function actionIndex()
    {
        return 'Activity@index';
    }
    public function actionEventDescription()
    {
        $events = new Activity();
        $event = $events->attributeLabels();

        return $this->render('event-description', ['event'=>$event]);
    }
    public function actionView()
    {
        return 'Activity@view';
    }
    public function actionEdit()
    {
        return $this->render('edit');
    }
    public function actionCreate()
    {
        return 'Activity@create';
    }

    public function actionAddEvent()
    {
        $form = new ActivityForm();
        return $this->render('add-event', ['form' => $form]);
    }
    public function actionSubmit() {

        $content = \Yii::$app->request->post();

        return $this->render('submit', ['content'=>$content]);
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