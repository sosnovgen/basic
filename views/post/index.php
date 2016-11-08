<?php

use yii\helpers\Html;
use yii\helpers\StringHelper;
use yii\widgets\ActiveForm;
use yii\data\ActiveDataProvider;
use \yii\grid\GridView;
use yii\helpers\Url;
?>

    <div class="row capture">
        <h3 class="text-center">Статьи</h3>
    </div>

    <div class="table-responsive">

<?php

echo GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        /*['class' => 'yii\grid\SerialColumn'],*/
        'id:text:id',
        [
            'label' => 'Картинка',
            'format' => 'raw',
            'value' => function($data){
                return Html::img(Url::toRoute($data -> preview),[
                    'alt'=>'',
                    'style' => 'width:60px; height:40px;'
                ]);
            },
        ],
        'title:text:Название',
        /*'body:text:Содержание',*/
        [
            'label' => 'Содержание',
            'attribute' => 'body',
            'value' => function ($data) {
                return StringHelper::truncate($data->body, 100);
            }
        ],
        'priznak:text:Признак',
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
