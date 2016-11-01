<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<button type="button" class="close" onclick="history.back();">&times;</button>
<div class="col-md-8">

    <?php $form = ActiveForm::begin(); ?>


    <div class="row capture">
        <h3>Редактировать список студентов</h3>
    </div>

    <br>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'name')->textInput()->label('Имя'); ?>
        </div>
        <div class="col-md-3">
            <?php echo $form->field($model, 'completed')->dropDownList([

                'Не оплатил' => 'Не оплатил',
                'Оплатил' => 'Оплатил',
                'Кредит' => 'Кредит',
                'Долг' => 'Долг',
                'Бесплатно' => 'Бесплатно',

            ])-> label('Оплата'); ?>
        </div>
        <div class="col-md-3">
            <?php echo $form->field($model, 'status')->dropDownList([

                'Кандидат' => 'Кандидат',
                'Принят' => 'Принят',
                'Исключён' => 'Исключён',
                'Новый' => 'Новый',
                'Окончил' => 'Окончил',


            ])-> label('Статус'); ?>

        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'curs')->textInput()->label('Название курса'); ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'phone')->textInput()->label('Телефон'); ?>
        </div>
    </div>

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
        <p>Здесь можно редактировать список студентов.
            Изменять статус студента, оплату за занятия, вносить замечания.
        </p>
    </div>
</div>