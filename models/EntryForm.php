<?php

namespace app\models;

use yii\base\Model;

class EntryForm extends Model
{
    public $message;
    public $email;
    public $phone;

    
    public function rules()
    {
        return [
            [['message', 'email', 'phone'], 'required'],
            ['email', 'email'],
        ];
    }
    
}