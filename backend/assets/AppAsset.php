<?php 
namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */


class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $jsOptions = ['position' => \yii\web\View::POS_HEAD];
    public $css = [
        'css/site.css',
        'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css',
        '/backend/web/plugins/grid/css/trirand/ui.jqgrid-bootstrap.css',
        '/backend/web/plugins/grid/css/trirand/ui.jqform.css',
        '/backend/web/plugins/grid/css/uibootstrap/jquery-ui-1.10.0.bootstrap.css',
        '/backend/web/plugins/grid/css/ui.multiselect.css',
        '/backend/web/plugins/grid/css/trirand/ui.jqForm.css'
        
    ];
    public $js = [
        
        'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js',
        //'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js',
        '/backend/web/plugins/grid/js/jquery-ui.min.js',
        '/backend/web/plugins/grid/js/trirand/i18n/grid.locale-ru.js',
        '/backend/web/plugins/grid/js/trirand/jquery.jqGrid.min.js',        
        '/backend/web/plugins/grid/js/my.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        
    ];
}