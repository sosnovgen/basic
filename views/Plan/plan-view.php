<?php
use yii\data\ActiveDataProvider;
use \yii\grid\GridView;
?>


<?php

    echo GridView::widget([
    'dataProvider' => $dataProvider,
    
    ]);

?>