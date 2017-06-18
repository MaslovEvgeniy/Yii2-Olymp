<?php
/**
 * Created by PhpStorm.
 * User: Maslov
 * Date: 01.04.2017
 * Time: 23:50
 */

namespace app\models;


use yii\db\ActiveRecord;

class Article extends ActiveRecord
{
    public static function tableName()
    {
        return 'article';
    }

    public function getCategory()
    {
        return $this->hasOne(NewsCategory::className(),['id' => 'category_id']);
    }

    public function getAuthor()
    {
        return $this->hasOne(ArticleAuthor::className(),['id' => 'author_id']);
    }

    public function getDate()
    {
        return date('d.m.Y', strtotime($this->date));
    }
}