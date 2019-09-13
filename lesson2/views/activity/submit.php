<?php
/* @var $this yii\web\View */
/* @var $content app\controllers\ActivityController */

use yii\helpers\ArrayHelper;
?>

<h2>Успешно! Вы ввели:</h2>
<br>
<h4>Название события - <?php echo ArrayHelper::getValue($content, 'ActivityForm.title'); ?></h4>
<h4>Тема события - <?php echo ArrayHelper::getValue($content, 'ActivityForm.description'); ?></h4>