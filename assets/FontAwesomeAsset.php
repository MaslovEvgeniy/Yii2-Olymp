<?php
/**
 * Created by PhpStorm.
 * User: Maslov
 * Date: 26.03.2017
 * Time: 16:15
 */

namespace app\assets;


use yii\web\AssetBundle;

class FontAwesomeAsset extends AssetBundle
{
    public $sourcePath = '@bower/font-awesome';

    public $css = [
        'css/font-awesome.min.css',
    ];
}