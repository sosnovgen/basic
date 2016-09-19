<?php
use yii\helpers\Html;
?>

<p>Вы ввели следующую информацию:</p>

<ul>
    <li><label>Категория</label>: <?= Html::encode($model->title) ?></li>
    <li><label>Просмотр</label>: <?= Html::encode($model->preview) ?></li>
    <?php var_dump($model); ?>

</ul>