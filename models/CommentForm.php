<?php
/**
 * Created by PhpStorm.
 * User: Maslov
 * Date: 02.04.2017
 * Time: 20:39
 */

namespace app\models;


use yii\base\Model;

class CommentForm extends Model
{
    public $author;
    public $text;
    public $article;

    public function attributeLabels()
    {
        return [
            'author' => 'Имя',
            'text' => 'Сообщение',
        ];
    }

    public function rules()
    {
        return [
            [['author','text',], 'required'],
        ];
    }
}