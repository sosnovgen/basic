<?php
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use yii\helpers\StringHelper;
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
                <p><span class="dropcap_green">1</span>
                  <?php
                    $t8 = ArrayHelper::getValue($seconds, '0.content');
                    echo StringHelper::truncate($t8,120,' ...');
                  ?>
                </p>
            </div>
            <div class="three columns">
                <h3><?php echo ArrayHelper::getValue($seconds, '1.title'); ?></h3>
                <p><span class="dropcap_black">2</span>
                    <?php
                        $t8 = ArrayHelper::getValue($seconds, '1.content');
                        echo StringHelper::truncate($t8,120,' ...');
                    ?>
                </p>
            </div>

            <div class="three columns">
                <h3><?php echo ArrayHelper::getValue($seconds, '2.title'); ?></h3>
                <p><span class="dropcap_black">3</span>
                    <?php
                        $t8 = ArrayHelper::getValue($seconds, '2.content');
                        echo StringHelper::truncate($t8,120,' ...');
                    ?>
                </p>
            </div>

            <div class="three columns">
                <h3><?php echo ArrayHelper::getValue($seconds, '3.title'); ?></h3>
                <p><span class="dropcap_black">4</span>
                    <?php
                        $t8 = ArrayHelper::getValue($seconds, '3.content');
                        echo StringHelper::truncate($t8,120,' ...');
                    ?>
                </p>
            </div>
        </div>
        <!-- end row -->
        <hr/>
        <div class="row" style="padding-top: 20px">
            <div class="four columns"> <img src="<?php Url::home(); echo ArrayHelper::getValue($seconds, '4.preview'); ?>" alt="">

                <h3><?php echo ArrayHelper::getValue($seconds, '4.title'); ?></h3>
                <p><em>
                        <?php
                            $t8 = ArrayHelper::getValue($seconds, '4.content');
                            echo StringHelper::truncate($t8,64,' ...');
                        ?>
                </em></p>
            </div>
            <div class="four columns"> <img src="<?php Url::home(); echo ArrayHelper::getValue($seconds, '5.preview'); ?>" alt="">
                <h3><?php echo ArrayHelper::getValue($seconds, '5.title'); ?></h3>
                <p><em>
                        <?php
                            $t8 = ArrayHelper::getValue($seconds, '5.content');
                            echo StringHelper::truncate($t8,64,' ...');
                        ?>
                </em></p>
            </div>
            <div class="four columns"> <img src="<?php Url::home(); echo ArrayHelper::getValue($seconds, '6.preview'); ?>" alt="">
                <h3><?php echo ArrayHelper::getValue($seconds, '6.title'); ?></h3>
                <p><em>
                        <?php
                            $t8 = ArrayHelper::getValue($seconds, '6.content');
                            echo StringHelper::truncate($t8,64,' ...');
                        ?>
                </em></p>
            </div>
        </div>
        <!-- end row -->

