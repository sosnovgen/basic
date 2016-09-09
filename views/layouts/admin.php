<?php
use yii\helpers\Html;
use app\assets\AppAsset;
AppAsset::register($this);  // $this represents the view object

/* @var $this yii\web\View */
/* @var $content string */
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>


    <?php $this->beginBody() ?>
    <div class="alert alert-success">
        <h1>Admin</h1>
    </div>

    <?= $content ?>

    <footer>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 widget">© 2016 | Created YourWebSite <span class="pull-right">Minimize your browser »</span>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>