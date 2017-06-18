<?php
/**
 * Created by PhpStorm.
 * User: Maslov
 * Date: 27.03.2017
 * Time: 21:25
 */

namespace app\assets;


use yii\web\AssetBundle;

class GalleryAsset extends AssetBundle
{
    public $sourcePath = '@bower/';

    public $css = [
        'lightgallery.js/dist/css/lightgallery.min.css',
    ];
    public $js = [
        'lightgallery.js/dist/js/lightgallery.min.js',
        'lg-thumbnail.js/dist/lg-thumbnail.min.js',
    ];
}