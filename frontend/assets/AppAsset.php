<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $sourcePath = '@frontend/assets-source';
    //public $basePath = '@webroot';
    //public $baseUrl = '@web';
    public $css = [

        'bower_components/bootstrap/bootstrap.min.css',
        'bower_components/swiper/dist/css/swiper.min.css',
        'style/css/fonts.css',
        'bower_components/animate/animate.css',
        'style/css/StyleSheet.css',
        'bower_components/jquery-ui-1.12.1.custom/jquery-ui.css',
    ];
    public $js = [

        'bower_components/jquery-ui-1.12.1.custom/external/jquery/jquery.js',
        'bower_components/jquery-ui-1.12.1.custom/jquery-ui.js',
        'bower_components/swiper/dist/js/swiper.js',
        'bower_components/animate/waypoints.min.js',
        'bower_components/animate/animate-css.js',
        'js/JavaScript.js',
    ];
    public $depends = [

    ];
}
