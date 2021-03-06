<?php
namespace kak\widgets\itemselect\budles;

use yii\web\AssetBundle;

/**
 * Class TmplAsset
 * @package kak\widgets\area
 * @docs https://github.com/blueimp/JavaScript-Templates
 */
class TmplAsset extends AssetBundle
{
    public $sourcePath = '@bower/blueimp-tmpl';
    public $depends = [
        'yii\web\JqueryAsset'
    ];
    public $js = [
        'js/tmpl.min.js'
    ];

    public function init()
    {
        parent::init();
    }
}