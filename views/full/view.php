<?php
use yii\data\ActiveDataProvider;
use \yii\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;

?>


<?php

echo GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        /*['class' => 'yii\grid\SerialColumn'],*/
        // Вариант с возможностью сортировки по полю
        'plan.title:text:Курс',
        'content:text:Программа обучения',
        'created_at:date:Создано',

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