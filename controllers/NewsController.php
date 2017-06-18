<?php
/**
 * Created by PhpStorm.
 * User: Maslov
 * Date: 27.03.2017
 * Time: 17:38
 */

namespace app\controllers;


use app\models\Article;
use app\models\Comment;
use app\models\CommentForm;
use app\models\NewsCategory;
use Yii;
use yii\data\Pagination;
use yii\web\Controller;
use yii\web\Response;

class NewsController extends Controller
{
    public function actionIndex()
    {
        $categories = NewsCategory::find()->all();

        $query = Article::find()->select(['id','date','title','image','category_id', 'author_id'])->orderBy(['id' => SORT_DESC]);
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(),'pageSize' => 6,
            'pageSizeParam' => false, 'forcePageParam' => false]);
        $articles = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        return $this->render('news', compact( ['categories', 'pages', 'articles']));
    }

    public function actionView($id)
    {
        $article = Article::find()->where(['id' => $id])->one();
        $article->updateCounters(['views' => 1]);
        $comments = Comment::find()->where(['article_id' => $id])->all();
        $commentForm = new CommentForm();
        return $this->render('news-item', compact(['article', 'comments', 'commentForm']));
    }

    public function actionComment()
    {
        $model = new CommentForm();
        $request = \Yii::$app->getRequest();
        if ($request->isPost && $model->load($request->post())) {
            if($model->validate()) {
                $comment = new Comment();
                $comment->author = $request->post('CommentForm')['author'];
                $comment->text = $request->post('CommentForm')['text'];
                $comment->article_id = $request->post('CommentForm')['article'];
                $comment->date = date('Y-m-d H-i-s');
                if($comment->save()) {
                    return $this->renderAjax('_comment', compact(['comment']));
                }
            }
        }
    }

    public function actionCategory()
    {

    }

}