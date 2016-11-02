<?php
use yii\helpers\Url;
?>

<div class="row">
    <div class="twelve columns">
        <div class="blog_post">
            <!-- Begin Blog Post -->
            <div class="heading_dots_grey">
                <h3><span class="heading_bg"><?php echo $model->title ?></span></h3>
            </div>
            <img src="<?php echo Url::home();
            echo $model->preview ?>" alt="" style="width:100%">
            <p><em><?php echo $model->created_at ?> | Posted by: <a href="#">Admin</a></em></p>
            <p class="body_1"><?php echo $model->body ?></p>
        </div>
        <!-- END blog post -->
    </div>
    <!-- END row blog -->
</div>
