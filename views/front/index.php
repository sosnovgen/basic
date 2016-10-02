<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Front */
/* @var $form ActiveForm */
?>
<div class="front-index">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'title') ?>
        <?= $form->field($model, 'preview') ?>
        <?= $form->field($model, 'content') ?>
        <?= $form->field($model, 'cena') ?>
        <?= $form->field($model, 'created_at') ?>
        <?= $form->field($model, 'group') ?>
        <?= $form->field($model, 'priznak') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- front-index -->