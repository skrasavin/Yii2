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
    <a href="#">
    <?php for($a = 0, $day = 1; $a < 6; $a++) {
        echo Html::tag('tr', '',['class'=>'calendar-tr']);
        if($a > 0) {
            for ($b = 0; $b < 7 & $day < 31; $b++, $day++)
                echo Html::tag('td', $day, ['class'=>'calendar-td', 'id'=>$day]);
        }
        echo Html::tag('tr');
    }; ?>
    </a>
</table>


<script>
    document.getElementById('3').classList.add('red');
</script>

