<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<button type="button" class="close" onclick="history.back();">&times;</button>
<div class="col-md-8">
    <?php $form = ActiveForm::begin(); ?>


    <div class="row capture">
        <h3>Уроки</h3>
    </div>

    <br>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'title')->textInput()->label('Название курса'); ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'preview')->fileInput(['class' => 'filestyle', 'data-buttonText'=> 'Выбрать'],['value' => 'images/button.jpg'])->label('Картинка'); ?>
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

    <span class="small pull-right">* Размер шрифта в списке: 10pt. </span><br>
    <span class="small pull-right">* Перенос строки клавиши: Shift + Enter </span>

    <?= $form->field($model, 'content')-> textArea(['rows' => '8']) -> label('Программа обучения'); ?>

    <br>
    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<div class="col-md-4">
 <div class="description">
    <p>    * Здесь можно добавить описание нового урока. </p>
     <p>   * Выберите картинку (размер примерно 450Х230).</p>
     <p>   * "Время обучения", "Экзамен/Диплом" - примерно 30 букв. </p>
     <p>   * "Программа обучения" - используйте список, размер шрифта 10pt.</p>
     <p>    * Перенос строки: "Shift + Enter". </p>
     <p>    * После вставки чужого текста очистите форматирование:
         <br>   "Format -> Clear formatting".
     </p>
 </div>
</div>