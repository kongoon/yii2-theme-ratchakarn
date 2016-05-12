<?php
namespace kongoon\yii\themes;

class Ratchakarn extends  \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/kongoon/yii2-theme-ratchakarn/assets';
    public $css = [
        'css/bootstrap.css',
        'css/bootstrap-theme.css',
        'css/custom.css',
    ];
    public $js = [
        'js/jquery.cookie.js',
        'js/ready.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];


}
