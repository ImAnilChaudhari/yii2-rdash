<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace imanilchaudhari\rdash\web;

use yii\web\AssetBundle;

/**
 * Configuration for `backend` client script files
 * @since 4.0
 */
class Asset extends AssetBundle
{
    public $sourcePath = '@imanilchaudhari/rdash/assets';
    public $css = [
        'css/animate.css',
        'css/clndr.css',
        'css/font-awesome.min.css',
        'css/landing.css',
        'css/main.css',
        'css/simple-line-icons.css',
    ];
    public $js = [
        'js/src/app.js',
        'js/vendor/modernizr-2.6.2.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
