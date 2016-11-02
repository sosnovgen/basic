<?php
use yii\helpers\Url;
?>
<h1><?php echo $model ->title ?> <span class="caption_cena"> ( <?php echo $model ->cena ?> р.) </span></h1>

<br>

<div class="#">
    <div class="col-md-6">
        <img src="<?php echo Url::home();
        echo $model->preview ?>" alt=" " class="img-responsive"/>
        <div class="left_block">
            Время обучения: <?php echo $model->duration ?>
        </div>
        <div class="left_block">
            <span class="duration"><?php echo $model->content ?></span>
        </div>
        <div class="left_block">
            Экзамен: <?php echo $model->diploma?>
        </div>

    </div>


    <div class="col-md-6" style="padding-left: 50px;">
        <div class="block_main">
            <?php echo $model ->full ->content ?>
        </div>
    </div>

</div>
