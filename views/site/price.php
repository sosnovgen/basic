<?php
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
?>

    <h1>Price</h1>

<script type="text/javascript" src="<?php echo Url::home()?>js/price/dragscroll.js"></script>


<div id="gallery_block" class="dragscroll">
    <?php foreach($models as $model):?>
        <div class="block_price">
            <div class="price-gd-top">
                <h4><?php echo $model ->title ?></h4>
                <h3><?php echo $model ->cena ?></h3>
                <h5><?php echo $model ->duration ?></h5>
            </div>

            <div class="price-list">
                <?php echo $model ->content ?>
            </div>

        </div>
    <?php endforeach;?>
</div>


<div id="left_arrow"">
    <a href="#"><img src="<?php echo Url::home()?>images/price/arrow_left.png"></a>
</div>

<div id="right_arrow">
    <a href="#"><img src="<?php echo Url::home()?>images/price/arrow_right.png"></a>
</div>

<br>


