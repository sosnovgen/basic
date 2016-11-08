<?php
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'neil5art';
$this->registerMetaTag([
    'name' => 'description',
    'content' => 'школа обучения маникюра рисунки гелями'
]);
$this->registerMetaTag([
    'name' => 'keywords',
    'content' => 'методика гель типсы перманентный макияж'
]);
?>
<div style="margin-top: 50px;">
    <div class="row">

        <div class="col-md-6">
            <div class="about">
                <h2>О нас</h2>
                <p>
                    Мы - практикующие мастера! И мы точно знаем, что должен уметь мастер!
                    Наши преподаватели имеют высшее образование и опыт ведения курсов,
                    они помогут вам в освоении нужной профессии.</p>
                <p>    К нашим несомненным преимуществам относится также возможность
                    выбора удобного для вас времени занятий, обучение в мини-группах и
                    практичная схема оплаты с рассрочкой по месяцам.
                </p>

            </div>
        </div>

        <div class="col-md-6">
            <div class="img_about">
                <img src="<?php echo Url::home()?>images/about/abby.jpg" class="img-responsive"/>
            </div>
        </div>

    </div>
</div>
<br>
