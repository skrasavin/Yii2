<?php

namespace app\controllers;

use app\models\Activity;
use app\models\forms\SignupForm;
use app\models\User;
use Yii;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * Контроллер для управления пользователями
 * @package app\controllers
 */
class UserController extends Controller
{
    /**
     * Набор поведений
     * @return array
     */
    public function behaviors()
    {
        return [
            'access' => [
                // доступ только для админов
                'class' => AccessControl::class,
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['admin'],
                    ],
                    [
                        'allow' => true,
                        'actions' => ['userview'],
                        'roles' => ['user'],
                    ],
                ],
            ],
        ];
    }

    /**
     * Просмотр списка пользователей
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => User::find(),
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionSend()
    {
       Yii::$app->mailer->compose()
            ->setFrom('hello.moscow@yandex.ru')
            ->setTo('s-slam@mail.ru')
            ->setSubject('New Activity')
            ->setTextBody('Hello user, we create for your new Activity')
            ->setHtmlBody('<b>текст сообщения в формате HTML</b>')
            ->send();

        return $this->redirect(['user/index']);
    }

    /**
     * Просмотр информации по выбранному пользователю
     * @param $id
     *
     * @return string
     * @throws NotFoundHttpException
     */
    public function actionView($id)
    {
        // ключ для записи в кеш
        $cacheKey = "user_{$id}"; // activity_1

        // проверка на наличие в кеше
        if (Yii::$app->cache->exists($cacheKey)) {
            $item = Yii::$app->cache->get($cacheKey);
        } else {
            // получение из бд с сохранением в кеш
            $item = User::findOne($id);

            Yii::$app->cache->set($cacheKey, $item);
        }

        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }
    public function actionUserview() {
        $id = Yii::$app->user->id;
        if(User::findOne($id)) {
        return $this->render('userview', [
            'model' => $this->findModel($id),
        ]);
        }
    }

    /**
     * Вывод формы создания нового пользователя
     * @return string|\yii\web\Response
     * @throws \yii\base\Exception
     */
    public function actionCreate()
    {
        $model = new SignupForm();

        if ($model->load(Yii::$app->request->post()) && $model->register()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Удаление пользователя
     * @param $id
     *
     * @return \yii\web\Response
     * @throws NotFoundHttpException
     * @throws \Throwable
     * @throws \yii\db\StaleObjectException
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Метод помощник для поиска пользователя с генерацией 404 ошибки
     * @param $id
     *
     * @return User|null
     * @throws NotFoundHttpException
     */
    protected function findModel($id)
    {
        if (($model = User::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
