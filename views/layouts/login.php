<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Url;
use app\assets\AppAsset;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <meta charset="utf-8">
    <?php Html::csrfMetaTags() ?>
    <?php $this->head() ?>

    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="<?php echo Url::home()?>stylesheets/foundation.min.css">
    <link rel="stylesheet" href="<?php echo Url::home()?>stylesheets/main.css">
    <link rel="stylesheet" href="<?php echo Url::home()?>stylesheets/app.css">
    <script src="<?php echo Url::home()?>javascripts/modernizr.foundation.js"></script>
    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Playfair+Display:400italic' rel='stylesheet' type='text/css' />
    <!-- IE Fix for HTML5 Tags -->
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
<?php $this->beginBody() ?>
<div class="row page_wrap">
    <!-- page wrap -->
    <div class="twelve columns">
        <!-- page wrap -->
        <div class="row">
            <div class="nine columns header_nav">
                <ul id="menu-header" class="nav-bar horizontal">
                    <li><a href="<?php echo Url::home()?>site/index">Home</a></li>
                    <li><a href="<?php echo Url::home()?>site/chart">Обучение</a></li>
                    <li><a href="<?php echo Url::home()?>post/index">Статьи</a></li>
                    <li ><a href="<?php echo Url::home()?>site/price">Цены</a></li>
                    <li ><a href="galleries.html">Galleries</a></li>
                    <li ><a href="portfolio.html">Portfolio</a></li>
                </ul>
                <script>$('ul#menu-header').nav-bar();</script>
            </div>
            <div class="three columns header_logo"> <img src="<?php echo Url::home()?>images/logo.png" class="hide-for-small" alt=""> </div>
        </div>
        <!-- END Header -->

        <?php if (Yii::$app ->session ->hasFlash('success')){echo '<div class="alert alert-info fade in">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>' . Yii::$app ->session ->getFlash('success') .'</strong></div>';}
        ?>


        <?= $content ?>


        <div class="row">
            <div class="twelve columns">
                <ul id="menu3" class="footer_menu horizontal">
                    <li ><a href="<?php echo Url::home()?>site/index">Home</a></li>
                </ul>
            </div>
        </div>

    </div>
</div>

<!-- Included JS Files (Compressed) -->
<script src="<?php echo Url::home()?>javascripts/foundation.min.js"></script>
<!-- Initialize JS Plugins -->
<script src="<?php echo Url::home()?>javascripts/app.js"></script>

<?php $this->endBody() ?>
</body>
<?php $this->endPage() ?>
