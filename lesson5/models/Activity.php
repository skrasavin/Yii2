<?php
/**
 * Created by Artyom Manchenkov
 * artyom@manchenkoff.me
 * manchenkoff.me © 2019
 */

namespace app\models;

use yii\db\ActiveRecord;
use yii\i18n\Formatter;


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
            [['title', 'user_id', 'description'], 'required'],

            [['title', 'description'], 'string'],
            [['title'], 'string', 'min' => 2, 'max' => 160],

            [['date_start', 'date_end'], 'date'],

            [['user_id'], 'integer'],

            [['repeat', 'blocked'], 'boolean'],

            [['date_start'], 'validateStartDate'],

            //[['attachments'], 'file', 'maxFiles' => 5],
        ];
    }

    public function validateStartDate(){
            if($this->date_start = 0) {
                return $this->date_start = 'hello';
            } {
        }
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