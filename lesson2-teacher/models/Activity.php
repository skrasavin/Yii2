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
    public $dayStart;
    public $dayEnd;
    public $userID;
    public $description;

    // hw
    public $repeat = false;
    public $blocked = true;
}