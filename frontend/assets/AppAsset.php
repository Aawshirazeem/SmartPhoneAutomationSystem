<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
	    'css/font-awesome.min.css',
		'css/bootstrap.min.css',
		'css/style.css',
        'css/site.css',
    ];
    public $js = [
	     'js/modernizr.js',
		 'js/jquery-2.1.1.js',
		 'js/gmaps.js',
		 'js/smoothscroll.js',
		 'js/bootstrap.min.js',
		 'js/custom.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
