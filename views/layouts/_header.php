<?php
use yii\helpers\Html;
use yii\helpers\Url;
$directoryAsset = Yii::$app->assetManager->getPublishedUrl('@vendor/kongoon/yii2-theme-ratchakarn/assets');
?>
<div class="row">
    <div class="col-md-4">
        <?php if (!Yii::$app->user->isGuest): // Delete when implementation  ?>
        <div>
            <h5><?php echo Yii::$app->user->identity->realname; ?></h5>
            <ul>
                <li><b>Username:</b> <?= Yii::$app->user->identity->username; ?></li>
                <li><b>Position:</b>  <?= Yii::$app->user->identity->username; ?></li>
                <li><b>Department:</b>  <?= Yii::$app->user->identity->username; ?></li>
                <li>
                    <?php if (isset(Yii::$app->user->identity->last_login_at)): ?>
                    <b>Last Login Date:</b>  <?=Yii::$app->user->identity->last_login_at; ?>
                <?php endif; ?>
                </li>
            </ul>


            </div><!-- end #user -->
        <?php endif; ?>
    </div>
    <div class="col-md-4 text-center">
        <h1><?= Html::img($directoryAsset . '/img/logo_kruth.png', ['height' => 100, 'alt' => 'หน่วยงานราชการ']) ?></h1>

    </div>
    <div class="col-md-4 text-right">

        <?=Html::a('หน้าหลัก', Yii::$app->homeUrl)?>
        <?php if(!Yii::$app->user->isGuest){?>
            <?=Html::a('เมนู 1', ['#'])?>
            <?=Html::a('เมนู 2', ['#'])?>
            <?=Html::a('เมนู 3', ['#'])?>
            <?=Html::a('เมนู 4', ['#'])?>
            <?=Html::a('ออกจากระบบ', ['/site/logout'],[
                'data' => [
                    'method' => 'post',
                ]
            ])?>
        <?php }else{?>
            <?=Html::a('เข้าสู่ระบบ', ['/site/login'])?>
        <?php }?>

    </div>
</div><!-- end row -->
