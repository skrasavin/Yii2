<?php
/**
 * Created by Artyom Manchenkov
 * artyom@manchenkoff.me
 * manchenkoff.me © 2019
 */

namespace app\models;

use yii\base\Model;

class Activity extends Model
{
    public $title;
    public $description;
    public $dayStart;
    public $dayEnd;
    public $userID;

    // hw
    public $repeat = false;
    public $blocked = true;

    public function attributeLabels()
    {
        return [
            "title" => 'Emilybirthday',
            "description" => 'Need to help with gift',
            "dayStart" => '13.05.2019',
            "dayEnd" => '14.05.2019',
            "userID" => 12,
        ];
    }
}