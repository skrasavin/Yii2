<?php
/* @var $this yii\web\View */
/* @var $event @app\controllers\DayController */

use yii\helpers\ArrayHelper;
use yii\helpers\Html;

?>
<?php echo Html::a('вернуться к календарю', 'view')?>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<?php echo Html::a('редактировать событие', 'edit')?>

    <br><br>

    <p>ID пользователя - <?php echo ArrayHelper::getValue($event, 'userID')?></p>

    <p>Название события  - <?php echo ArrayHelper::getValue($event, 'title')?></p>
    <p>Описание события - <?php echo ArrayHelper::getValue($event, 'description')?></p>
    <p>Дата начала события - <?php echo ArrayHelper::getValue($event, 'dayStart')?></p>
    <p>Дата окончания события - <?php echo ArrayHelper::getValue($event, 'dayEnd')?></p>


<?php
