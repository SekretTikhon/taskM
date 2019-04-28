<?php
use yii\helpers\Html;
?>
<p>Message add successful:</p>

<ul>
    <li><label>Message</label>: <?= Html::encode($message->message) ?></li>
    <li><label>Email</label>: <?= Html::encode($message->email) ?></li>
    <li><label>Phone</label>: <?= Html::encode($message->phone) ?></li>
    <?= Html::a('Show all messages', ['message/select'], ['class' => 'btn btn-primary']) ?>
    <?= Html::a('Back to add new message', ['message/index'], ['class' => 'btn btn-primary']) ?>
</ul>