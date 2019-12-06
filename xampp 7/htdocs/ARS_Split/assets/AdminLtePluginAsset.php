<?php
/**
 * Created by PhpStorm.
 * User: sathish.d
 * Date: 11/1/2017
 * Time: 12:21 PM
 */
namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AdminLtePluginAsset extends AssetBundle
{
    public $sourcePath = '@vendor/almasaeed2010/adminlte/plugins';
   /* public $js = [
        'datatables/dataTables.bootstrap.min.js',
        // more plugin Js here
    ];
    public $css = [
        'datatables/dataTables.bootstrap.css',
        // more plugin CSS here
    ];*/
    public $depends = [
        'dmstr\web\AdminLteAsset',
    ];
}
