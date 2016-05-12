<?php
use kongoon\yii2\themes\ratchakarn\RatchakarnAsset;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use yii\helpers\Url;



if(Yii::$app->controller->action->id === 'login'){
    echo $this->render(
        'login',
        ['content' => $content]
    );
}else{
    RatchakarnAsset::register($this);
?>
    <?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
        <head>
            <meta charset="<?= Yii::$app->charset ?>">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <?= Html::csrfMetaTags() ?>
            <title><?= Html::encode($this->title) ?> - <?=Yii::$app->name?></title>
            <?php $this->head() ?>
        </head>


    <body class="bg-green">
    	<?php $this->beginBody() ?>
    	<?=$this->render('//layouts/alert')?>
        <div class="container-fluid">
            <?= $this->render('//layouts/_header'); ?>
            <div class="row"><div style="height:5px; background-color: black;"></div></div>
            <div class="row" style="background-color: white">
                <div id="left-content" class="col-md-2">
                    <div class="row">
                        <div class="col-md-12" id="left-menu">
                            <?= $this->render('//layouts/_menu'); ?>
                        </div>
                    </div>
                </div>

                <div id="main-content" class="col-md-10">
                    <div>
                        <?= Html::a('<i class="glyphicon glyphicon-th-list"></i>', '#', ['class' => 'btn btn-xs btn-link', 'title' => 'ซ่อน/แสดงเมนู', 'id' => 'menu-button']) ?>

                        <?= Breadcrumbs::widget([
                            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                        ]) ?>
                    </div>
                    <?php echo $content; ?>
                </div>
            </div>
            <?= $this->render('//layouts/_footer'); ?>
        </div>

        <?php $this->endBody() ?>
    </body>
    </html>
    <?php $this->endPage() ?>
<?php }// end if?>
