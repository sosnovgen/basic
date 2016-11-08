<?php
use yii\helpers\Url;
?>

<?php $this->context->layout = 'price'; ?>

<?php
$this->title = 'neil5art';
$this->registerMetaTag([
'name' => 'description',
'content' => 'школа обучения маникюра рисунки гелями'
]);
$this->registerMetaTag([
'name' => 'keywords',
'content' => 'методика гель типсы перманентный макияж'
]);
?>


<h1 style="margin-left: 20%;">Price</h1>

<br>
<div class="karkas">
<div class="container">
    <div class="row">
        <?php $i = 0; ?>
        <?php foreach($models as $model):?>
        <div class="col-md-12">
            <a href="<?php echo Url::toRoute(['site/detal', 'id' => $model ->id])?>"><div class="update-nag">
                <div class="update-split" style="background: #<?php echo $colors[$i]; ?>;"><i class="glyphicon"><?php echo $i+1 ?></i></div>
                <div class="update-text"><?php echo $model ->title ?>
                <span class="glyphicon glyphicon-chevron-right" style="color:#<?php echo $colors[$i]; ?>; top"></span></div>
                <div class="update-text"><?php echo $model ->duration ?>
                    <span class="glyphicon glyphicon-chevron-right" style="color:#<?php echo $colors[$i]; ?>; top"></span></div>
                <div class="update-text" style="font-size: 1.2em; font-weight: bold"><?php echo $model ->cena ?></div>
                <?php $i = $i + 1; ?>
            </div>
            </a>
        </div>
        <?php endforeach; ?>



    </div>
</div>
</div>


