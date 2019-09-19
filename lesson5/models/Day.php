<?php
/**
 * Created by Artyom Manchenkov
 * artyom@manchenkoff.me
 * manchenkoff.me © 2019
 */

namespace app\models;

use yii\base\Model;

/**
 * Модель - День
 * @package app\models
 */
class Day extends Model
{
    /**
     * @var bool Флаг выходного дня
     */
    public $dayOff = false;

    /**
     * @var array События в этот день
     */
    public $activities;
}