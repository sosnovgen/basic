<?php
use yii\helpers\Url;
use yii\helpers\StringHelper;
?>

<div class="col-md-8">
    <?php foreach ($models as $model): ?>
        <div class="blog_post">
            <!-- Begin Blog Post -->
            <div class="heading_dots_grey">
                <h3><span class="heading_bg"><?php echo $model->title ?></span></h3>
            </div>
            <img src="<?php echo Url::home();
            echo $model->preview ?>" alt="" style="width:100%">
            <p><?php echo $model->created_at ?>| Posted by: <a href="#">Admin</a></p>
            <p class="body_1"><?php echo StringHelper::truncate($model->body, 250, '...') ?><a href="blog-single.html">Continue
                    Reading &raquo;</a></p>
        </div>
    <?php endforeach; ?>
    <!-- END blog post -->
</div>

<!-- END row blog -->


<div class="col-md-4">
    <div class="heading_dots_grey">
        <h3><span class="heading_bg">Sidebar</span></h3>
    </div>
    <ul>
        <li class="#">Nulla tincidunt</li>
    </ul>
</div>
