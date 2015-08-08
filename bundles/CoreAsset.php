<?php
/**
 * @copyright Copyright (c) 2014 suxiaolin
 * @license http://www.iisucai.com/license/
 */

namespace suxiaolin\make\bundles;

use yii\web\AssetBundle;

class CoreAsset extends AssetBundle {

    /**
     * @var string source assets path
     */
    public $sourcePath = '@suxiaolin/make/assets';

    /**
     * @var array depended packages
     */
    public $depends = [
        'suxiaolin\make\bundles\FontAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];

    /**
     * @var array css assets
     */
    public $css = [
    ];

    /**
     * @var array js assets
     */
    public $js = [
    ];

    /**
     * @var array js options
     */
    public $jsOptions = [
        'conditions' => [
        ],
    ];
}