<?php
use yii\helpers\Html;
?>
<p>Вы ввели следующую информацию:</p>

<ul>
    <li><label>Категория</label>: <?= Html::encode($model->title) ?></li>

    <?php var_dump($model); ?>

</ul>