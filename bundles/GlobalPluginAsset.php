<?php
/**
 * @copyright Copyright (c) 2014 suxiaolin
 * @license http://www.iisucai.com/license/
 */

namespace suxiaolin\make\bundles;

use yii\web\AssetBundle;

class GlobalPluginAsset extends AssetBundle {

    /**
     * @var string source assets path
     */
    public $sourcePath = '@suxiaolin/make/assets';

    /**
     * @var array depended packages
     */
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
    ];

    /**
     * @var array js assets
     */
    public $js = [
        "global/plugins/jquery/jquery-1.11.1.min.js",
        "global/plugins/jquery/jquery-migrate-1.2.1.min.js",
        "global/plugins/jquery-ui/jquery-ui-1.11.2.min.js",
        "global/plugins/gsap/main-gsap.min.js",
        "global/plugins/bootstrap/js/bootstrap.min.js",
        "global/plugins/jquery-cookies/jquery.cookies.min.js",
        "global/plugins/jquery-block-ui/jquery.blockUI.min.js",
        "global/plugins/bootbox/bootbox.min.js",
        "global/plugins/mcustom-scrollbar/jquery.mCustomScrollbar.concat.min.js",
        "global/plugins/bootstrap-dropdown/bootstrap-hover-dropdown.min.js",
        "global/plugins/charts-sparkline/sparkline.min.js",
        // "global/plugins/retina/retina.min.js",
        "global/plugins/select2/select2.min.js",
        "global/plugins/icheck/icheck.min.js",
        "global/plugins/backstretch/backstretch.min.js",
        "global/plugins/bootstrap-progressbar/bootstrap-progressbar.min.js",
        "global/js/builder.js",
        "global/js/sidebar_hover.js",
        "global/js/application.js",
        "global/js/plugins.js",
        "global/js/widgets/notes.js",
        "global/js/quickview.js",
        "global/js/pages/search.js",
        "global/plugins/modernizr/modernizr-2.6.2-respond-1.1.0.min.js",
    ];
}