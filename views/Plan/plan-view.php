<?php
use yii\data\ActiveDataProvider;
use \yii\grid\GridView;
?>


<?php

    echo GridView::widget([
    'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'title:text:Название',
            'duration',
            'content',
            'diploma',
            'cena',


            [
                'attribute' => 'created_at',
                'format' =>  ['date', 'dd.MM.YYYY'],
                'options' => ['width' => '100']
            ],

            [
                'class' => 'yii\grid\ActionColumn',
                'headerOptions' => ['width' => '60'],
                'template' => '{update} {delete}{link}',
            ],

        ],
        // ...

    ]);

?>