<?php

namespace app\models;

use yii\mongodb\ActiveRecord;

class Message extends ActiveRecord
{
    public static function collectionName()
    {
        return 'message';
    }
    public function attributes()
    {
        return ['_id', 'message', 'email', 'phone'];
    }
}