<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Backend blog asset bundle.
 */
class AdminAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        '/css/libs/font-awesome.css',
	'/css/libs/nanoscroller.css',
	'/css/compiled/theme_styles.css',
	'/css/libs/jquery-jvectormap-1.2.2.css',
	'/css/libs/weather-icons.css',
	'https//fonts.googleapis.com/css?family=Open+Sans:400,600,700,300',
        
    ];
    public $js = [
        '/js/scripts.js',
	'/js/pace.min.js',
        '/js/jquery.nanoscroller.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset'
    ];
}