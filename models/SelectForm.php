<?php

namespace app\models;

use yii\base\Model;

class SelectForm extends Model
{
    public $email;
    public $phone;

    public function rules()
    {
        return [
            [['email', 'phone'], 'string'],

        ];
    }
    
}