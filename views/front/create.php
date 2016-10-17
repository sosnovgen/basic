<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<button type="button" class="close" onclick="history.back();">&times;</button>
<div class="col-md-8">

    <?php $form = ActiveForm::begin(); ?>


    <div class="row capture">
        <h3>Главная страница</h3>
    </div>

    <br>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'title')->textInput()->label('Заголовок'); ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'preview')->fileInput(['class' => 'filestyle', 'data-buttonText'=> 'Выбрать'])->label('Картинка'); ?>
        </div>
        <div class="col-md-2">
        <?php echo $form->field($model, 'priznak')->dropDownList([

            '1' => '1',
            '2' => '2',
            '3' => '3',
            '4' => '4',
            '5' => '5',
            '6' => '6',
            '7' => '7',
            
            ])-> label('№ столб.'); ?>

        </div>
    </div>

    <?= $form->field($model, 'group')->hiddenInput(['value'=> 'one_page'])->label(false); ?>

    <span class="small pull-right">* Перенос строки клавиши: Shift + Enter </span>
    <?= $form->field($model, 'content')-> textArea(['rows' => '6','id' => 'editor']) -> label('Текст'); ?>

    <br>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<div class="col-md-4">
    <div class="description">
        <p>Здесь можно добавить/отредактировать вторую полосу.</br>
           "Номер столбца" - номер редактируемого столбца на главной странице.</br>
           Номера идут слева направо, сверху вниз.
        </p>
    </div>
</div>