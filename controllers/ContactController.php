<?php
/**
 * Created by PhpStorm.
 * User: Maslov
 * Date: 27.03.2017
 * Time: 19:29
 */

namespace app\controllers;


use yii\web\Controller;

class ContactController extends Controller
{

    public function actionIndex()
    {
        return $this->render('contact');
    }
}