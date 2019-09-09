<?php
/**
 * Created by Artyom Manchenkov
 * artyom@manchenkoff.me
 * manchenkoff.me © 2019
 */

namespace app\controllers;

use app\models\Activity;
use Yii;
use yii\web\Controller;

class ActivityController extends Controller
{
    public function actionIndex()
    {
        //return Yii::$app->request->get('q', 'NOT SET'); // $_GET['q'] -> 500 // isset($_GET['q']....

        return Yii::$app->session->get('page', 'NOT SET'); // $_SESSION['page']
    }

    public function actionView()
    {
        //$a = [
        //    'login' => 'admin',
        //    'passwd' => '123123',
        //];
        //
        //$a['passwd'];
        //// $passwd
        //
        //extract($a); // $login = 'admin; $paswd = '123123';

        $activityItem = new Activity();

        $activityItem->title = 'New Activity Heading';

        return $this->render('view', [
            'model' => $activityItem
        ]);
    }

    public function actionCreate()
    {
        // создание
    }
}