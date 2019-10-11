<?php

use yii\bootstrap\Button;
use yii\bootstrap\Html;
$start = 9;
$end = 13;
$months = [
        'January' => 1,
        'February' => 2,
        'March' => 3,
        'April' => 4,
        'May' => 5,
        'June' => 6,
        'July' => 7,
        'August' => 8,
        'September' => 9,
        'October' => 10,
        'November' => 11,
        'December' => 12,
];

$days = [3,7, 15];
$daysZwei = [4,5,8,9,16,17];

?>

<table class="calendar-table"><a href="">
    </a>
        <?php echo Html::icon('approve', ['label'=>'save', 'class'=>'glyphicon glyphicon-chevron-left icon-left'])?>
    </a>
    </a>
        <?php echo Html::icon('approve', ['label'=>'save', 'class'=>'glyphicon glyphicon-chevron-right icon-right'])?>
    </a>
    <tr class="calendar-tr"><th colspan="7" class="calendar-th text-center">My calendar, October 2019</th></tr>
    <?php echo Html::tag('td', 'Monday', ['class'=>'calendar-td'])?>
    <?php echo Html::tag('td', 'Tuesday', ['class'=>'calendar-td'])?>
    <?php echo Html::tag('td', 'Wednesday', ['class'=>'calendar-td'])?>
    <?php echo Html::tag('td', 'Thursday', ['class'=>'calendar-td'])?>
    <?php echo Html::tag('td', 'Friday', ['class'=>'calendar-td'])?>
    <?php echo Html::tag('td', 'Saturday', ['class'=>'calendar-td'])?>
    <?php echo Html::tag('td', 'Sunday', ['class'=>'calendar-td']) ?>
    </tr>
    <?php for($a = 0, $day = 1; $a < 6; $a++) {
        echo Html::tag('tr', '',['class'=>'calendar-tr']);
        if($a > 0) {
            for ($b = 0; $b < 7 & $day < 31; $b++, $day++) {
                if(in_array($day, $days)):
                    echo Html::a('sturmer.ru');
                    echo Html::tag('td', $day, ['class'=>'red', 'id'=>$day]);
                elseif(in_array($day, $daysZwei)):
                    echo Html::tag('td', $day, ['class'=>'green', 'id'=>$day]);
                else:
                    echo Html::tag('td', $day, ['class'=>'calendar-td', 'id'=>$day]);
                endif;
            }
        }
    }; ?>
</table>


