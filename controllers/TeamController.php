<?php
/**
 * Created by PhpStorm.
 * User: Maslov
 * Date: 27.03.2017
 * Time: 18:44
 */

namespace app\controllers;


use yii\web\Controller;

class TeamController extends Controller
{

    public function actionIndex()
    {
        return $this->render('team');
    }
}