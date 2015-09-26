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
class Assets extends AssetBundle
{
    public $sourcePath = '@vendor/imanilchaudhari/yii2-rdash/assets';
    public $css = [
        'css/animate.css',
        'css/clndr.css',
        'css/font-awesome.min.css',
        'css/landing.css',
        'css/main.css',
        'css/simple-line-icons.css'
    ];
    public $js = [
        // Global
        'js/src/app.js',        
        'plugins/navgoco/jquery.navgoco.min.js',
        'plugins/pace/pace.min.js',
        'plugins/fullscreen/jquery.fullscreen-min.js',
        
        // Page level JS        
        'plugins/countTo/jquery.countTo.js',
        'plugins/weather/js/skycons.js',
        'plugins/daterangepicker/moment.min.js',
        'plugins/daterangepicker/daterangepicker.js',
        
        // Chart JS
        'plugins/chartjs/Chart.min.js',
        
        // Morris
        'plugins/morris/js/morris.min.js',
        'plugins/morris/js/raphael.2.1.0.min.js',
        
        // Vector Map
        'plugins/jvectormap/js/jquery-jvectormap-1.2.2.min.js',
        'plugins/jvectormap/js/jquery-jvectormap-world-mill-en.js',
        
        // Gauge
        'plugins/gauge/gauge.min.js',
        'plugins/gauge/gauge-demo.js',
        
        // Calender
        'plugins/calendar/clndr.js',
        'plugins/calendar/clndr-demo.js',        
        'plugins/underscore.js/1.5.2/underscore-min.js',
        
        
        'js/vendor/modernizr-2.6.2.min.js',
        
        
        
        'plugins/switchery/switchery.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
