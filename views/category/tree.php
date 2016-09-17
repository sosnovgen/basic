<?php
use yii\helpers\Html;
?>
<p>Вы ввели следующую информацию:</p>

<ul>
    <li><label>Категория</label>: <?= Html::encode($test->title) ?></li>

    <?php var_dump($test); ?>

</ul>