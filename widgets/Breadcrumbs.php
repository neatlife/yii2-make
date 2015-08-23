<?php

namespace suxiaolin\make\widgets;

use yii\helpers\Html;

class Breadcrumbs extends \yii\widgets\Breadcrumbs {
    public $tag = 'ol';
    
    public $title;
    
    public function run() {
        echo Html::beginTag('div', ['class' => 'header']);
        if (isset($this->title)) {
            echo Html::tag('h2', $this->title);
        }
        echo Html::beginTag('div', ['class' => 'breadcrumb-wrapper']);
        parent::run();
        echo Html::endTag('div');
        echo Html::endTag('div');
    }
}
