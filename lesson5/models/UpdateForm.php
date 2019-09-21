<?php

namespace app\models;

use yii\db\ActiveRecord;


/**
 * Модель - Событие
 * @package app\models
 *
 * @property-read User $user
 */
class UpdateForm extends ActiveRecord
{
    public $event_id;
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

            [['date_start', 'date_end'], 'date', 'format' => 'php:Y-m-d'],
            [['date_start'], 'default', 'value' => 'null'],

            [['user_id'], 'integer'],

            [['repeat', 'blocked'], 'boolean'],

            [['date_start'], 'validateStartDate'],
            [['date_end'], 'validateEndDate', 'message'=>'Дата окончания больше даты начала'],

            //[['attachments'], 'file', 'maxFiles' => 5],
        ];
    }

    public function validateStartDate(){
        if($this->date_start = 'null') {
            return $this->date_start = date('Y-m-d');
        } {
        }
    }
    public function validateEndDate(){
        if($this->date_start > $this->date_end) {
            return $this->addError('Дата окончания больше даты начала');
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
            'event_id' => 'Id редактируемого события',
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