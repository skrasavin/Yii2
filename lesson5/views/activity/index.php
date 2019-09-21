    <?php

/**
 * @var $this yii\web\View
 * @var \app\models\Activity[] $activities
 *
 * <ul>
    <?php foreach ($activities as $item) { ?>
    <li>
    <?= var_dump($item->user->username); ?>
    </li>
    <?php } ?>
    </ul>
 */

use yii\helpers\Html;

?>

<div class="row">
    <h1>Список событий</h1>

    <div class="form-group pull-right">
        <?= Html::a('Редактировать', ['activity/update'], ['class' => 'btn btn-success pull-left']) ?>
        &nbsp&nbsp&nbsp
        <?= Html::a('Создать', ['activity/create'], ['class' => 'btn btn-success pull-right']) ?>
    </div>
</div>
 <ul>
     <?php foreach ($activities as $item) { ?>
         <input type="checkbox" <li><?php var_dump($item->title);?></li><br>
     <?php }?>
 </ul>

