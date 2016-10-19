<?php
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
?>

    <h1>Price</h1>
<div class="karkas">
    <?php foreach($models as $model):?>
        <div class="row" style="margin-bottom: 8px;">
            <div class="col-md-12">
                <img src="<?php echo Url::home(); echo $model ->preview ?>" class="img2">
                <div class="less">
                    <?php echo $model ->title ?>
                </div>

            </div>
        </div>
    <?php endforeach; ?>
</div>
<br>


