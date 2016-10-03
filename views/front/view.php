<?php
use yii\data\ActiveDataProvider;
use \yii\grid\GridView;
use yii\helpers\Html;

?>


<?php
echo GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        /*['class' => 'yii\grid\SerialColumn'],*/
        'id:text:id',
        'title:text:Заголовок',
        'content:text:Текст',
        'group:text:Группа',
        'priznak:text:№ столбика',
        'created_at:date:Создано',


        /* [
             'attribute' => 'created_at',
             'header'=>'Создано',
             'format' =>  ['date', 'dd.MM.YYYY'],
             'options' => ['width' => '100']
         ],*/

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