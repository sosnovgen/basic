<?php
use yii\helpers\Url;
use yii\helpers\StringHelper;
use yii\widgets\LinkPager;
?>

<div class="row">
<div class="col-md-8">
    <?php foreach ($models as $model): ?>
        <div class="blog_post">
            <!-- Begin Blog Post -->
            <div class="heading_dots_grey">
                <h3><span class="heading_bg"><?php echo $model->title ?></span></h3>
            </div>
            <img src="<?php echo Url::home();
            echo $model->preview ?>" alt="" style="width:100%">
            <p><em><?php echo $model->created_at ?>| Posted by: <a href="#">Admin</a></em></p>
            <p class="body_1"><?php echo StringHelper::truncate($model->body, 250, ' ...') ?><a href="<?php echo Url::toRoute(['site/article', 'id' => $model ->id]) ?>">подробнее &raquo;</a></p>
        </div><br>
    <?php endforeach; ?>
    <!-- END blog post -->
</div>

<!-- END row blog -->


<div class="col-md-4" style="padding-left: 50px;">
    <div class="heading_dots_grey">
        <h3><span class="heading_bg">Все статьи</span></h3>
    </div>
    <ul>
        <?php foreach ($articles as $article): ?>
        <li class="article"><a href="<?php echo Url::toRoute(['site/article', 'id' => $article ->id]) ?>" class="#"><?php echo $article ->title ?></a></li>
        <?php endforeach; ?>
    </ul>
</div>

</div>

<div style="width: 50%; margin: 0 auto; text-align: center;">
<?php echo LinkPager::widget([
'pagination' => $pages,
]); ?>

</div>