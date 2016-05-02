<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/main.css',
        'css/site.css',
        
    ];
    public $js = [
        'js/main.js',
        'js/jquery.scrollex.min.js',
        'js/jquery.scrolly.min.js',
        'js/skel.min.js',
        'js/util.js',
        'js/ie/respond.min.js',
        'js/main2.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}


// <script src="assets/js/jquery.min.js"></script>
//             <script src="assets/js/jquery.scrollex.min.js"></script>
//             <script src="assets/js/jquery.scrolly.min.js"></script>
//             <script src="assets/js/skel.min.js"></script>
//             <script src="assets/js/util.js"></script>
//             <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
//             <script src="assets/js/main.js"></script>