<?php
namespace kl83\grid;

class SortableAsset extends \yii\web\AssetBundle
{
    public $js = [ 'base.js' ];
    public $css = [ 'base.css' ];
    public $depends = [
        'yii\jui\JuiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
    public function init()
    {
        $this->sourcePath = __DIR__."/../dist";
        parent::init();
    }
}
