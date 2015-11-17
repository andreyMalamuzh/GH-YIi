<?php
use yii\helpers\Html;
?>

<h1><b>Your status update</b></h1>
<p>Text: </p>
<?= Html::encode($model->text)?>
<br>
<p>Permissions: </p>
<?php
echo $model->getPermissionsLabel($model->permissions);
?>
