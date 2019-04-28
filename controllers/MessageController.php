<?php

namespace app\controllers;

use Yii;
use yii\web\Response;
use yii\web\Controller;
use yii\data\Pagination;
use app\models\Message;
use app\models\EntryForm;
use app\models\SelectForm;
use yii\helpers\Html;

class MessageController extends Controller
{
    public function actionSelect($email = null, $phone = null)
    {
        $model = new SelectForm();
        $model->load(Yii::$app->request->post());

        $email = $model->email;
        $phone = $model->phone;

        $query = Message::find();

        if (($email != null && $email != '') && ($phone != null && $phone != ''))
            $query = $query->where([
                'email' => $email,
                'phone' => $phone,
            ]);
        elseif ($email != null && $email != '')
            $query = $query->where(['email' => $email]);
        elseif ($phone != null && $phone != '')
            $query = $query->where(['phone' => $phone]);

        
        $pagination = new Pagination([
            'defaultPageSize' => 10,
            'totalCount' => $query->count(),
        ]);

        $messages = $query->orderBy('id')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        
        return $this->render('select', [
            'messages' => $messages,
            'pagination' => $pagination,
            'model' => $model,
        ]);
    }

    public function actionIndex()
    {
        $model = new EntryForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
        //if ($model->load($_POST)) {
            // данные в $model удачно проверены

            // делаем что-то полезное с $model ...
            
            $message = new Message();
            $message->message = Html::encode($model->message);
            $message->email = Html::encode($model->email);
            $message->phone = Html::encode($model->phone);

            $message->insert(false);

            return $this->render('add-confirm', ['message' => $message]);
        } else {
            // либо страница отображается первый раз, либо есть ошибка в данных
            return $this->render('index', ['model' => $model]);
        }




    }
}