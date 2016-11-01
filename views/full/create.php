<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<button type="button" class="close" onclick="history.back();">&times;</button>
<div class="col-md-8">
    <?php $form = ActiveForm::begin(); ?>


    <div class="row capture">
        <h3>Подробное описание курса</h3>
    </div>

    <br>

    <div class="row">
        <div class="col-md-6">
            <?php echo $form->field($model, 'plan_id')->dropDownList($list, $param)-> label('Название курса'); ?>
        </div>

    </div>


    <span class="small pull-right">* Размер шрифта в списке: 10pt. </span><br>
    <span class="small pull-right">* Перенос строки клавиши: Shift + Enter </span>
    <?= $form->field($model, 'content')-> textArea(['rows' => '18']) -> label('Подробное описание'); ?>

    <br>
    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<div class="col-md-4">
    <div class="description">
        <p>* Здесь можно добавить подробное описание курса. Текст будет выводиься на отдельной странице.</p>
        <p>    * Можно выбирать любое форматирование текста (цвет,размер шрифта).</p>
        <p>    * Обязательно выберите название курса, для которого создано подробное описание (в выпадающем списке сверху).</p>
        <p>    * Перенос строки: "Shift + Enter". </p>
        <p>    * После вставки чужого текста очистите форматирование:
            <br>   "Format -> Clear formatting".
        </p>
    </div>
</div>