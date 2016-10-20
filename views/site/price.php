<?php
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
?>

<?php $this->context->layout = 'price'; ?>


<h1 style="margin-left: 20%;">Price</h1>

<!--<div class="karkas">
    <?php /*foreach($models as $model):*/?>
        <div class="row" style="margin-bottom: 8px;">
            <div class="col-md-12">
                <img src="<?php /*echo Url::home(); echo $model ->preview */?>" class="img2">
                <div class="less">
                    <?php /*echo $model ->title */?>
                </div>

            </div>
        </div>
    <?php /*endforeach; */?>
</div>-->
<br>
<div class="karkas">
<div class="container">
    <div class="row">
        <?php $i = 0; ?>
        <?php foreach($models as $model):?>
        <div class="col-md-12">
            <div class="update-nag">
                <div class="update-split" style="background: #<?php echo $colors[$i]; ?>;"><i class="glyphicon"><?php echo $i+1 ?></i></div>
                <div class="update-text"><?php echo $model ->title ?>
                <span class="glyphicon glyphicon-chevron-right" style="color:#<?php echo $colors[$i]; ?>; top"></span></div>
                <div class="update-text"><?php echo $model ->duration ?>
                    <span class="glyphicon glyphicon-chevron-right" style="color:#<?php echo $colors[$i]; ?>; top"></span></div>
                <div class="update-text" style="font-size: 1.2em; font-weight: bold"><?php echo $model ->cena ?></div>
                <?php $i = $i + 1; ?>
            </div>
        </div>
        <?php endforeach; ?>



    </div>
</div>
</div>
</div>

