<?php

namespace app\controllers;

use app\models\Article;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    public function actionIndex()
    {
        $latestArticles = Article::find()->select(['id','date','title','image','category_id','author_id'])
            ->orderBy(['id' => SORT_DESC])->limit(3)->all();

        return $this->render('index', compact('latestArticles'));
    }
}
