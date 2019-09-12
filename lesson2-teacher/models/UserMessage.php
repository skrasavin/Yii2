<?php
/**
 * Created by Artyom Manchenkov
 * artyom@manchenkoff.me
 * manchenkoff.me © 2019
 */

namespace app\models;

use yii\base\Model;

class UserMessage extends Model
{
    public $email;
    public $title;
    public $content;

    public function attributeLabels()
    {
        return [
            'email' => 'Ваш E-Mail',
            'title' => 'Тема обращения',
            'content' => 'Текст',
        ];
    }

    public function rules()
    {
        return [
            [ ['email', 'title', 'content'], 'required' ],
            [ ['email'], 'email'],
            [ ['title'], 'string', 'min' => 5, 'max' => 30],
        ];
    }
}