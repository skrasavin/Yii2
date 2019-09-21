<?php

namespace app\controllers;

use app\models\Activity;
use Yii;
use yii\db\Query;
use yii\db\QueryBuilder;
use yii\filters\AccessControl;
use yii\helpers\VarDumper;
use yii\web\Controller;
use yii\web\UploadedFile;
use app\models\User;

class ActivityController extends Controller
{
/*
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class, // ACF
                'only' => ['index', 'view', 'create'],
                'rules' => [
                    [
                        'allow' => false,
                        'roles' => ['admin'],
                    ],
                ],
            ],
        ];
    }

    /**
     * Просмотр всех событий
     * @return string
     */
    public function actionIndex($sort = false)
    {
        //if (Yii::$app->user->isGuest) {
        //    return '403 - nonono';
        //}

        //$db = Yii::$app->db;
        //
        //$rows = $db->createCommand('select * from activities')->queryAll();

        //$query = new Query();

        //$query->select('*')->from('activities');
        $query = Activity::find();

        if ($sort) {
            $query->orderBy("id desc");
        }

        $rows = $query->all();

        return $this->render('index', [
            'activities' => $rows
        ]);
    }

    /**
     * Просмотр выбранного события
     * @return string
     */
    public function actionView($id)
    {
        //$model = new Activity([
        //    'title' => 'Событие №1',
        //    'description' => 'Небольшое описание',
        //    'date_start' => '2019-09-12',
        //    'date_end' => '2019-09-13',
        //    'blocked' => true,
        //    'repeat' => false,
        //    'user_id' => 1,
        //]);

        $db = Yii::$app->db;

        $model = $db->createCommand('select * from activities where id=:id', [
            ':id' => $id,
        ])->queryOne();

        return $this->render(
            'view',
            compact('model')
        );
    }

    /**
     * Создание нового события
     * @return string
     */
    public function actionCreate()
    {
        $model = new Activity();

        return $this->render(
            'create',
            compact('model')
        );
    }public function actionUpdate()
    {
        $model = new Activity();

        return $this->render(
            'update',
            compact('model')
        );
    }

    /**
     * Удаление выбранного события
     * @return string
     */
    public function actionDelete()
    {
        return 'Activity@delete';
    }

    /**
     * Тестовый метод для показа данных формы
     * @return string
     */
    public function actionSubmit()
    {
        $model = new Activity();

        if ($model->load(Yii::$app->request->post())) {
            //$model->attachments = UploadedFile::getInstances($model, 'attachments');

            if ($model->validate()) {
                $model->save();
                //$params = [];
                //$query = new QueryBuilder(Yii::$app->db);
                //
                //$sql = $query->insert('activities', $model->attributes, $params);
                //
                //Yii::$app->db
                //    ->createCommand($sql, $params)
                //    ->execute();

                //Yii::$app->db
                //    ->createCommand()
                //    ->update('activities', $model->attributes)
                //    ->execute();

                return "Success: " . VarDumper::export($model->attributes);
            } else {
                return "Failed: " . VarDumper::export($model->errors);
            }
        }

        return 'Activity@Submit';
    }
}
