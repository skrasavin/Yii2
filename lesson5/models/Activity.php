<?php
/**
 * Created by Artyom Manchenkov
 * artyom@manchenkoff.me
 * manchenkoff.me © 2019
 */

namespace app\models;

use yii\db\ActiveRecord;

/**
 * Модель - Событие
 * @package app\models
 *
 * @property-read User $user
 */
class Activity extends ActiveRecord
{
    public static function tableName()
    {
        return 'activities';
    }

    /**
     * Правила валидации данных модели
     * @return array
     */
    public function rules()
    {
        return [
            [['title', 'date_start', 'date_end', 'user_id', 'description'], 'required'],

            [['title', 'description'], 'string'],
            [['title'], 'string', 'min' => 2, 'max' => 160],

            [['date_start', 'date_end'], 'date', 'format' => 'php:Y-m-d'],

            [['user_id'], 'integer'],

            [['repeat', 'blocked'], 'boolean'],

            //[['attachments'], 'file', 'maxFiles' => 5],
        ];
    }

    /**
     * Названия полей модели
     * @return array
     */
    public function attributeLabels()
    {
        return [
            'title' => 'Название',
            'date_start' => 'Дата начала',
            'date_end' => 'Дата окончания',
            'user_id' => 'Пользователь',
            'description' => 'Описание события',
            'repeat' => 'Повтор',
            'blocked' => 'Блокирующее',
            'attachments' => 'Прикрепленные файлы',
        ];
    }

    public function getUser() // $model->user
    {
        return $this->hasOne(User::class, ['id' => 'user_id']);
    }
}