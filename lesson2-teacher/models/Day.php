<?php
/**
 * Created by Artyom Manchenkov
 * artyom@manchenkoff.me
 * manchenkoff.me © 2019
 */

namespace app\models;

use yii\base\Model;

class Day extends Model
{
    public $dayOff = false; // false - рабочий, true - выходной

    public $activities;
}