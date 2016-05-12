<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
?>

<h5>Main Menu</h5>
<?=Nav::widget([
    'items' => [
        [
            'label' => 'Home',
            'url' => ['/site/index'],

        ],
        [
            'label' => 'Login',
            'url' => ['/site/login'],

        ],
        [
            'label' => 'About',
            'url' => ['/site/about'],

        ],
        [
            'label' => 'Contact',
            'url' => ['/site/contact'],

        ],
        [
            'label' => 'Other Menu',
            'url' => ['#'],
            'visible' => Yii::$app->user->can('other_access'),
        ],

    ],
    'encodeLabels' => false,
    'activateParents' => true,
    'options' => ['class' =>'nav nav-pills nav-stacked'],
]);
