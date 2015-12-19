<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<?php $form = ActiveForm::begin([
    'id' => 'myForm',
    'options' => [
        'class' => 'form-horizontal myForm',
        'enctype' => 'multipart/form-data'],
    'fieldConfig' => [
        'template' => '{label}<div class="col-xs-9">{input}</div><div class="col-xs-9 col-xs-offset-2">{error}</div>',
        'labelOptions' => ['class' => 'col-xs-2 control-label']
    ],
]);?>
    <h1>Заявка на ремонт устройства</h1>
<?= $form->field($model, 'name');?>
<?= $form->field($model, 'email');?>
<?= $form->field($model, 'city')->dropDownList(['Черкассы' => 'Черкассы', 'Киев' => 'Киев', 'Полтава' => 'Полтава'],
    ['prompt' => 'Выберите город...'])?>
<?= $form->field($model, 'phoneNumber');?>
<?= $form->field($model, 'device');?>
<?= $form->field($model, 'description')->textarea();?>
<?= $form->field($model, 'discountCard')->radioList(['Yes' => 'Да', 'No' => 'Нет']); ?>
<?= $form->field($model, 'call')->checkboxList(['Yes' => 'Да']);?>
<?= $form->field($model, 'imageFiles[]')->fileInput(['multiple' => true, 'accept' => 'image/*']) ?>

    <div class="form-group ">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary col-xs-offset-2'])?>
    </div>

<?php ActiveForm::end();?>