<?php
use yii\data\ActiveDataProvider;
use \yii\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\StringHelper;

?>

    <div class="row capture">
        <h3 class="text-center">Подробное описание курса</h3>
    </div>
<br>

    <div class="table-responsive">

<?php

echo GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        /*['class' => 'yii\grid\SerialColumn'],*/
        // Вариант с возможностью сортировки по полю
        'plan.title:text:Курс',
        /*'content:text:Программа обучения',*/
        [
            'label' => 'Программа обучения',
            'attribute' => 'content',
            'value' => function ($data) {
                return StringHelper::truncate($data->content, 100);
            }
        ],

        /*'created_at:date:Создано',*/
        [
            'label' => 'Создано',
            'attribute' => 'created_at',
            'format' =>  ['date', 'dd.MM.YYYY'],
            'options' => ['width' => '80'],
        ],

        [
            'class' => 'yii\grid\ActionColumn',
            'header'=>'Действия',
            'headerOptions' => ['width' => '60'],
            'template' => '{update} {delete}{link}',
            'buttons' => [
                'delete' => function($url, $model){
                    return Html::a('<span class="glyphicon glyphicon-trash"></span>', ['delete', 'id' => $model->id], [
                        'class' => '',
                        'data' => [
                            'confirm' => 'Удалить запись?',
                            'method' => 'post',
                        ],
                    ]);
                }
            ]
        ],

    ],
    // ...

]);

?>
        </div>
