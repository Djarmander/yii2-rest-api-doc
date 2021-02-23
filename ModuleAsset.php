<?php

namespace djarmander\yii2\rest_api_doc;

class ModuleAsset extends \yii\web\AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = __DIR__ . '/assets';

    /**
     * @inheritdoc
     */
    public $css = [
        'jsonview/jquery.jsonview.min.css',
        'doc.css',
        'site.css',
    ];

    /**
     * @inheritdoc
     */
    public $js = [
        'jsonview/jquery.jsonview.min.js',
        'doc.js',
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
    ];

}
