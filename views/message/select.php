<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\widgets\ActiveForm;
$phone = null;
?>

<?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'email') ?>

    <?= $form->field($model, 'phone') ?>

    <div class="form-group">
        <?= Html::submitButton('Find', ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Back to add new message', ['message/index'], ['class' => 'btn btn-primary']) ?>
    </div>
    
<?php ActiveForm::end(); ?>

<?php 
    if ($messages == null): ?>
    <h1>Messages not found!</h1>
<?php else:?>
    <h1>Messages</h1>
<?php endif;?>
<ul>

<?php
    foreach ($messages as $message): ?>
    <li>
        <?= Html::encode("{$message->message}") ?>:
        <?= $message->email ?>,
        <?= $message->phone ?>
    </li>
<?php endforeach; ?>
</ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>