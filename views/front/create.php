<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>


<div class="col-md-8">
    <?php $form = ActiveForm::begin(); ?>


    <div class="row capture">
        <h3>Вторая полоса</h3>
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

            '1' => 'Активный',
            '2' => 'Отключен',
            '3' => 'Удален'
            ])-> label('№ столб.'); ?>

        </div>
    </div>

    <?= $form->field($model, 'group')->hiddenInput(['value'=> 'one_page_second_row'])->label(false); ?>

    <?= $form->field($model, 'content')-> textArea(['rows' => '6']) -> label('Текст'); ?>

    <br>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<div class="col-md-4">
    <div class="description">
        <p>Здесь можно добавить/отредактировать вторую полосу.</br>
           "Номер столбца" - номер редактируемого столбца во второй полосе.</br>
           Поле "Картинка" заполнять не нужно.
        </p>
    </div>
</div>