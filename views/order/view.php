<?php
use yii\data\ActiveDataProvider;
use \yii\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;

?>

    <div class="row capture">
        <h3 class="text-center">Студенты</h3>
    </div>

<?php

echo GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        /*['class' => 'yii\grid\SerialColumn'],*/
        'id:text:id',
        'name:text:Имя',
        'phone:text:Телефон',
        'curs:text:Название курса',
        'content:text:Текст',
        'completed:text:Принят?',
        'status:text:Статус',
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