<?php
/**
 * @link http://www.iisucai.com/
 * @copyright Copyright (c) 2015 suxiaolin 
 * @license http://www.iisucai.com/license/
 */

namespace suxiaolin\make\bundles;

use yii\web\AssetBundle;
use yii\helpers\ArrayHelper;
use suxiaolin\make\Make;
class StyleBasedAsset extends AssetBundle {
    /**
     * @var string source assets path
     */
    public $sourcePath = '@suxiaolin/make/assets';
    /**
     * @var array depended bundles
     */
    public $depends = [
        'suxiaolin\make\bundles\CoreAsset',
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
     * @var array style based css
     */
    private $styleBasedCss = [
        Make::STYLE_SQUARE => [
            'global/css/components.css',
        ],
        Make::STYLE_ROUNDED => [
            'global/css/components-rounded.css',
        ],
    ];
    /**
     * Inits bundle
     */
    public function init()
    {
        $this->_handleStyleBased();
        return parent::init();
    }
    /**
     * Handles style based files
     */
    private function _handleStyleBased()
    {
        $this->css = ArrayHelper::merge($this->styleBasedCss[Make::getComponent()->style], $this->css);
    }
}