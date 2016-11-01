<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<button type="button" class="close" onclick="history.back();">&times;</button>
<div class="col-md-8">

    <?php $form = ActiveForm::begin(); ?>


    <div class="row capture">
        <h3>Статья</h3>
    </div>

    <br>

    <div class="row">
        <div class="col-md-5">
            <?= $form->field($model, 'title')->textInput()->label('Заголовок'); ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'preview')->fileInput(['class' => 'filestyle', 'data-buttonText'=> 'Выбрать'])->label('Картинка'); ?>
        </div>
        <div class="col-md-3">
            <?php echo $form->field($model, 'priznak')->dropDownList([

                '1' => 'Публиковать',
                '2' => 'Скрыть',

            ])-> label('Признак'); ?>

        </div>
    </div>

    <?= $form->field($model, 'body')-> textArea(['rows' => '18','id' => 'editor']) -> label('Текст'); ?>

    <br>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<div class="col-md-4">
    <div class="description">
        <p>* Здесь можно добавить/отредактировать статью.
            Размер картинки примерно 450Х230.</br>
            В тексте статьи можно применять форматирование текста (цвет, размер, список).
        </p>
        <p>* Перенос строки: "Shift + Enter". <br>
        * После вставки чужого текста очистите форматирование:
             <br>   "Format -> Clear formatting".
        </p>
    </div>
</div>