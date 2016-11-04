<?php
use yii\helpers\Url;
?>
<h1><?php echo $model ->title ?> </h1>

<br>

<div class="row">
  <div class="col-md-10">
    <div class="col-md-6">
        <img src="<?php echo Url::home();
        echo $model->preview ?>" alt=" " style="width:100%; padding: 4px;"/>
    </div>

    <div class="left_block_front">
        <p><?php echo $model->content ?></p>
    </div>
   </div>

</div>
</div><br>



