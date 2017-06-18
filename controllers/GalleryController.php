<?php
/**
 * Created by PhpStorm.
 * User: Maslov
 * Date: 27.03.2017
 * Time: 21:27
 */

namespace app\controllers;


use yii\web\Controller;

class GalleryController extends Controller
{
    public function actionIndex()
    {
        return $this->render('gallery');
    }

}