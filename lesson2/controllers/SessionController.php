<?php
/**
 * Created by Artyom Manchenkov
 * artyom@manchenkoff.me
 * manchenkoff.me © 2019
 */

namespace app\controllers;

use Yii;
use yii\web\Controller;

class SessionController extends Controller
{
    public function afterAction($action, $result)
    {
        Yii::$app->session->set('last_page', 'URL');
        Yii::$app->session->get('last_page'); // URL

        return parent::afterAction($action, $result);
    }
}