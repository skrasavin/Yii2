<?php
/**
 * Created by Artyom Manchenkov
 * artyom@manchenkoff.me
 * manchenkoff.me © 2019
 */

namespace app\models;

use yii\base\Model;

/**
 * Модель - Событие
 * @package app\models
 */
class Activity extends Model
{
    /**
     * @var string Название события
     */
    public $title;

    /**
     * @var int Дата начала
     */
    public $date_start;

    /**
     * @var int Дата окончания
     */
    public $date_end;

    /**
     * @var int Номер пользователя
     */
    public $user_id;

    /**
     * @var string Описание события
     */
    public $description;

    /**
     * @var bool Может ли событие повторяться
     */
    public $repeat = false;

    /**
     * @var bool Могут ли другие события быть в этот день
     */
    public $blocked = true;

    /**
     * @var array Прикрепленные файлы
     */
    //public $attachments;

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
}