<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="col-md-8">
    <?php $form = ActiveForm::begin(); ?>
<br>
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'title')->textInput()->label('Название курса'); ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'preview')->fileInput(['class' => 'filestyle', 'data-buttonText'=> 'Выбрать'])->label('Картинка'); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'duration')-> textArea(['rows' => '4']) -> label('Время обучения'); ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'diploma')-> textArea(['rows' => '4']) -> label('Экзамен / Диплом'); ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'cena')-> textInput()->label('Стоимость'); ?>
        </div>

    </div>


    <?= $form->field($model, 'content')-> textArea(['rows' => '6']) -> label('Программа обучения'); ?>



    <br>
    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<div class="col-md-4"></div>