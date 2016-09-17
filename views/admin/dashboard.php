<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */


$this->title = 'admin panel';
?>

<div class="container">
    <div class="col-md-4">
        <h2>Статьи</h2>
        <ul class="list-group">
            <li class="list-group-item"><a href="<?php echo Url::to(['category/create','id' => 'five'])?>" >Все товары</a></li>
            <li class="list-group-item"><a href="#" >Добавить товар</a></li>
        </ul>

        <h2>Категории</h2>
        <ul class="list-group">
            <li  class="list-group-item"><a href="<?php echo Url::to(['test/view','id' => 'one'])?>">Все категории</a></li>
            <li  class="list-group-item"><a data-toggle="modal" href="#myModal">Добавить категорию</a></li>
        </ul>


        <br>
        <?php echo Url::to(['test/view','id' => 'tonight'])?>


    </div>

    <div class="col-md-5">
        <div class="lesson_01">
            <h4>Админпанель - управление сайтом</h4>
            1. Здесь Вы можете просмотреть, добавить, изменить или удалить товар (см. "Как добавить товар").
            <br><br>

            2. Категория - это условная группа, в которую можно объединить товары по какому-то признаку. Создаётся один раз, перед добавлением товара в неё.
            в дальнейшем <strong>не удаляется!</strong>. <br>
            При создании новой категории можно выбрать и добавить иконку - картинку (см. "Как добавить товар").
            <br><br>

            3. Группа - признак, который в отличие от категории может присваиваться любому товару для придания особого статуса , например: "Новинка", "Распродажа" и т.п.
            <br><br>
            4. Заказы - выводит список всех заказов по дате. Здесь можно просматривать, менять статус, редактировать адрес и время доставки и т.п.
            <br><br>
            5. Редактировать, удалять осторожно, данные в Б.Д. не восстанавливаются.

        </div>
    </div>

    <div class="col-md-3"></div>
    <? var_dump($model); ?>

</div>

<!-- Modal Categories Create -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Создать категорию</h4>
            </div>
            <div class="modal-body">
                <div class="container">
                    <form method="POST" action="<?php echo Url::to(['category/create'])?>" class="form-group" enctype="multipart/form-data"/>
                    <div class="col-xs-4">
                        <label for="ex3">Название категории</label>
                        <input class="form-control" name="Category[title]" id="ex3" type="text">
                        <br>

                        <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />

                        <button type="submit" class="btn btn-default">Сохранить</button>
                    </div>
                </div>
            </div>

            <br>

            <div class="modal-footer">

            </div>
            </form>

        </div>

    </div>
</div>



