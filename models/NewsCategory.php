<?php
/**
 * Created by PhpStorm.
 * User: Maslov
 * Date: 01.04.2017
 * Time: 23:51
 */

namespace app\models;


use yii\db\ActiveRecord;

class NewsCategory extends ActiveRecord
{
    public static function tableName()
    {
        return 'news_category';
    }

    public function getArticles()
    {
        return $this->hasMany(Article::className(),['category_id' => 'id']);
    }
}