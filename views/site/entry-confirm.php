<?php
use yii\helpers\Html;
?>
<p>Вы ввели следующую информацию:</p>

<ul>
    <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
    <li><label>Phone</label>: <?= Html::encode($model->phone) ?></li>
    <li><label>Message</label>: <?= Html::encode($model->message) ?></li>
</ul>