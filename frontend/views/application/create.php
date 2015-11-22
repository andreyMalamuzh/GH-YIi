<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<?php $form = ActiveForm::begin();?>
<?= $form->field($model, 'name');?>
<?= $form->field($model, 'email');?>
<?= $form->field($model, 'city')->dropDownList($model->getCity(),
            ['prompt' => 'Выберите город...'])?>
<?= $form->field($model, 'phoneNumber');?>
<?= $form->field($model, 'device');?>


    <div class="form-group">
        <?= Html::submitButton('Send', ['class' => 'btn btn-primary'])?>
    </div>

<?php ActiveForm::end();?>