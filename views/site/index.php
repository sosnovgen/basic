<?php
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
?>

<div class="show-for-large-up">
            <div class="row">
                <div class="twelve columns">
                    <div id="featured"><img src="<?php Url::home()?>images/demo1.jpg" alt=""> <img src="<?php Url::home()?>images/demo2.jpg" alt=""> <img src="<?php Url::home()?>images/demo3.jpg" alt=""></div>
                </div>
            </div>
        </div>
        <div class="row hide-for-small">
            <div class="twelve columns">
                <div class="heading_dots">
                    <h1 class="heading_supersize"><span class="heading_center_bg">Добро пожаловать!</span></h1>
                </div>
            </div>
        </div>
        <!-- end row -->
        <div class="row">
            <div class="three columns">

                <h3><?php echo ArrayHelper::getValue($seconds, '0.title'); ?></h3>
                <p><span class="dropcap_green">1</span> <?php echo ArrayHelper::getValue($seconds, '0.content'); ?></p>
            </div>
            <div class="three columns">
                <h3><?php echo ArrayHelper::getValue($seconds, '1.title'); ?></h3>
                <p><span class="dropcap_black">2</span> <?php echo ArrayHelper::getValue($seconds, '1.content'); ?></p>
            </div>
            <div class="three columns">
                <h3><?php echo ArrayHelper::getValue($seconds, '2.title'); ?></h3>
                <p><span class="dropcap_black">3</span> <?php echo ArrayHelper::getValue($seconds, '2.content'); ?></p>
            </div>
            <div class="three columns">
                <h3><?php echo ArrayHelper::getValue($seconds, '3.title'); ?></h3>
                <p><span class="dropcap_black">4</span> <?php echo ArrayHelper::getValue($seconds, '3.content'); ?></p>
            </div>
        </div>
        <!-- end row -->
        <hr/>
        <div class="row" style="padding-top: 20px">
            <div class="four columns"> <img src="<?php Url::home()?>images/demo2_small.jpg" alt="">
                <h3>Adipiscing Elit</h3>
                <p><em>Vivamus tortor tellus, rutrum sit amet mollis vel, imperdiet consectetur orci.</em></p>
            </div>
            <div class="four columns"> <img src="<?php Url::home()?>images/demo1_small.jpg" alt="">
                <h3>Adipiscing Elit</h3>
                <p><em>Vivamus tortor tellus, rutrum sit amet mollis vel, imperdiet consectetur orci.</em></p>
            </div>
            <div class="four columns"> <img src="<?php Url::home()?>images/demo3_small.jpg" alt="">
                <h3>Adipiscing Elit</h3>
                <p><em>Vivamus tortor tellus, rutrum sit amet mollis vel, imperdiet consectetur orci.</em></p>
            </div>
        </div>
        <!-- end row -->

