<?php
/**
 * Created by PhpStorm.
 * User: Maslov
 * Date: 01.04.2017
 * Time: 23:46
 */

namespace app\models;


use yii\db\ActiveRecord;

class Comment extends ActiveRecord
{
    public static function tableName()
    {
       return 'comment';
    }

    public function getDate()
    {
        return date('d.m.Y в H:i',strtotime($this->date));
    }

}