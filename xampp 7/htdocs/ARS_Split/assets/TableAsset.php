<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;
use yii\web\View;

use yii\web\AssetBundle;


class TableAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/jquery.rtResponsiveTables.css',
    ];
    public $js = [
        'js/jquery.rtResponsiveTables.min.js',
    ];
}
