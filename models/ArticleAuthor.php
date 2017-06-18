<?php
/**
 * Created by PhpStorm.
 * User: Maslov
 * Date: 02.04.2017
 * Time: 17:10
 */

namespace app\models;


use yii\db\ActiveRecord;

class ArticleAuthor extends ActiveRecord
{
    public static function tableName()
    {
        return 'admin';
    }
}