<?php
/**
 * Created by PhpStorm.
 * User: Maslov
 * Date: 27.03.2017
 * Time: 22:59
 */

namespace app\controllers;


use yii\web\Controller;

class TournamentsController extends Controller
{
    public function actionIndex()
    {
        return $this->render('tournaments');
    }
}