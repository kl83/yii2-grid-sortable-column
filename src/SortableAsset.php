<?php

namespace kl83\grid;

use yii\web\AssetBundle;

class SortableAsset extends AssetBundle
{
    public $sourcePath = '@vendor/kl83/yii2-grid-sortable-column/src/web';
    public $js = ['sortable-column.js'];
    public $css = ['sortable-column.css'];
    public $depends = [
        'yii\jui\JuiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
