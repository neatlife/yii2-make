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
    public $sourcePath = '@suxiaolin/make/assets/admin/{version}';

    /**
     * @var array depended bundles
     */
    public $depends = [
        'suxiaolin\make\bundles\CoreAsset',
        'suxiaolin\make\bundles\StyleBasedAsset',
    ];

    /**
     * @var array css assets
     */
    public $css = [
        'css/layout.css',
        'css/themes/{theme}.css',
        'css/custom.css',
    ];

    /**
     * @var array js assets
     */
    public $js = [
        'scripts/layout.js',
        'scripts/quick-sidebar.js',
        'scripts/demo.js',
    ];

    /**
     * Inits bundle
     */
    public function init()
    {
        $this->_handleSourcePath();

        $this->_handleDynamicCss();

        return parent::init();
    }

    /**
     * Parses source path
     */
    private function _handleSourcePath()
    {
        Make::getComponent()->parseAssetsParams($this->sourcePath);
    }

    /**
     * Parses dynamic css
     */
    private function _handleDynamicCss()
    {
        array_walk($this->css, array(Make::getComponent(), 'parseAssetsParams'));
    }

}