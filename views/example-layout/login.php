<?php

use kongoon\themes\ratchakarn\RatchakarnAsset;
use yii\helpers\Html;

RatchakarnAsset::register($this);
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

        <style>
            body{
                margin-top:100px;
            }
        </style>
    </head>

    <body>
    <?php $this->beginBody() ?>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4"><?= $content; ?></div>
            </div><!-- end .row -->
            <?=$this->render('//_footer')?>
        </div><!-- end .container -->
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
