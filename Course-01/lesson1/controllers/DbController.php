<?php
/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 21.04.19
 * Time: 20:31
 */

namespace app\controllers;


use app\models\tables\Users;
use app\models\User;
use yii\debug\models\search\Db;
use yii\web\Controller;

class DbController extends Controller
{

    public function actionIndex() {

        $linl = \Yii::$app->db->createCommand(
            'SELECT * FROM users'
        )->queryAll();
        User::initUsers();


        User::userUsers();
        echo '<br><br>';
        User::echUsers();


//        return $this->render('index');
    }
}