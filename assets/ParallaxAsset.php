<?php
/**
 * Created by PhpStorm.
 * User: Maslov
 * Date: 26.03.2017
 * Time: 22:48
 */

namespace app\assets;


use yii\web\AssetBundle;

class ParallaxAsset extends AssetBundle
{
    public $sourcePath = '@bower/parallax';

    public $js = [
        'parallax.min.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}