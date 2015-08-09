<?php
/**
 * @copyright Copyright (c) 2014 suxiaolin
 * @license http://www.iisucai.com/license/
 */

namespace suxiaolin\make\bundles;

use yii\web\AssetBundle;

class GlobalAsset extends AssetBundle {

    /**
     * @var string source assets path
     */
    public $sourcePath = '@suxiaolin/make/assets/global';

    /**
     * @var array depended packages
     */
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
    ];

    /**
     * @var array css assets
     */
    public $css = [
        'css/style.css',
        'css/theme.css',
        'css/ui.css',
    ];

    /**
     * @var array js assets
     */
    public $js = [
        "plugins/jquery/jquery-1.11.1.min.js",
        "plugins/jquery/jquery-migrate-1.2.1.min.js",
        "plugins/jquery-ui/jquery-ui-1.11.2.min.js",
        "plugins/gsap/main-gsap.min.js",
        "plugins/bootstrap/js/bootstrap.min.js",
        "plugins/jquery-cookies/jquery.cookies.min.js",
        "plugins/jquery-block-ui/jquery.blockUI.min.js",
        "plugins/bootbox/bootbox.min.js",
        "plugins/mcustom-scrollbar/jquery.mCustomScrollbar.concat.min.js",
        "plugins/bootstrap-dropdown/bootstrap-hover-dropdown.min.js",
        "plugins/charts-sparkline/sparkline.min.js",
        // "plugins/retina/retina.min.js",
        "plugins/select2/select2.min.js",
        "plugins/icheck/icheck.min.js",
        "plugins/backstretch/backstretch.min.js",
        "plugins/bootstrap-progressbar/bootstrap-progressbar.min.js",
        "js/builder.js",
        "js/sidebar_hover.js",
        "js/application.js",
        "js/plugins.js",
        "js/widgets/notes.js",
        "js/quickview.js",
        "js/pages/search.js",
        "plugins/modernizr/modernizr-2.6.2-respond-1.1.0.min.js",
    ];
}