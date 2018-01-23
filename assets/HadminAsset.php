<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class HadminAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'lib/h-admin/h-ui/css/H-ui.min.css',
        'lib/h-admin/h-ui.admin/css/H-ui.admin.css',
        'lib/h-admin/lib/Hui-iconfont/1.0.8/iconfont.css',
        'lib/h-admin/h-ui.admin/skin/default/skin.css',
        'lib/h-admin/h-ui.admin/css/style.css',
    ];
    public $js = [
        'lib/h-admin/lib/layer/2.4/layer.js',
        'lib/h-admin/h-ui/js/H-ui.min.js',
        'lib/h-admin/h-ui.admin/js/H-ui.admin.js',
        'lib/h-admin/lib/My97DatePicker/4.8/WdatePicker.js',
        'lib/h-admin/lib/datatables/1.10.0/jquery.dataTables.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
