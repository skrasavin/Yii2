<?php
/**
 * Created by Artyom Manchenkov
 * artyom@manchenkoff.me
 * manchenkoff.me © 2019
 */

namespace app\commands;

use yii\console\Controller;

class RbacController extends Controller
{
    public function actionInit()
    {
        $auth = \Yii::$app->authManager;

        $adminRole = $auth->createRole('admin');
        $adminRole->description = 'Super admin';
        $auth->add($adminRole);

        //$auth->getRole('admin');

        $auth->assign($adminRole, 1);
    }
}