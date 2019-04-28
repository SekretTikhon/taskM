<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'message') ?>

    <?= $form->field($model, 'email') ?>

    <?= $form->field($model, 'phone') ?>

    <div class="form-group">
        <?= Html::submitButton('Send message', ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Show all messages', ['message/select'], ['class' => 'btn btn-primary']) ?>
    </div>

    

<?php ActiveForm::end(); ?>