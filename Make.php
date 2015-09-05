<?php
/**
 * @link http://www.iisucai.com/
 * @copyright Copyright (c) 2015 suxiaolin 
 * @license http://www.iisucai.com/license/
 */

namespace suxiaolin\make;

use Yii;
use yii\web\AssetBundle;
use yii\base\InvalidConfigException;
use suxiaolin\make\bundles\ThemeAsset;

/**
 * This is the class of Make Component
 */
class Make extends \yii\base\Component {
    /**
     * Search string
     */
    const PARAM_LAYOUT = '{layout}';

    const LAYOUT1 = 'layout1';
    const LAYOUT2 = 'layout2';
    const LAYOUT3 = 'layout3';
    const LAYOUT4 = 'layout4';
    const MD_LAYOUT1 = 'md-layout1';
    const MD_LAYOUT2 = 'md-layout2';
    const MD_LAYOUT3 = 'md-layout3';
    const MD_LAYOUT4 = 'md-layout4';

    /**
     * @var string version
     */
    public $layout;

    /**
     * @var array resources paths
     */
    public $resources;

    /**
     * @var string Component name used in the application
     */
    public static $componentName = 'make';
    
    public static $bundle;

    /**
     * Inits module
     */
    public function init()
    {
        parent::init();
        Yii::setAlias('@suxiaolin/make/assets', $this->resources);
        if ( ! isset($this->layout)) {
            $this->layout = self::LAYOUT1;
        }
        if ( ! in_array($this->layout, [self::LAYOUT1, self::LAYOUT2, self::LAYOUT3, self::LAYOUT4, self::MD_LAYOUT1, self::MD_LAYOUT2, self::MD_LAYOUT3, self::MD_LAYOUT4])) {
            throw new InvalidConfigException('Invalid configuration `layout`');
        }
    }

    public function takeLayout(ThemeAsset $themeAsset)
    {
        // md-layout加上额外的css和js
        if (in_array($this->layout, [self::MD_LAYOUT1, self::MD_LAYOUT2, self::MD_LAYOUT3, self::MD_LAYOUT4])) {
            array_unshift($themeAsset->css, 'admin/{layout}/material-design/css/material.css');
            array_unshift($themeAsset->js, 'admin/{layout}/material-design/js/material.js');
        }

        foreach($themeAsset->css as &$css) {
            $css = str_replace(static::PARAM_LAYOUT, $this->layout, $css);
        }
        foreach($themeAsset->js as &$js) {
            $js = str_replace(static::PARAM_LAYOUT, $this->layout, $js);
        }
    }

    /**
     * @return Make Get Make component
     */
    public static function getComponent()
    {
        return Yii::$app->{static::$componentName};
    }

    /**
     * Register Theme Asset
     * @param $view View
     * @return AssetBundle
     */
    public static function registerThemeAsset($view)
    {
        return static::$bundle = ThemeAsset::register($view);
    }
}