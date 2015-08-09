<?php
/**
 * @copyright Copyright (c) 2014 suxiaolin
 * @license http://www.iisucai.com/license/
 */

namespace suxiaolin\make\bundles;

use yii\web\AssetBundle;

/**
 * 提供所有make样式文件访问入口
 */
class AllAsset extends AssetBundle {
    /**
     * @var string source assets path
     */
    public $sourcePath = '@suxiaolin/make/assets';
}