<?php
/**
 * Created by PhpStorm.
 * User: Maslov
 * Date: 25.03.2017
 * Time: 22:37
 */

namespace app\assets;


use yii\web\AssetBundle;

class MDLAsset extends AssetBundle
{
    public $sourcePath = '@bower/material-design-lite';

    public $css = [
        'material.min.css',
    ];
    public $js = [
        'material.min.js',
    ];
}