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
    const PARAM_VERSION = '{version}';
    const PARAM_THEME = '{theme}';

    /**
     * @var string version
     */
    public $version = 'layout';
    /**
     * @var string Theme
     */
    public $theme = 'light';

    /**
     * @var array resources paths
     */
    public $resources;

    /**
     * @var string Component name used in the application
     */
    public static $componentName = 'make';

    /**
     * Inits module
     */
    public function init()
    {
        Yii::setAlias('@suxiaolin/make/assets', $this->resources);
    }

    public function parseAssetsParams(&$string)
    {
        if (preg_match('/\{[a-z]+\}/', $string))
        {
            $string = str_replace(static::PARAM_VERSION, $this->version, $string);
            $string = str_replace(static::PARAM_THEME, $this->theme, $string);
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
     * Get base url to make assets
     * @param $view View
     * @return string
     */
    public static function getAssetsUrl($view)
    {
        if (static::$assetsBundle === null)
        {
            static::$assetsBundle = static::registerThemeAsset($view);
        }

        return (static::$assetsBundle instanceof AssetBundle) ? static::$assetsBundle->baseUrl : '';
    }

    /**
     * Register Theme Asset
     * @param $view View
     * @return AssetBundle
     */
    public static function registerThemeAsset($view)
    {
        return static::$assetsBundle = ThemeAsset::register($view);
    }
}