<?php
/**
 * @link http://www.iisucai.com/
 * @copyright Copyright (c) 2015 suxiaolin 
 * @license http://www.iisucai.com/license/
 */

namespace suxiaolin\make\bundles;

use yii\web\AssetBundle;
use suxiaolin\make\Make;

class ThemeAsset extends AssetBundle {

    /**
     * @var string source assets path
     */
    public $sourcePath = '@suxiaolin/make/assets/admin/{layout}';

    /**
     * @var array depended bundles
     */
    public $depends = [
        'suxiaolin\make\bundles\GlobalAsset',
    ];

    /**
     * @var array css assets
     */
    public $css = [
        'css/layout.css',
    ];

    /**
     * @var array js assets
     */
    public $js = [
        'js/layout.js',
    ];

    /**
     * Inits bundle
     */
    public function init()
    {
        Make::getComponent()->parseAssetsParams($this);

        return parent::init();
    }
}